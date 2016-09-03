<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:28
         compiled from "/home/you/php/practice/application/frontend/components/search-form/search-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57042245057c794e061fb03-87470674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1229b3796841ca223879a22d8209f73343b41992' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/search-form/search-form.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57042245057c794e061fb03-87470674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794e06623c1_79011531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794e06623c1_79011531')) {function content_57c794e06623c1_79011531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('search-form', null, 0);?>

<form action="<?php echo (isset($_smarty_tpl->tpl_vars_local['action']) ? $_smarty_tpl->tpl_vars_local['action']->value : null);?>
" method="<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['method']) ? $_smarty_tpl->tpl_vars_local['method']->value : null))===null||$tmp==='' ? 'get' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
	
		<?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','placeholder'=>(isset($_smarty_tpl->tpl_vars_local['placeholder']) ? $_smarty_tpl->tpl_vars_local['placeholder']->value : null) ? (isset($_smarty_tpl->tpl_vars_local['placeholder']) ? $_smarty_tpl->tpl_vars_local['placeholder']->value : null) : $_smarty_tpl->tpl_vars['aLang']->value['search']['search'],'note'=>(isset($_smarty_tpl->tpl_vars_local['note']) ? $_smarty_tpl->tpl_vars_local['note']->value : null),'value'=>(isset($_smarty_tpl->tpl_vars_local['value']) ? $_smarty_tpl->tpl_vars_local['value']->value : null),'inputClasses'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-input ".((string)(isset($_smarty_tpl->tpl_vars_local['inputClasses']) ? $_smarty_tpl->tpl_vars_local['inputClasses']->value : null)),'inputAttributes'=>(isset($_smarty_tpl->tpl_vars_local['inputAttributes']) ? $_smarty_tpl->tpl_vars_local['inputAttributes']->value : null),'name'=>(($tmp = @(isset($_smarty_tpl->tpl_vars_local['inputName']) ? $_smarty_tpl->tpl_vars_local['inputName']->value : null))===null||$tmp==='' ? 'q' : $tmp)),$_smarty_tpl);?>


		<?php if (!(isset($_smarty_tpl->tpl_vars_local['noSubmitButton']) ? $_smarty_tpl->tpl_vars_local['noSubmitButton']->value : null)){?>
			<?php echo smarty_function_component(array('_default_short'=>'button','mods'=>'icon','classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-submit",'icon'=>'search'),$_smarty_tpl);?>

		<?php }?>
	
</form><?php }} ?>