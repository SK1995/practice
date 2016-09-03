<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:16:03
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/property/types/type.varchar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200953679757c79d7321ce52-32728436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3644b65f6c5eb1951469d2b12fadb2ac62ad87' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/property/types/type.varchar.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200953679757c79d7321ce52-32728436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'oPropertyParams' => 0,
    'oPropertyValidateRules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79d7326c6d7_64006012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79d7326c6d7_64006012')) {function content_57c79d7326c6d7_64006012($_smarty_tpl) {?><h3 class="page-sub-header mt-30">Дополнительные параметры</h3>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'param[default]','sFieldClasses'=>'width-150','sFieldValue'=>$_smarty_tpl->tpl_vars['oPropertyParams']->value['default'],'sFieldLabel'=>'Дефолтное значение'), 0);?>


<h3 class="page-sub-header mt-30">Правила валидации</h3>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'validate[allowEmpty]','bFieldChecked'=>!$_smarty_tpl->tpl_vars['oPropertyValidateRules']->value['allowEmpty'],'sFieldLabel'=>'Обязательно к заполнению'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'validate[min]','sFieldClasses'=>'width-150','sFieldValue'=>$_smarty_tpl->tpl_vars['oPropertyValidateRules']->value['min'],'sFieldLabel'=>'Минимальная длина'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'validate[max]','sFieldClasses'=>'width-150','sFieldValue'=>$_smarty_tpl->tpl_vars['oPropertyValidateRules']->value['max'],'sFieldLabel'=>'Максимальная длина'), 0);?>
<?php }} ?>