<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92431568857c794df3928a6-86784596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b76675156603ce2250c1183ca696497475a035b0' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/blocks.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92431568857c794df3928a6-86784596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'aBlocksLoad' => 0,
    'aBlock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794df3d9ec1_07880695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df3d9ec1_07880695')) {function content_57c794df3d9ec1_07880695($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_blocks')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.get_blocks.php';
if (!is_callable('smarty_insert_block')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/insert.block.php';
?>

<?php echo smarty_function_get_blocks(array('assign'=>'aBlocksLoad'),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value])){?>
	<?php  $_smarty_tpl->tpl_vars['aBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aBlock']->key => $_smarty_tpl->tpl_vars['aBlock']->value){
$_smarty_tpl->tpl_vars['aBlock']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='block'){?>
			<?php echo smarty_insert_block(array('block' => $_smarty_tpl->tpl_vars['aBlock']->value['name'], 'params' => $_smarty_tpl->tpl_vars['aBlock']->value['params']),$_smarty_tpl);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='template'){?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['aBlock']->value['name'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('params'=>$_smarty_tpl->tpl_vars['aBlock']->value['params']), 0);?>

		<?php }?>
	<?php } ?>
<?php }?><?php }} ?>