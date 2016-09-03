<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:58
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/skins/skin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101493260857c794fe24be49-10298764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36674a79d4f28adf39637a9dda77722c73a766bc' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/skins/skin.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101493260857c794fe24be49-10298764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oSkin' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aTheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794fe2c2c46_00061170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794fe2c2c46_00061170')) {function content_57c794fe2c2c46_00061170($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
?>

<div class="skin-list-item <?php if ($_smarty_tpl->tpl_vars['oSkin']->iteration%2==0){?>even<?php }?>">
	<img src="<?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getPreviewImage();?>
" class="skin-list-item-image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oSkin']->value->getViewName(), ENT_QUOTES, 'UTF-8', true);?>
" />

	<div class="skin-list-item-content">
		<h4 class="skin-list-item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oSkin']->value->getViewName(), ENT_QUOTES, 'UTF-8', true);?>
</h4>

		<div class="mb-15">
			
			<?php if (!$_smarty_tpl->tpl_vars['oSkin']->value->getIsCurrent()){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getChangeSkinUrl();?>
" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['use_skin'];?>
</a>

				
				<?php if ($_smarty_tpl->tpl_vars['oSkin']->value->getInPreview()){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getTurnOffPreviewUrl();?>
" class="button button-primary active"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['preview_skin'];?>
</a>
				<?php }else{ ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getTurnOnPreviewUrl();?>
" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['preview_skin'];?>
</a>
				<?php }?>
			<?php }?>
		</div>

		
		<?php if ($_smarty_tpl->tpl_vars['oSkin']->value->getXml()){?>
			<div class="skin-list-item-info">
				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['author'];?>
:</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getAuthor();?>
</dd>
				</dl>
				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['homepage'];?>
:</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getHomepage();?>
</dd>
				</dl>
				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['version'];?>
:</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getVersion();?>
</dd>
				</dl>
				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['description'];?>
:</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['oSkin']->value->getDescription();?>
</dd>
				</dl>

				<?php if ($_smarty_tpl->tpl_vars['oSkin']->value->getThemes()&&count($_smarty_tpl->tpl_vars['oSkin']->value->getThemes())>0){?>
					<dl>
						<dt><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['themes'];?>
:</dt>
						<dd>
							<?php if ($_smarty_tpl->tpl_vars['oSkin']->value->getIsCurrent()){?>
								
								<form action="<?php echo smarty_function_router(array('page'=>"admin/skins/changetheme/".((string)$_smarty_tpl->tpl_vars['oSkin']->value->getName())),$_smarty_tpl);?>
" enctype="application/x-www-form-urlencoded" method="post">
									<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

									<select name="theme" class="width-150">
										<?php  $_smarty_tpl->tpl_vars['aTheme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aTheme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oSkin']->value->getThemes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['aTheme']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['aTheme']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['aTheme']->key => $_smarty_tpl->tpl_vars['aTheme']->value){
$_smarty_tpl->tpl_vars['aTheme']->_loop = true;
 $_smarty_tpl->tpl_vars['aTheme']->iteration++;
 $_smarty_tpl->tpl_vars['aTheme']->last = $_smarty_tpl->tpl_vars['aTheme']->iteration === $_smarty_tpl->tpl_vars['aTheme']->total;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['aTheme']->value['value'];?>
" <?php if (Config::Get('view.theme')==$_smarty_tpl->tpl_vars['aTheme']->value['value']){?>selected="selected"<?php }?>>
												<?php echo $_smarty_tpl->tpl_vars['aTheme']->value['description'];?>

											</option>
										<?php } ?>
									</select>

									<button type="submit" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['skin']['change_theme'];?>
</button>
								</form>
							<?php }else{ ?>
								
								<?php  $_smarty_tpl->tpl_vars['aTheme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aTheme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oSkin']->value->getThemes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['aTheme']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['aTheme']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['aTheme']->key => $_smarty_tpl->tpl_vars['aTheme']->value){
$_smarty_tpl->tpl_vars['aTheme']->_loop = true;
 $_smarty_tpl->tpl_vars['aTheme']->iteration++;
 $_smarty_tpl->tpl_vars['aTheme']->last = $_smarty_tpl->tpl_vars['aTheme']->iteration === $_smarty_tpl->tpl_vars['aTheme']->total;
?>
									<span><?php echo $_smarty_tpl->tpl_vars['aTheme']->value['value'];?>
</span>
									<i class="icon-info-sign" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aTheme']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
									<?php if (!$_smarty_tpl->tpl_vars['aTheme']->last){?>,<?php }?>
								<?php } ?>
							<?php }?>
						</dd>
					</dl>
				<?php }?>
			</div>
		<?php }?>
	</div>
</div><?php }} ?>