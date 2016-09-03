<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:29
         compiled from "/home/you/php/practice/application/frontend/components/wall/wall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64321318357c7959571a2d4-36340321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b318fa7dd2f7a0036cfd71da9e820c6ca04a83' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/wall/wall.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64321318357c7959571a2d4-36340321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loadedCount' => 0,
    'component' => 0,
    'oUserProfile' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'moreCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79595774477_30754410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79595774477_30754410')) {function content_57c79595774477_30754410($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('wall', null, 0);?>

<?php $_smarty_tpl->tpl_vars['loadedCount'] = new Smarty_variable(count((isset($_smarty_tpl->tpl_vars_local['posts']) ? $_smarty_tpl->tpl_vars_local['posts']->value : null)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['moreCount'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['count']) ? $_smarty_tpl->tpl_vars_local['count']->value : null)-$_smarty_tpl->tpl_vars['loadedCount']->value, null, 0);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" data-user-id="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <?php echo $_smarty_tpl->getSubTemplate ('./wall.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['wall']['alerts']['unregistered'],'mods'=>'info','classes'=>'mt-15'),$_smarty_tpl);?>

    <?php }?>

    
    <div class="js-wall-entry-container" data-id="0">
        <?php echo $_smarty_tpl->getSubTemplate ('./wall.posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('posts'=>(isset($_smarty_tpl->tpl_vars_local['posts']) ? $_smarty_tpl->tpl_vars_local['posts']->value : null)), 0);?>

    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value||(!$_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['loadedCount']->value)){?>
        <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty'],'mods'=>'empty','classes'=>'mt-15 js-wall-alert-empty','attributes'=>array('id'=>'wall-empty'),'visible'=>!$_smarty_tpl->tpl_vars['loadedCount']->value),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['moreCount']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'more','classes'=>'js-wall-more','count'=>$_smarty_tpl->tpl_vars['moreCount']->value,'target'=>'.js-wall-entry-container[data-id=0]','ajaxParams'=>array('last_id'=>(isset($_smarty_tpl->tpl_vars_local['lastId']) ? $_smarty_tpl->tpl_vars_local['lastId']->value : null))),$_smarty_tpl);?>

    <?php }?>
</div><?php }} ?>