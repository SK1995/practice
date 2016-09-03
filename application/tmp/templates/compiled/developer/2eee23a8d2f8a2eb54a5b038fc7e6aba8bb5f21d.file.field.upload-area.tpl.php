<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/framework/frontend/components/field/field.upload-area.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80935112357c79542c609b7-79364088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eee23a8d2f8a2eb54a5b038fc7e6aba8bb5f21d' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/field/field.upload-area.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80935112357c79542c609b7-79364088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79542c9bdd7_44194484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79542c9bdd7_44194484')) {function content_57c79542c9bdd7_44194484($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('field-upload-area', null, 0);?>

<label class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
	<span><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'field.upload_area.label'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['label']) ? $_smarty_tpl->tpl_vars_local['label']->value : null))===null||$tmp==='' ? $_tmp1 : $tmp);?>
</span>
	<input type="file" name="<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['inputName']) ? $_smarty_tpl->tpl_vars_local['inputName']->value : null))===null||$tmp==='' ? 'file' : $tmp);?>
" class="<?php echo (isset($_smarty_tpl->tpl_vars_local['inputClasses']) ? $_smarty_tpl->tpl_vars_local['inputClasses']->value : null);?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['inputAttributes']) ? $_smarty_tpl->tpl_vars_local['inputAttributes']->value : null)),$_smarty_tpl);?>
 <?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['isMultiple']) ? $_smarty_tpl->tpl_vars_local['isMultiple']->value : null))===null||$tmp==='' ? 'multiple' : $tmp);?>
>
</label><?php }} ?>