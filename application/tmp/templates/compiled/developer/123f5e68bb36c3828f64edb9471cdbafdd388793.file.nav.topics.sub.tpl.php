<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:40:19
         compiled from "/home/you/php/practice/application/frontend/skin/developer/navs/nav.topics.sub.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114544561557c79513dcd084-72772077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '123f5e68bb36c3828f64edb9471cdbafdd388793' => 
    array (
      0 => '/home/you/php/practice/application/frontend/skin/developer/navs/nav.topics.sub.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114544561557c79513dcd084-72772077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sNavTopicsSubUrl' => 0,
    'sMenuSubItemSelect' => 0,
    'iCountTopicsSubNew' => 0,
    'periodSelectCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79513dffe09_67420450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79513dffe09_67420450')) {function content_57c79513dffe09_67420450($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_hook')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.hook.php';
?>

<?php if ($_smarty_tpl->tpl_vars['sNavTopicsSubUrl']->value){?>
    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'blog.menu.all_good'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'blog.menu.all_new'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'blog.menu.top_period_all'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'blog.menu.top_period_1'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'blog.menu.all_discussed'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'blog.menu.all_top'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'topics_sub','activeItem'=>$_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value,'mods'=>'pills','items'=>array(array('name'=>'good','url'=>$_smarty_tpl->tpl_vars['sNavTopicsSubUrl']->value,'text'=>$_tmp1),array('name'=>'new','url'=>((string)$_smarty_tpl->tpl_vars['sNavTopicsSubUrl']->value)."newall/",'text'=>$_tmp2,'title'=>$_tmp3,'count'=>$_smarty_tpl->tpl_vars['iCountTopicsSubNew']->value),array('name'=>'new','url'=>((string)$_smarty_tpl->tpl_vars['sNavTopicsSubUrl']->value)."new/",'text'=>"+".((string)$_smarty_tpl->tpl_vars['iCountTopicsSubNew']->value),'title'=>$_tmp4,'is_enabled'=>$_smarty_tpl->tpl_vars['iCountTopicsSubNew']->value),array('name'=>'discussed','url'=>((string)$_smarty_tpl->tpl_vars['sNavTopicsSubUrl']->value)."discussed/",'text'=>$_tmp5),array('name'=>'top','url'=>((string)$_smarty_tpl->tpl_vars['sNavTopicsSubUrl']->value)."top/",'text'=>$_tmp6))),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'sort','template'=>'timespan','activeItem'=>$_smarty_tpl->tpl_vars['periodSelectCurrent']->value),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_hook(array('run'=>'nav_topics_sub_after','sMenuSubItemSelect'=>$_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value,'sNavTopicsSubUrl'=>$_smarty_tpl->tpl_vars['sNavTopicsSubUrl']->value),$_smarty_tpl);?>
<?php }} ?>