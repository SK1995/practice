<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:22:03
         compiled from "/home/you/php/practice/application/frontend/components/property/input/property.varchar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40786664057c79edbb20a21-83475317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ed995262636f1b778cbebcf8eef0f40e526832' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/property/input/property.varchar.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40786664057c79edbb20a21-83475317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79edbb3f861_03652293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79edbb3f861_03652293')) {function content_57c79edbb3f861_03652293($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>"property[".((string)$_smarty_tpl->tpl_vars['property']->value->getId())."]",'value'=>$_smarty_tpl->tpl_vars['property']->value->getValue()->getValueForForm(),'note'=>$_smarty_tpl->tpl_vars['property']->value->getDescription(),'label'=>$_smarty_tpl->tpl_vars['property']->value->getTitle()),$_smarty_tpl);?>
<?php }} ?>