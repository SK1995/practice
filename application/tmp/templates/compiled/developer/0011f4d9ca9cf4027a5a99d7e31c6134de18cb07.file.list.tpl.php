<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/property/input/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193395655457c79542f3f492-88680415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0011f4d9ca9cf4027a5a99d7e31c6134de18cb07' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/property/input/list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193395655457c79542f3f492-88680415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7954302f340_36461541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7954302f340_36461541')) {function content_57c7954302f340_36461541($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['properties']) ? $_smarty_tpl->tpl_vars_local['properties']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
?>
    <?php echo $_smarty_tpl->getSubTemplate ('./item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('property'=>$_smarty_tpl->tpl_vars['property']->value), 0);?>

<?php } ?><?php }} ?>