<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.home.activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11604397157c794f24ec5b7-41210801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e6fef9cb8d23bbcb13b7e273fee2068df77a61' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.home.activity.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'b5cc9fafcfc825fd0681bc319e539d9d2a7ed4ec' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks/block.aside.base.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11604397157c794f24ec5b7-41210801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'bBlockNotShow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f253d953_70065511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f253d953_70065511')) {function content_57c794f253d953_70065511($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
?>



<?php if (!$_smarty_tpl->tpl_vars['bBlockNotShow']->value){?>
	

	<div class="block block-type-home-activity block-home" id="" >
		
		
			<header class="block-header">
				<h3 class="block-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['activity'];?>
</h3>

				
	<button class="button button-icon js-dropdown" data-dropdown-target="dropdown-admin-index-stream-menu" id="dropdown-admin-index-stream-menu-trigger">
		<i class="icon-settings-14"></i>
	</button>

	<div class="dropdown-menu p15" id="dropdown-admin-index-stream-menu">
		<form action="<?php echo smarty_function_router(array('page'=>'admin/ajax-get-index-activity'),$_smarty_tpl);?>
" method="post" enctype="application/x-www-form-urlencoded" id="admin_index_activity_form">
			<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

			<div class="mb-15">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['with_all_checkboxes'];?>
:
				<input type="checkbox" class="js-check-all" data-checkboxes-class="js-index-activity-filter" checked="checked" />
			</div>

			<?php  $_smarty_tpl->tpl_vars['sEventType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sEventType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aEventTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sEventType']->key => $_smarty_tpl->tpl_vars['sEventType']->value){
$_smarty_tpl->tpl_vars['sEventType']->_loop = true;
?>
				<label>
					<input type="checkbox" name="filter[<?php echo $_smarty_tpl->tpl_vars['sEventType']->value;?>
]" checked="checked" value="1" class="js-index-activity-filter" />
					<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['index']['activity_type'][$_smarty_tpl->tpl_vars['sEventType']->value];?>

				</label>
			<?php } ?>

			<button type="submit" name="submit_change_activity_settings" class="button button-primary mt-20"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['save'];?>
</button>
		</form>
	</div>

			</header>
		
		
		

		
		
		
		

		
		
			<div class="block-content">
				
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."actions/ActionAdmin/index/activity/event_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			</div>
		
		
		

		
		
			<footer class="block-footer">
				
	
	<?php if (count($_smarty_tpl->tpl_vars['aStreamEvents']->value)&&!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
		<button class="button width-full" id="activity-get-more"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['show_more'];?>
</button>
	<?php }?>

			</footer>
		
		
		
	</div>

	
<?php }?><?php }} ?>