<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/skin/developer/navs/nav.create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82562149557c79542537146-97142308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfb8847aa6150c9f9207ff2de2448a972626ddb3' => 
    array (
      0 => '/home/you/php/practice/application/frontend/skin/developer/navs/nav.create.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82562149557c79542537146-97142308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LS' => 0,
    'topicTypes' => 0,
    'type' => 0,
    'aLang' => 0,
    'iUserCurrentCountTopicDraft' => 0,
    'sMenuSubItemSelect' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7954257e5c9_95631253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7954257e5c9_95631253')) {function content_57c7954257e5c9_95631253($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(), null, 0);?>


<?php $_smarty_tpl->tpl_vars['topicTypes'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Topic_GetTopicTypes(), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topicTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('name'=>$_smarty_tpl->tpl_vars['type']->value->getCode(),'url'=>$_smarty_tpl->tpl_vars['type']->value->getUrlForAdd(),'text'=>$_smarty_tpl->tpl_vars['type']->value->getName());?>
<?php } ?>


<?php ob_start();?><?php echo smarty_function_router(array('page'=>'content'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('name'=>'drafts','url'=>$_tmp1."drafts/",'text'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['drafts'],'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value);?>

<?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'create','activeItem'=>$_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value,'mods'=>'pills','items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>
<?php }} ?>