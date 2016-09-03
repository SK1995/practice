<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:28
         compiled from "/home/you/php/practice/application/frontend/components/toolbar-scrollup/toolbar.scrollup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132377937357c794e0a24359-19684264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7206275d551e7a8d8cdf53f8ff7674ea244fff66' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/toolbar-scrollup/toolbar.scrollup.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132377937357c794e0a24359-19684264',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794e0a4e367_35610638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794e0a4e367_35610638')) {function content_57c794e0a4e367_35610638($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'toolbar.scrollup.title'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar','template'=>'item','classes'=>'toolbar-item--scrollup js-toolbar-scrollup','attributes'=>array('style'=>'display: none'),'buttons'=>array(array('icon'=>'chevron-up','attributes'=>array('title'=>$_tmp1,'id'=>'toolbar_scrollup')))),$_smarty_tpl);?>
<?php }} ?>