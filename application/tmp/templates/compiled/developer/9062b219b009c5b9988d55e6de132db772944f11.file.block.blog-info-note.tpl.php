<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/blog/blocks/block.blog-info-note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137943864657c795424bbf25-66039718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9062b219b009c5b9988d55e6de132db772944f11' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/blog/blocks/block.blog-info-note.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137943864657c795424bbf25-66039718',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c795424f44b2_83977880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c795424f44b2_83977880')) {function content_57c795424f44b2_83977880($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.blocks.tip.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'topic.blocks.tip.text'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'info','title'=>$_tmp1,'content'=>$_tmp2),$_smarty_tpl);?>
<?php }} ?>