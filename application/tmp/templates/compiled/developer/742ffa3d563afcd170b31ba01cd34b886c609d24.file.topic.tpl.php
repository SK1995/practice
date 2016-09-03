<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/topic/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34154790457c7a41a85ae49-07431498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '742ffa3d563afcd170b31ba01cd34b886c609d24' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/topic/topic.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '72ba7599dc5306238216236c169379b88075080e' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/article/article.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34154790457c7a41a85ae49-07431498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'isList' => 0,
    'mods' => 0,
    'component' => 0,
    'classes' => 0,
    'isPreview' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'items' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41aa02a48_87922517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41aa02a48_87922517')) {function content_57c7a41aa02a48_87922517($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_date_format')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_block_hookb')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/block.hookb.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('article', null, 0);?>


	<?php $_smarty_tpl->tpl_vars['article'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['topic']) ? $_smarty_tpl->tpl_vars_local['topic']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['topic'] = new Smarty_variable($_smarty_tpl->tpl_vars['article']->value, null, 0);?>

	
	<?php $_smarty_tpl->tpl_vars['isPreview'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['isPreview']) ? $_smarty_tpl->tpl_vars_local['isPreview']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['article']->value->getUser(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['article']->value->getType() ? $_smarty_tpl->tpl_vars['article']->value->getType() : (isset($_smarty_tpl->tpl_vars_local['type']) ? $_smarty_tpl->tpl_vars_local['type']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['isList'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['isList']) ? $_smarty_tpl->tpl_vars_local['isList']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null), null, 0);?>

	<?php if (!$_smarty_tpl->tpl_vars['isList']->value){?>
		<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." single", null, 0);?>
	<?php }?>


	<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." topic js-topic", null, 0);?>



	<article class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
		
		
			<header class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-header">
				
				<h1 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title word-wrap">
					
	<?php if ($_smarty_tpl->tpl_vars['topic']->value->getPublish()==0){?>
		<i class="icon-file" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic']['is_draft'];?>
"></i>
	<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['isList']->value){?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
						<?php }else{ ?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>

						<?php }?>
					
				</h1>

				
				<ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info">
					
	<?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable($_smarty_tpl->tpl_vars['topic']->value->getBlogs(), null, 0);?>

	<?php if (!$_smarty_tpl->tpl_vars['isPreview']->value){?>
        <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['blog']->value->getType()!='personal'){?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item--blog">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
            <?php }?>
        <?php } ?>
	<?php }?>

						<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item--date">
							<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['article']->value->getDatePublish(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['article']->value->getDatePublish(),'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
								<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['article']->value->getDatePublish(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>

							</time>
						</li>
					
				</ul>

				
				<?php if ($_smarty_tpl->tpl_vars['article']->value->getIsAllowAction()&&!$_smarty_tpl->tpl_vars['isPreview']->value){?>
					
						<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('icon'=>'edit','url'=>$_smarty_tpl->tpl_vars['article']->value->getUrlEdit(),'text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['edit'],'show'=>$_smarty_tpl->tpl_vars['article']->value->getIsAllowEdit()),array('icon'=>'trash','url'=>((string)$_smarty_tpl->tpl_vars['article']->value->getUrlDelete())."?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value),'text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['remove'],'show'=>$_smarty_tpl->tpl_vars['article']->value->getIsAllowDelete())), null, 0);?>
					

					<?php echo smarty_function_component(array('_default_short'=>'actionbar','items'=>array(array('buttons'=>$_smarty_tpl->tpl_vars['items']->value))),$_smarty_tpl);?>

				<?php }?>
			</header>
		


		
		
	
	<?php $_smarty_tpl->tpl_vars['previewImage'] = new Smarty_variable($_smarty_tpl->tpl_vars['topic']->value->getPreviewImageWebPath('900x300crop'), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['previewImage']->value){?>
		<div class="topic-preview-image">
			<img src="<?php echo $_smarty_tpl->tpl_vars['previewImage']->value;?>
" />
		</div>
	<?php }?>

	
	
			<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-content">
				<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-text text">
					
                        <?php if ($_smarty_tpl->tpl_vars['isList']->value&&$_smarty_tpl->tpl_vars['article']->value->getTextShort()){?>
                            <?php echo $_smarty_tpl->tpl_vars['article']->value->getTextShort();?>

                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['article']->value->getText();?>

                        <?php }?>
					
				</div>

				
				<?php if ($_smarty_tpl->tpl_vars['isList']->value&&$_smarty_tpl->tpl_vars['article']->value->getTextShort()){?>
					<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['article']->value->getCutText())===null||$tmp==='' ? $_smarty_tpl->tpl_vars['aLang']->value['topic']['read_more'] : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-cut",'url'=>((string)$_smarty_tpl->tpl_vars['article']->value->getUrl())."#cut",'text'=>$_tmp1),$_smarty_tpl);?>

				<?php }?>
			</div>
		

	
	
		<?php if (!$_smarty_tpl->tpl_vars['isList']->value){?>
			<?php echo smarty_function_component(array('_default_short'=>'property','template'=>'output.list','properties'=>$_smarty_tpl->tpl_vars['topic']->value->property->getPropertyList()),$_smarty_tpl);?>

		<?php }?>
	

	
	
		<?php if (!$_smarty_tpl->tpl_vars['isList']->value){?>
			<?php echo smarty_function_component(array('_default_short'=>'poll','template'=>'list','polls'=>$_smarty_tpl->tpl_vars['topic']->value->getPolls()),$_smarty_tpl);?>

		<?php }?>
	



		
		
	<?php if (!$_smarty_tpl->tpl_vars['isList']->value&&$_smarty_tpl->tpl_vars['topic']->value->getTypeObject()->getParam('allow_tags')){?>
		<?php $_smarty_tpl->tpl_vars['favourite'] = new Smarty_variable($_smarty_tpl->tpl_vars['topic']->value->getFavourite(), null, 0);?>

		<?php if (!$_smarty_tpl->tpl_vars['isPreview']->value){?>
			<?php echo smarty_function_component(array('_default_short'=>'tags-favourite','tags'=>$_smarty_tpl->tpl_vars['topic']->value->getTagsArray(),'tagsFavourite'=>$_smarty_tpl->tpl_vars['favourite']->value ? $_smarty_tpl->tpl_vars['favourite']->value->getTagsArray() : array(),'isEditable'=>!$_smarty_tpl->tpl_vars['favourite']->value,'targetType'=>'topic','targetId'=>$_smarty_tpl->tpl_vars['topic']->value->getId()),$_smarty_tpl);?>

		<?php }?>
	<?php }?>

	
			<footer class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-footer">
				
				
					<ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info clearfix">
						
	
	<?php if (!$_smarty_tpl->tpl_vars['isPreview']->value){?>
		<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item--vote">
			<?php $_smarty_tpl->tpl_vars['isExpired'] = new Smarty_variable(strtotime($_smarty_tpl->tpl_vars['topic']->value->getDatePublish())<time()-Config::Get('acl.vote.topic.limit_time'), null, 0);?>

			<?php echo smarty_function_component(array('_default_short'=>'vote','target'=>$_smarty_tpl->tpl_vars['topic']->value,'classes'=>'js-vote-topic','mods'=>'small white topic','useAbstain'=>true,'isLocked'=>($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['topic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||$_smarty_tpl->tpl_vars['isExpired']->value,'showRating'=>$_smarty_tpl->tpl_vars['topic']->value->getVote()||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['topic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||$_smarty_tpl->tpl_vars['isExpired']->value),$_smarty_tpl);?>

		</li>
	<?php }?>

	
							
							<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item--author">
								<?php echo smarty_function_component(array('_default_short'=>'user','template'=>'item','user'=>$_smarty_tpl->tpl_vars['user']->value,'avatarSize'=>48,'mods'=>'rounded'),$_smarty_tpl);?>

							</li>

							
							
							<?php if ($_smarty_tpl->tpl_vars['isList']->value&&(!$_smarty_tpl->tpl_vars['article']->value->getForbidComment()||($_smarty_tpl->tpl_vars['article']->value->getForbidComment()&&$_smarty_tpl->tpl_vars['article']->value->getCountComment()))){?>
								<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item--comments">
									<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value->getUrl();?>
#comments">
										<?php echo smarty_function_lang(array('name'=>'comments.comments_declension','count'=>$_smarty_tpl->tpl_vars['article']->value->getCountComment(),'plural'=>true),$_smarty_tpl);?>

									</a>

									<?php if ($_smarty_tpl->tpl_vars['article']->value->getCountCommentNew()){?><span>+<?php echo $_smarty_tpl->tpl_vars['article']->value->getCountCommentNew();?>
</span><?php }?>
								</li>
							<?php }?>
						

	<?php if (!$_smarty_tpl->tpl_vars['isList']->value&&!$_smarty_tpl->tpl_vars['isPreview']->value){?>
		
		<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item--favourite">
			<?php echo smarty_function_component(array('_default_short'=>'favourite','classes'=>"js-favourite-".((string)$_smarty_tpl->tpl_vars['type']->value),'target'=>$_smarty_tpl->tpl_vars['article']->value),$_smarty_tpl);?>

		</li>

		
		<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-info-item--share">
			<a href="#" class="icon-share js-popover-default" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic']['share'];?>
" data-tooltip-target="#topic_share_<?php echo $_smarty_tpl->tpl_vars['topic']->value->getId();?>
"></a>
		</li>
	<?php }?>
 
					</ul>
				 
			</footer>
		

	
	<?php if (!$_smarty_tpl->tpl_vars['isPreview']->value){?>
		<div class="tooltip" id="topic_share_<?php echo $_smarty_tpl->tpl_vars['topic']->value->getId();?>
">
			<div class="tooltip-content js-tooltip-content">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['topic']->value,'isList'=>$_smarty_tpl->tpl_vars['isList']->value)); $_block_repeat=true; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['topic']->value,'isList'=>$_smarty_tpl->tpl_vars['isList']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<div class="yashare-auto-init" data-yashareTitle="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
" data-yashareLink="<?php echo $_smarty_tpl->tpl_vars['topic']->value->getUrl();?>
" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,gplus"></div>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['topic']->value,'isList'=>$_smarty_tpl->tpl_vars['isList']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
	<?php }?>
 
	</article>
<?php }} ?>