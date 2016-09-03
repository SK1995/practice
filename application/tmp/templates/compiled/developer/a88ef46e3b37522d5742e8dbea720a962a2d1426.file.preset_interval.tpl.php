<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/preset_interval.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206680235157c794f249c3f9-28189113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a88ef46e3b37522d5742e8dbea720a962a2d1426' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/preset_interval.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206680235157c794f249c3f9-28189113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sName' => 0,
    'sId' => 0,
    'sTimeInterval' => 0,
    'sCurrentPeriod' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f24e63f9_58159905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f24e63f9_58159905')) {function content_57c794f24e63f9_58159905($_smarty_tpl) {?>

<select <?php if ($_smarty_tpl->tpl_vars['sName']->value){?>name="<?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
"<?php }?> class="width-100" <?php if ($_smarty_tpl->tpl_vars['sId']->value){?>id="<?php echo $_smarty_tpl->tpl_vars['sId']->value;?>
"<?php }?>>
	<?php  $_smarty_tpl->tpl_vars['sTimeInterval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sTimeInterval']->_loop = false;
 $_from = array(PluginAdmin_ModuleStats::TIME_INTERVAL_TODAY,PluginAdmin_ModuleStats::TIME_INTERVAL_YESTERDAY,PluginAdmin_ModuleStats::TIME_INTERVAL_WEEK,PluginAdmin_ModuleStats::TIME_INTERVAL_MONTH); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sTimeInterval']->key => $_smarty_tpl->tpl_vars['sTimeInterval']->value){
$_smarty_tpl->tpl_vars['sTimeInterval']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['sTimeInterval']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sCurrentPeriod']->value==$_smarty_tpl->tpl_vars['sTimeInterval']->value){?>selected="selected"<?php }?>>
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['graph']['period_bar'][$_smarty_tpl->tpl_vars['sTimeInterval']->value];?>

		</option>
	<?php } ?>
</select>
<?php }} ?>