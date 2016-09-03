<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:29
         compiled from "/home/you/php/practice/application/frontend/components/user/blocks/block.user-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48882990957c79595363499-77037471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d6355664b1bb4fcd54f634afae18d2612c3f36f' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user/blocks/block.user-nav.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48882990957c79595363499-77037471',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79595395a28_04160791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79595395a28_04160791')) {function content_57c79595395a28_04160791($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ('navs/nav.user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-nav','content'=>$_tmp1),$_smarty_tpl);?>
<?php }} ?>