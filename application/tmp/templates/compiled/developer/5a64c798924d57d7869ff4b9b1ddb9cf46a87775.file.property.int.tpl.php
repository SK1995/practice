<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:49
         compiled from "/home/you/php/practice/application/frontend/components/property/input/property.int.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46251659657c795a977b038-40083006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a64c798924d57d7869ff4b9b1ddb9cf46a87775' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/property/input/property.int.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46251659657c795a977b038-40083006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c795a97be960_02242731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c795a97be960_02242731')) {function content_57c795a97be960_02242731($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>"property[".((string)$_smarty_tpl->tpl_vars['property']->value->getId())."]",'value'=>$_smarty_tpl->tpl_vars['property']->value->getValue()->getValueForForm(),'classes'=>'width-150','note'=>$_smarty_tpl->tpl_vars['property']->value->getDescription(),'label'=>$_smarty_tpl->tpl_vars['property']->value->getTitle()),$_smarty_tpl);?>
<?php }} ?>