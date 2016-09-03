<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:10
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85724115357c7958276cf34-03850586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e280729f763e30eab5a41c904b5b9cd61b6197' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/forms/fields/form.field.button.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85724115357c7958276cf34-03850586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sFieldType' => 0,
    'sFieldId' => 0,
    'sFieldName' => 0,
    'sFieldValue' => 0,
    '_aRequest' => 0,
    'sFieldStyle' => 0,
    'sFieldClasses' => 0,
    'bFieldIsDisabled' => 0,
    'sFieldIcon' => 0,
    'sFieldText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7958279bab8_28635843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7958279bab8_28635843')) {function content_57c7958279bab8_28635843($_smarty_tpl) {?>

<button type="<?php if ($_smarty_tpl->tpl_vars['sFieldType']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldType']->value;?>
<?php }else{ ?>submit<?php }?>" 
	    id="<?php if ($_smarty_tpl->tpl_vars['sFieldId']->value){?><?php echo $_smarty_tpl->tpl_vars['sFieldId']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
<?php }?>" 
	    name="<?php echo $_smarty_tpl->tpl_vars['sFieldName']->value;?>
" 
	    value="<?php if (isset($_smarty_tpl->tpl_vars['sFieldValue']->value)){?><?php echo $_smarty_tpl->tpl_vars['sFieldValue']->value;?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['sFieldName']->value])){?><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value[$_smarty_tpl->tpl_vars['sFieldName']->value];?>
<?php }?>"
	    class="button <?php if ($_smarty_tpl->tpl_vars['sFieldStyle']->value){?>button-<?php echo $_smarty_tpl->tpl_vars['sFieldStyle']->value;?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['sFieldClasses']->value;?>
"
	    <?php if ($_smarty_tpl->tpl_vars['bFieldIsDisabled']->value){?>disabled<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['sFieldIcon']->value){?><i class="<?php echo $_smarty_tpl->tpl_vars['sFieldIcon']->value;?>
"></i><?php }?>
	<?php echo $_smarty_tpl->tpl_vars['sFieldText']->value;?>

</button><?php }} ?>