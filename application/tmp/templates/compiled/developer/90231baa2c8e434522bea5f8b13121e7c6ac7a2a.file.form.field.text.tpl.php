<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:10
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121107709457c79582713ba4-38597749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90231baa2c8e434522bea5f8b13121e7c6ac7a2a' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.text.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '41a09533deea6c10eaad576deefadce0b4afd598' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.base.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121107709457c79582713ba4-38597749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'sFieldRules' => 0,
    'sFieldEntity' => 0,
    'sFieldEntityField' => 0,
    'sFieldName' => 0,
    'sFieldEntityScenario' => 0,
    'bFieldInline' => 0,
    'bFieldNoMargin' => 0,
    'sFieldLabel' => 0,
    'bFieldNoLabel' => 0,
    'sFieldId' => 0,
    'sFieldNote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7958276a1f7_89570912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7958276a1f7_89570912')) {function content_57c7958276a1f7_89570912($_smarty_tpl) {?><?php if (!is_callable('smarty_function_field_make_rule')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.field_make_rule.php';
?>


<?php if ($_smarty_tpl->tpl_vars['sFieldRules']->value){?>
	<?php $_smarty_tpl->tpl_vars['aFieldRules'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['sFieldRules']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sFieldEntity']->value){?>
	<?php if (!$_smarty_tpl->tpl_vars['sFieldEntityField']->value){?>
    	<?php $_smarty_tpl->tpl_vars['sFieldEntityField'] = new Smarty_variable($_smarty_tpl->tpl_vars['sFieldName']->value, null, 0);?>
	<?php }?>
	<?php echo smarty_function_field_make_rule(array('entity'=>$_smarty_tpl->tpl_vars['sFieldEntity']->value,'field'=>$_smarty_tpl->tpl_vars['sFieldEntityField']->value,'scenario'=>$_smarty_tpl->tpl_vars['sFieldEntityScenario']->value,'assign'=>'aFieldRules'),$_smarty_tpl);?>

<?php }?>



<div class="form-field <?php if ($_smarty_tpl->tpl_vars['bFieldInline']->value){?>form-field-inline<?php }?>  <?php if ($_smarty_tpl->tpl_vars['bFieldNoMargin']->value){?>m-0<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['sFieldLabel']->value&&!$_smarty_tpl->tpl_vars['bFieldNoLabel']->value){?>
        <label for="<?php if ($_smarty_tpl->tpl_vars['sFieldId']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldId']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
<?php }?>" class="form-field-label"><?php echo $_smarty_tpl->tpl_vars['sFieldLabel']->value;?>
:</label>
    <?php }?>

    <div class="form-field-holder">
        
	<input type="<?php if ($_smarty_tpl->tpl_vars['sFieldType']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldType']->value;?>
<?php }else{ ?>text<?php }?>"
		   id="<?php if ($_smarty_tpl->tpl_vars['sFieldId']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldId']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
<?php }?>" 
		   name="<?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
" 
		   value="<?php if (isset($_smarty_tpl->tpl_vars['sFieldValue']->value)){?><?php echo $_smarty_tpl->tpl_vars['sFieldValue']->value;?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['sFieldName']->value])){?><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['sFieldName']->value];?>
<?php }?>"
		   class="<?php if ($_smarty_tpl->tpl_vars['sFieldClasses']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldClasses']->value;?>
<?php }else{ ?>width-full<?php }?> js-input-<?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
"
		   <?php if ($_smarty_tpl->tpl_vars['sFieldPlaceholder']->value){?>placeholder="<?php echo $_smarty_tpl->tpl_vars['sFieldPlaceholder']->value;?>
"<?php }?>
           <?php  $_smarty_tpl->tpl_vars['sRule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sRule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aFieldRules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sRule']->key => $_smarty_tpl->tpl_vars['sRule']->value){
$_smarty_tpl->tpl_vars['sRule']->_loop = true;
?>data-<?php echo $_smarty_tpl->tpl_vars['sRule']->value;?>
<?php } ?>
		   <?php if ($_smarty_tpl->tpl_vars['bFieldIsDisabled']->value){?>disabled<?php }?> />

            <?php if ($_smarty_tpl->tpl_vars['sFieldNote']->value){?>
                <small class="note" id="<?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
_note"><?php echo $_smarty_tpl->tpl_vars['sFieldNote']->value;?>
</small>
            <?php }?>
        
    </div>
</div>

<?php }} ?>