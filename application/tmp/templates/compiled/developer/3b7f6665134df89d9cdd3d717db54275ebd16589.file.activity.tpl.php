<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/components/activity/activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147162101757c7a494e34f13-13292856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b7f6665134df89d9cdd3d717db54275ebd16589' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/activity/activity.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147162101757c7a494e34f13-13292856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'events' => 0,
    'last' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a494e6ea89_12461414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a494e6ea89_12461414')) {function content_57c7a494e6ea89_12461414($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('activity', null, 0);?>

<?php $_smarty_tpl->tpl_vars['events'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['events']) ? $_smarty_tpl->tpl_vars_local['events']->value : null), null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
    <?php if ($_smarty_tpl->tpl_vars['events']->value){?>
        
        <ul class="activity-event-list js-activity-event-list">
            <?php echo $_smarty_tpl->getSubTemplate ('./event-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('events'=>$_smarty_tpl->tpl_vars['events']->value), 0);?>

        </ul>

        
        <?php if ((isset($_smarty_tpl->tpl_vars_local['count']) ? $_smarty_tpl->tpl_vars_local['count']->value : null)>Config::Get('module.stream.count_default')){?>
            <?php $_smarty_tpl->tpl_vars['last'] = new Smarty_variable(end($_smarty_tpl->tpl_vars['events']->value), null, 0);?>

            <?php echo smarty_function_component(array('_default_short'=>'more','count'=>(isset($_smarty_tpl->tpl_vars_local['count']) ? $_smarty_tpl->tpl_vars_local['count']->value : null),'classes'=>'js-activity-more','ajaxParams'=>array('last_id'=>$_smarty_tpl->tpl_vars['last']->value->getId(),'target_id'=>(isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null))),$_smarty_tpl);?>

        <?php }?>
    <?php }else{ ?>
        <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty'],'mods'=>'empty'),$_smarty_tpl);?>

    <?php }?>
</div><?php }} ?>