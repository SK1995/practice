<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:27
         compiled from "/home/you/php/practice/application/frontend/components/comment/toolbar.comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134772187857c7a41b1d0630-94262029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bd56360b4abbf5cfc1e23f38598f7fda8da3050' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/comment/toolbar.comment.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134772187857c7a41b1d0630-94262029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41b1e0947_80578123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41b1e0947_80578123')) {function content_57c7a41b1e0947_80578123($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'comments.comment.count_new'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'comments.comment.count_new'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar','template'=>'item','classes'=>((string)(isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null))." js-comments-toolbar",'mods'=>'comments','buttons'=>array(array('classes'=>'toolbar-comments-update js-toolbar-comments-update','attributes'=>array('title'=>$_tmp1),'icon'=>'comment-update'),array('classes'=>'js-toolbar-comments-count','attributes'=>array('title'=>$_tmp2),'text'=>'0'))),$_smarty_tpl);?>
<?php }} ?>