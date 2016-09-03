<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:29
         compiled from "/home/you/php/practice/application/frontend/components/user/info-group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147915892457c79595639931-68544837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3033037e0ddda56f4423c0de23c23c944a0345c5' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user/info-group.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147915892457c79595639931-68544837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'itemsHook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7959567f1f8_52222855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7959567f1f8_52222855')) {function content_57c7959567f1f8_52222855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-info-group', null, 0);?>

<?php echo smarty_function_hook(array('run'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-".((string)(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null))."-before"),$_smarty_tpl);?>



<?php echo smarty_function_hook(array('run'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-".((string)(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null))."-items",'assign'=>'itemsHook','items'=>(isset($_smarty_tpl->tpl_vars_local['items']) ? $_smarty_tpl->tpl_vars_local['items']->value : null),'array'=>true),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['itemsHook']->value)===null||$tmp==='' ? (isset($_smarty_tpl->tpl_vars_local['items']) ? $_smarty_tpl->tpl_vars_local['items']->value : null) : $tmp), null, 0);?>

<?php if ((isset($_smarty_tpl->tpl_vars_local['html']) ? $_smarty_tpl->tpl_vars_local['html']->value : null)||(isset($_smarty_tpl->tpl_vars_local['items']) ? $_smarty_tpl->tpl_vars_local['items']->value : null)){?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
		<h3 class="user-info-group-title">
			<?php echo (isset($_smarty_tpl->tpl_vars_local['title']) ? $_smarty_tpl->tpl_vars_local['title']->value : null);?>

		</h3>

		<div class="user-info-group-content">
			<?php if ((isset($_smarty_tpl->tpl_vars_local['html']) ? $_smarty_tpl->tpl_vars_local['html']->value : null)){?>
				<?php echo (isset($_smarty_tpl->tpl_vars_local['html']) ? $_smarty_tpl->tpl_vars_local['html']->value : null);?>

			<?php }else{ ?>
				<?php echo smarty_function_component(array('_default_short'=>'info-list','list'=>(isset($_smarty_tpl->tpl_vars_local['items']) ? $_smarty_tpl->tpl_vars_local['items']->value : null),'classes'=>'user-info-group-items'),$_smarty_tpl);?>

			<?php }?>
		</div>
	</div>
<?php }?>

<?php echo smarty_function_hook(array('run'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-".((string)(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null))."-after"),$_smarty_tpl);?>
<?php }} ?>