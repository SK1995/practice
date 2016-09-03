<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:16
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137394971457c7958801f160-89495198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ecedc06f98abf7adba3bfad3ad33d446f7aad6' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.checkbox.tpl',
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
  'nocache_hash' => '137394971457c7958801f160-89495198',
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
  'unifunc' => 'content_57c7958809c147_55793000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7958809c147_55793000')) {function content_57c7958809c147_55793000($_smarty_tpl) {?><?php if (!is_callable('smarty_function_field_make_rule')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.field_make_rule.php';
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


	<?php $_smarty_tpl->tpl_vars['bFieldNoLabel'] = new Smarty_variable(true, null, 0);?>


<div class="form-field <?php if ($_smarty_tpl->tpl_vars['bFieldInline']->value){?>form-field-inline<?php }?>  <?php if ($_smarty_tpl->tpl_vars['bFieldNoMargin']->value){?>m-0<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['sFieldLabel']->value&&!$_smarty_tpl->tpl_vars['bFieldNoLabel']->value){?>
        <label for="<?php if ($_smarty_tpl->tpl_vars['sFieldId']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldId']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
<?php }?>" class="form-field-label"><?php echo $_smarty_tpl->tpl_vars['sFieldLabel']->value;?>
:</label>
    <?php }?>

    <div class="form-field-holder">
        
	<?php if ($_smarty_tpl->tpl_vars['sFieldLabel']->value){?><label><?php }?>
	<input type="checkbox" 
		   id="<?php if ($_smarty_tpl->tpl_vars['sFieldId']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldId']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
<?php }?>" 
		   name="<?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
" 
		   value="<?php if ($_smarty_tpl->tpl_vars['sFieldValue']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldValue']->value;?>
<?php }else{ ?>1<?php }?>" 
		   <?php if ($_smarty_tpl->tpl_vars['bFieldChecked']->value){?>checked<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['sFieldName']->value]==1){?>checked<?php }?><?php }?> />
	<?php if ($_smarty_tpl->tpl_vars['sFieldLabel']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldLabel']->value;?>
</label><?php }?>

            <?php if ($_smarty_tpl->tpl_vars['sFieldNote']->value){?>
                <small class="note" id="<?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
_note"><?php echo $_smarty_tpl->tpl_vars['sFieldNote']->value;?>
</small>
            <?php }?>
        
    </div>
</div>

<?php }} ?>