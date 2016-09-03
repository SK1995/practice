<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.hidden.security_key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136030549957c794f2590722-04804504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d2b688cf0874f99bb62363b0fcab272b8d462d' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.hidden.security_key.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136030549957c794f2590722-04804504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f259a959_09443165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f259a959_09443165')) {function content_57c794f259a959_09443165($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.hidden.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'security_ls_key','sFieldValue'=>$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value), 0);?>
<?php }} ?>