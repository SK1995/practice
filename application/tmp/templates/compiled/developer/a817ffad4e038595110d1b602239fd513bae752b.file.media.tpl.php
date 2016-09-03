<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67164974857c79542a0e205-45752141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a817ffad4e038595110d1b602239fd513bae752b' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/media.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'b52c28094794bdb3a3be2905e690d0905b8b4d92' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/modal/modal.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'e6fe6d98f2958098665194d413c767b97b6e608f' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/panes/pane.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '0521cf32a9e528a3816836f841a4ad07b10f64e2' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/uploader/uploader.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'af23f01a0c9b9bc1032aaa7a6a7d2ffee89c3c0a' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/uploader/uploader-block.info-group.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'd4e4834a1d2c3cf3be248185eae5364bc33df69d' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/uploader/uploader-block.info.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '9612d4b882e59d0886e8bde90701f44bc965903e' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/uploader/uploader-block.insert.image.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '76e88a2f9b795d12cee1673f7e58d1b1a1c2483b' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/uploader/uploader-block.photoset.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'bb7b77482c01d18179e85f28bc38abe3c0bdca1c' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/uploader/uploader.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'bb55df9ee570e92bb12136e9383bc6496b7a3a0c' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/panes/pane.insert.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '394b03b2edfadca069b1655eaf0063213d1cb7f2' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/panes/pane.photoset.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '7541655321818033e7c4d8622f420ee7968b5e2d' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/panes/pane.url.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '05b0a5a33527a56bd275988c287fc450ff2cb8e0' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/media/media-content.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67164974857c79542a0e205-45752141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'showFooter' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'id' => 0,
    'options' => 0,
    'title' => 0,
    'content' => 0,
    'tabs' => 0,
    'body' => 0,
    'primaryButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79542c562b4_55543713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79542c562b4_55543713')) {function content_57c79542c562b4_55543713($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('modal', null, 0);?>



<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = array('title','content','tabs','body','id','options','showFooter','primaryButton','mods','classes','attributes'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['param']->value)] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]) ? $_smarty_tpl->tpl_vars_local[$_smarty_tpl->tpl_vars['param']->value]->value : null), null, 0);?>
<?php } ?>


<?php $_smarty_tpl->tpl_vars['showFooter'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['showFooter']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>


    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." media", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['classes']->value)." js-modal-media", null, 0);?>
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_variable(array_merge((($tmp = @$_smarty_tpl->tpl_vars['options']->value)===null||$tmp==='' ? array() : $tmp),array('center'=>'false')), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['showFooter'] = new Smarty_variable(false, null, 0);?>
    <?php ob_start();?><?php /*  Call merged included template "./media-content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./media-content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '67164974857c79542a0e205-45752141');
content_57c79542a45d97_78449569($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./media-content.tpl" */?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['body'] = new Smarty_variable($_tmp2, null, 0);?>



<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>

    id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
    data-type="modal"
    <?php echo smarty_function_cattr(array('prefix'=>'data-lsmodal-','list'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>
>

    
    
        <header class="modal-header">
            
            <h3 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

            
            <button class="modal-close" data-type="modal-close">
                <?php echo smarty_function_component(array('_default_short'=>'icon','icon'=>'remove','attributes'=>array('aria-hidden'=>'true')),$_smarty_tpl);?>

            </button>
        </header>
    

    

    
    
        <?php if ($_smarty_tpl->tpl_vars['content']->value){?>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        <?php }?>
    

    
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'tabs','classes'=>'modal-tabs js-modal-tabs','params'=>$_smarty_tpl->tpl_vars['tabs']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo is_array($_smarty_tpl->tpl_vars['tabs']->value) ? $_tmp1 : $_smarty_tpl->tpl_vars['tabs']->value;?>


    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>


    
    
        <?php if ($_smarty_tpl->tpl_vars['showFooter']->value){?>
            <div class="modal-footer">
                
                    
                    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'common.cancel'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','type'=>'button','text'=>$_tmp2,'attributes'=>array('data-type'=>'modal-close')),$_smarty_tpl);?>


                    
                    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','params'=>$_smarty_tpl->tpl_vars['primaryButton']->value),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo is_array($_smarty_tpl->tpl_vars['primaryButton']->value) ? $_tmp3 : $_smarty_tpl->tpl_vars['primaryButton']->value;?>

                
            </div>
        <?php }?>
    
</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/media-content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542a45d97_78449569')) {function content_57c79542a45d97_78449569($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<div class="media clearfix <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
">
    <?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.nav.insert'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php /*  Call merged included template "./panes/pane.insert.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./panes/pane.insert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '67164974857c79542a0e205-45752141');
content_57c79542a4eb91_75777161($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./panes/pane.insert.tpl" */?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.nav.photoset'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php /*  Call merged included template "./panes/pane.photoset.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./panes/pane.photoset.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '67164974857c79542a0e205-45752141');
content_57c79542b7d666_31658204($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./panes/pane.photoset.tpl" */?><?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.nav.url'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php /*  Call merged included template "./panes/pane.url.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./panes/pane.url.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '67164974857c79542a0e205-45752141');
content_57c79542bcaf80_51123173($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./panes/pane.url.tpl" */?><?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'tabs','classes'=>'media-nav js-modal-tabs','mods'=>'align-left','tabs'=>array(array('text'=>$_tmp1,'body'=>$_tmp2,'classes'=>'js-tab-show-gallery','attributes'=>'data-media-name="insert"'),array('text'=>$_tmp3,'body'=>$_tmp4,'classes'=>'js-tab-show-gallery','attributes'=>'data-media-name="photoset"'),array('text'=>$_tmp5,'body'=>$_tmp6,'attributes'=>'data-media-name="url"'))),$_smarty_tpl);?>

</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/panes/pane.insert.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542a4eb91_75777161')) {function content_57c79542a4eb91_75777161($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>
	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['id']) ? $_smarty_tpl->tpl_vars_local['id']->value : null), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-insert', null, 0);?>


<div class="media-pane-content js-media-pane-content">
	
	<?php /*  Call merged included template "./../uploader/uploader.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../uploader/uploader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('attributes'=>array('id'=>'media-uploader'),'classes'=>'js-media-uploader','targetParams'=>$_smarty_tpl->tpl_vars['aTargetParams']->value,'targetType'=>$_smarty_tpl->tpl_vars['sMediaTargetType']->value,'targetId'=>$_smarty_tpl->tpl_vars['sMediaTargetId']->value,'targetTmp'=>$_smarty_tpl->tpl_vars['sMediaTargetTmp']->value), 0, '67164974857c79542a0e205-45752141');
content_57c79542a6ce67_91308998($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../uploader/uploader.tpl" */?>

</div>

<div class="media-pane-footer">
	
	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.insert.submit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-insert-submit','text'=>$_tmp1),$_smarty_tpl);?>


</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/uploader/uploader.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542a6ce67_91308998')) {function content_57c79542a6ce67_91308998($_smarty_tpl) {?><?php if (!is_callable('smarty_function_json')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.json.php';
if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_hook')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('uploader', null, 0);?>


	<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['show'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['show']) ? $_smarty_tpl->tpl_vars_local['show']->value : null))===null||$tmp==='' ? true : $tmp), null, 0);?>

    <?php ob_start();?><?php echo smarty_function_json(array('var'=>(isset($_smarty_tpl->tpl_vars_local['targetType']) ? $_smarty_tpl->tpl_vars_local['targetType']->value : null)),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_json(array('var'=>(isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null)),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_json(array('var'=>(isset($_smarty_tpl->tpl_vars_local['targetTmp']) ? $_smarty_tpl->tpl_vars_local['targetTmp']->value : null)),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable(array_merge((($tmp = @$_smarty_tpl->tpl_vars['attributes']->value)===null||$tmp==='' ? array() : $tmp),array('data-param-target_type'=>$_tmp1,'data-param-target_id'=>$_tmp2,'data-param-target_tmp'=>$_tmp3)), null, 0);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
	
	<?php echo smarty_function_hook(array('run'=>'uploader_begin'),$_smarty_tpl);?>


	
		
		<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'upload-area','classes'=>'js-uploader-area','inputClasses'=>'js-uploader-file','inputName'=>'filedata'),$_smarty_tpl);?>


		
		<?php echo smarty_function_hook(array('run'=>'uploader_area_after'),$_smarty_tpl);?>


		
		<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-wrapper clearfix">
			
			<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-aside js-uploader-aside is-empty">
				
				<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'uploader.info.empty'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'alert','mods'=>'empty','text'=>$_tmp1,'classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-aside-empty js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-aside-empty"),$_smarty_tpl);?>


				
				<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-aside-blocks js-uploader-blocks">
					
						<?php /*  Call merged included template "./uploader-block.info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./uploader-block.info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '67164974857c79542a0e205-45752141');
content_57c79542ac70c0_77731178($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./uploader-block.info.tpl" */?>
					
	
	<?php /*  Call merged included template "./uploader-block.insert.image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./uploader-block.insert.image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '67164974857c79542a0e205-45752141');
content_57c79542b26cb0_25932523($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./uploader-block.insert.image.tpl" */?>

	
	<?php /*  Call merged included template "./uploader-block.photoset.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./uploader-block.photoset.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '67164974857c79542a0e205-45752141');
content_57c79542b4f022_31445334($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./uploader-block.photoset.tpl" */?>

				</div>
			</div>

			
			<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-content js-uploader-content">
				
				<?php echo smarty_function_hook(array('run'=>'uploader_content_begin'),$_smarty_tpl);?>


				
				<ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-file-list js-uploader-list"></ul>

				
				<?php echo smarty_function_hook(array('run'=>'uploader_content_end'),$_smarty_tpl);?>

			</div>
		</div>
	

	
	<?php echo smarty_function_hook(array('run'=>'uploader_end'),$_smarty_tpl);?>

</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/framework/frontend/components/uploader/uploader-block.info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542ac70c0_77731178')) {function content_57c79542ac70c0_77731178($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_hook')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
	<?php $_smarty_tpl->tpl_vars['component_info'] = new Smarty_variable('uploader-info', null, 0);?>

	
	<div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-block">
		
		<div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-base">
			
			<img src="" alt="" class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-base-image js-<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property" data-name="image" width="100" height="100">

			
			<ul class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-base-properties">
				<li><strong class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property-name word-wrap js-<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property" data-name="name"></strong></li>
				<li class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property-date js-<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property" data-name="date"></li>
				<li><span class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property-size js-<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property" data-name="size"></span></li>
			</ul>
		</div>

		
		<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'uploader.info.types.image.dimensions'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'uploader.info.types.image.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php /*  Call merged included template "./uploader-block.info-group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./uploader-block.info-group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>'1','properties'=>array(array('name'=>'dimensions','label'=>$_tmp1)),'propertiesFields'=>array(array('name'=>'title','label'=>$_tmp2))), 0, '67164974857c79542a0e205-45752141');
content_57c79542af0803_78812391($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./uploader-block.info-group.tpl" */?>

		
		<?php echo smarty_function_hook(array('run'=>'uploader_info_end'),$_smarty_tpl);?>

	</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'uploader','template'=>'block','classes'=>'uploader-info js-uploader-info','content'=>Smarty::$_smarty_vars['capture']['block_content']),$_smarty_tpl);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/framework/frontend/components/uploader/uploader-block.info-group.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542af0803_78812391')) {function content_57c79542af0803_78812391($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component_info'] = new Smarty_variable('uploader-info', null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-group js-<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-group" data-type="<?php echo (isset($_smarty_tpl->tpl_vars_local['type']) ? $_smarty_tpl->tpl_vars_local['type']->value : null);?>
">
	
	<ul class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-actions">
		<li><a href="#" class="link-dotted js-<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-remove"><?php echo smarty_function_lang(array('name'=>'uploader.actions.remove'),$_smarty_tpl);?>
</a></li>
	</ul>

	
	<div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-properties">
		
		<ul class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-list">
			<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['properties']) ? $_smarty_tpl->tpl_vars_local['properties']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
				<li class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-list-item">
					<span class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-list-item-label"><?php echo $_smarty_tpl->tpl_vars['property']->value['label'];?>
:</span>
					<span class="js-<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-property" data-name="<?php echo $_smarty_tpl->tpl_vars['property']->value['name'];?>
"></span>
				</li>
			<?php } ?>
		</ul>

		
		<div class="<?php echo $_smarty_tpl->tpl_vars['component_info']->value;?>
-fields">
			<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['propertiesFields']) ? $_smarty_tpl->tpl_vars_local['propertiesFields']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
				<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>$_smarty_tpl->tpl_vars['property']->value['name'],'inputClasses'=>"js-".((string)$_smarty_tpl->tpl_vars['component_info']->value)."-property",'inputAttributes'=>array('data-name'=>$_smarty_tpl->tpl_vars['property']->value['name']),'label'=>$_smarty_tpl->tpl_vars['property']->value['label']),$_smarty_tpl);?>

			<?php } ?>
		</div>
	</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/uploader/uploader-block.insert.image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542b26cb0_25932523')) {function content_57c79542b26cb0_25932523($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
	<form method="post" action="" enctype="multipart/form-data">
		
		<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.no'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.left'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.right'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.center'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>'align','label'=>$_tmp1,'items'=>array(array('value'=>'','text'=>$_tmp2),array('value'=>'left','text'=>$_tmp3),array('value'=>'right','text'=>$_tmp4),array('value'=>'center','text'=>$_tmp5))),$_smarty_tpl);?>


		
		<?php if ((($tmp = @(isset($_smarty_tpl->tpl_vars_local['useSizes']) ? $_smarty_tpl->tpl_vars_local['useSizes']->value : null))===null||$tmp==='' ? true : $tmp)){?>
			<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.insert.settings.fields.size.label'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.insert.settings.fields.size.original'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>'size','label'=>$_tmp6,'items'=>array(array('value'=>'original','text'=>$_tmp7))),$_smarty_tpl);?>

		<?php }?>
	</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.insert.settings.title'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'uploader','template'=>'block','title'=>$_tmp8,'content'=>Smarty::$_smarty_vars['capture']['block_content'],'classes'=>'js-media-info-block','attributes'=>array('data-type'=>'insert','data-filetype'=>'1')),$_smarty_tpl);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/uploader/uploader-block.photoset.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542b4f022_31445334')) {function content_57c79542b4f022_31445334($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
    <form method="post" action="" enctype="multipart/form-data">
        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.settings.fields.use_thumbs.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'use_thumbs','checked'=>true,'label'=>$_tmp1),$_smarty_tpl);?>


        
        <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.settings.fields.show_caption.label'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'show_caption','label'=>$_tmp2),$_smarty_tpl);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.photoset.settings.title'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'uploader','template'=>'block','title'=>$_tmp3,'content'=>Smarty::$_smarty_vars['capture']['block_content'],'classes'=>'js-media-info-block','attributes'=>array('data-type'=>'photoset')),$_smarty_tpl);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/panes/pane.photoset.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542b7d666_31658204')) {function content_57c79542b7d666_31658204($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>
	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['id']) ? $_smarty_tpl->tpl_vars_local['id']->value : null), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-photoset', null, 0);?>


<div class="media-pane-content js-media-pane-content">
	
</div>

<div class="media-pane-footer">
	
	<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.photoset.submit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-photoset-submit','text'=>$_tmp1),$_smarty_tpl);?>


</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/panes/pane.url.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542bcaf80_51123173')) {function content_57c79542bcaf80_51123173($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>
	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['id']) ? $_smarty_tpl->tpl_vars_local['id']->value : null), null, 0);?>

	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('tab-media-url', null, 0);?>


<div class="media-pane-content js-media-pane-content">
	
	<form method="post" action="" enctype="multipart/form-data" class="mb-20 js-media-url-form">
		
		
		

		
		<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.url.fields.url.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'url','value'=>'http://','inputClasses'=>'js-media-url-form-url','label'=>$_tmp1),$_smarty_tpl);?>

	</form>

	<div class="mb-15 js-media-url-image-preview" style="display: none"></div>

	<div class="js-media-url-settings-blocks">
		<?php /*  Call merged included template "../uploader/uploader-block.insert.image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('../uploader/uploader-block.insert.image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('useSizes'=>false), 0, '67164974857c79542a0e205-45752141');
content_57c79542be38b6_08493519($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../uploader/uploader-block.insert.image.tpl" */?>
	</div>

</div>

<div class="media-pane-footer">
	
	<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.url.submit_insert'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-url-submit-insert','text'=>$_tmp1),$_smarty_tpl);?>


	<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.url.submit_upload'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'primary','classes'=>'js-media-url-submit-upload','text'=>$_tmp2),$_smarty_tpl);?>


</div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/media/uploader/uploader-block.insert.image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c79542be38b6_08493519')) {function content_57c79542be38b6_08493519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('block_content', null, null); ob_start(); ?>
	<form method="post" action="" enctype="multipart/form-data">
		
		<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.no'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.left'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.right'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.image_align.center'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>'align','label'=>$_tmp1,'items'=>array(array('value'=>'','text'=>$_tmp2),array('value'=>'left','text'=>$_tmp3),array('value'=>'right','text'=>$_tmp4),array('value'=>'center','text'=>$_tmp5))),$_smarty_tpl);?>


		
		<?php if ((($tmp = @(isset($_smarty_tpl->tpl_vars_local['useSizes']) ? $_smarty_tpl->tpl_vars_local['useSizes']->value : null))===null||$tmp==='' ? true : $tmp)){?>
			<?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.insert.settings.fields.size.label'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'media.insert.settings.fields.size.original'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>'size','label'=>$_tmp6,'items'=>array(array('value'=>'original','text'=>$_tmp7))),$_smarty_tpl);?>

		<?php }?>
	</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'media.insert.settings.title'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'uploader','template'=>'block','title'=>$_tmp8,'content'=>Smarty::$_smarty_vars['capture']['block_content'],'classes'=>'js-media-info-block','attributes'=>array('data-type'=>'insert','data-filetype'=>'1')),$_smarty_tpl);?>
<?php }} ?>