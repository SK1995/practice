<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:17:16
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/property/types/type.select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61085177457c79dbc59ea69-22172550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '518a1083abad38fb16db3251f2c9fe6ed1245c18' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/property/types/type.select.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61085177457c79dbc59ea69-22172550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'oPropertyValidateRules' => 0,
    'oProperty' => 0,
    'aSelectItems' => 0,
    'oSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79dbc5f4d65_47413757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79dbc5f4d65_47413757')) {function content_57c79dbc5f4d65_47413757($_smarty_tpl) {?><h3 class="page-sub-header mt-30">Правила валидации</h3>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'validate[allowEmpty]','bFieldChecked'=>!$_smarty_tpl->tpl_vars['oPropertyValidateRules']->value['allowEmpty'],'sFieldLabel'=>'Обязательно к заполнению'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'validate[allowMany]','bFieldChecked'=>$_smarty_tpl->tpl_vars['oPropertyValidateRules']->value['allowMany'],'sFieldLabel'=>'Возможен множественный выбор'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'validate[min]','sFieldClasses'=>'width-150','sFieldValue'=>$_smarty_tpl->tpl_vars['oPropertyValidateRules']->value['min'],'sFieldLabel'=>'Минимальное количество элементов для выбора'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'validate[max]','sFieldClasses'=>'width-150','sFieldValue'=>$_smarty_tpl->tpl_vars['oPropertyValidateRules']->value['max'],'sFieldLabel'=>'Максимальное количество элементов для выбора'), 0);?>



<h3 class="page-sub-header mt-30">Набор элементов для выбора</h3>

<?php $_smarty_tpl->tpl_vars['aSelectItems'] = new Smarty_variable($_smarty_tpl->tpl_vars['oProperty']->value->getSelects(), null, 0);?>

<button onclick="return ls.admin_property.clickSelectItemNew();" class="button">Добавить элемент</button>

<div id="property-select-items" class="mt-15 mb-30 js-property-select-area">
	<?php if ($_smarty_tpl->tpl_vars['aSelectItems']->value){?>
		<?php  $_smarty_tpl->tpl_vars['oSelect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oSelect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aSelectItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oSelect']->key => $_smarty_tpl->tpl_vars['oSelect']->value){
$_smarty_tpl->tpl_vars['oSelect']->_loop = true;
?>
            <div class="mb-10 js-property-select-item">
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oSelect']->value->getValue();?>
" name="items[value][]" placeholder="Значение" class="js-property-select-item-value">
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oSelect']->value->getSort();?>
" name="items[sort][]" placeholder="Сортировка" class="js-property-select-item-sort">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oSelect']->value->getId();?>
" name="items[id][]" class="js-property-select-item-id">
                <button onclick="return ls.admin_property.clickSelectItemRemove(this);" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['delete'];?>
</button>
            </div>
		<?php } ?>
	<?php }else{ ?>
        <div class="mb-10 js-property-select-item">
            <input type="text" value="" name="items[value][]" placeholder="Значение" class="js-property-select-item-value">
            <input type="text" value="" name="items[sort][]" placeholder="Сортировка" class="js-property-select-item-sort">
            <input type="hidden" value="" name="items[id][]" class="js-property-select-item-id">
            <button onclick="return ls.admin_property.clickSelectItemRemove(this);" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['delete'];?>
</button>
        </div>
	<?php }?>
</div><?php }} ?>