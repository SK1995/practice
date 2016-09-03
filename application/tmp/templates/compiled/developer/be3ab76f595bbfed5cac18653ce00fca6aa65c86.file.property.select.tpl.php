<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:22:03
         compiled from "/home/you/php/practice/application/frontend/components/property/input/property.select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116231930457c79edbb4fb80-71373842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be3ab76f595bbfed5cac18653ce00fca6aa65c86' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/property/input/property.select.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116231930457c79edbb4fb80-71373842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
    'item' => 0,
    'items' => 0,
    'selectedValues' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79edbb802a6_49348465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79edbb802a6_49348465')) {function content_57c79edbb802a6_49348465($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>
<?php $_smarty_tpl->tpl_vars['selectedValues'] = new Smarty_variable(array(), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['property']->value->getValue()->getValueForForm(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('selectedValues', null, 0);
$_smarty_tpl->tpl_vars['selectedValues']->value[] = $_smarty_tpl->tpl_vars['value']->key;?>
<?php } ?>


<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['property']->value->getValidateRuleOne('allowMany')){?>
    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('value'=>0,'text'=>'&mdash;');?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['property']->value->getSelects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('value'=>$_smarty_tpl->tpl_vars['item']->value->getId(),'text'=>$_smarty_tpl->tpl_vars['item']->value->getValue());?>
<?php } ?>

<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'select','name'=>"property[".((string)$_smarty_tpl->tpl_vars['property']->value->getId())."][]",'label'=>$_smarty_tpl->tpl_vars['property']->value->getTitle(),'note'=>$_smarty_tpl->tpl_vars['property']->value->getDescription(),'items'=>$_smarty_tpl->tpl_vars['items']->value,'isMultiple'=>$_smarty_tpl->tpl_vars['property']->value->getValidateRuleOne('allowMany'),'selectedValue'=>$_smarty_tpl->tpl_vars['selectedValues']->value),$_smarty_tpl);?>
<?php }} ?>