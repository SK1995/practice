<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/favourite/favourite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78587004657c7a41adf1ae8-54338208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e83f9729070cfa18405fcfaa8db18b41d62f5b' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/favourite/favourite.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78587004657c7a41adf1ae8-54338208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'target' => 0,
    'count' => 0,
    'isActive' => 0,
    'component' => 0,
    'mods' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41ae5e9f1_25725725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41ae5e9f1_25725725')) {function content_57c7a41ae5e9f1_25725725($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('favourite', null, 0);?>


<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['target'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['target']) ? $_smarty_tpl->tpl_vars_local['target']->value : null), null, 0);?>


<?php $_smarty_tpl->tpl_vars['isActive'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value&&$_smarty_tpl->tpl_vars['target']->value->getIsFavourite(), null, 0);?>


<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['target']->value->getCountFavourite(), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['count']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." has-counter", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isActive']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." added", null, 0);?>
<?php }?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['isActive']->value){?>active<?php }?> <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
"
	 data-param-i-target-id="<?php echo $_smarty_tpl->tpl_vars['target']->value->getId();?>
"
	 title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['component']->value][$_smarty_tpl->tpl_vars['isActive']->value ? 'remove' : 'add'];?>
"
	 <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>

	
	<div class="icon-heart <?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-toggle js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-toggle"></div>

	
	<?php if (isset($_smarty_tpl->tpl_vars['count']->value)){?>
		<span class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-count js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-count" <?php if (!$_smarty_tpl->tpl_vars['count']->value&&(($tmp = @(isset($_smarty_tpl->tpl_vars_local['hideZeroCounter']) ? $_smarty_tpl->tpl_vars_local['hideZeroCounter']->value : null))===null||$tmp==='' ? true : $tmp)){?>style="display: none;"<?php }?>>
			<?php echo $_smarty_tpl->tpl_vars['count']->value;?>

		</span>
	<?php }?>
</div><?php }} ?>