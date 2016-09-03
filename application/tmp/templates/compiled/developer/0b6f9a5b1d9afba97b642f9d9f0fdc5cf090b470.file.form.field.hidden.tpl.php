<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:46
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.hidden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10250052157c794f259d061-20579212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6f9a5b1d9afba97b642f9d9f0fdc5cf090b470' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.hidden.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10250052157c794f259d061-20579212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFieldId' => 0,
    'sFieldName' => 0,
    'sFieldValue' => 0,
    '_aRequest' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794f25b0294_16590593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794f25b0294_16590593')) {function content_57c794f25b0294_16590593($_smarty_tpl) {?>

<input type="hidden" 
	   id="<?php if ($_smarty_tpl->tpl_vars['sFieldId']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldId']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
<?php }?>" 
	   name="<?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
" 
	   value="<?php if ($_smarty_tpl->tpl_vars['sFieldValue']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldValue']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['sFieldName']->value]){?><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['sFieldName']->value];?>
<?php }?>" /><?php }} ?>