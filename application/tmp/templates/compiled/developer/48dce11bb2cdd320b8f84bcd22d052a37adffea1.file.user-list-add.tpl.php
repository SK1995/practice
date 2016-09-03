<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/components/user-list-add/user-list-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207859287657c7a494cbaa09-34213158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48dce11bb2cdd320b8f84bcd22d052a37adffea1' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user-list-add/user-list-add.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207859287657c7a494cbaa09-34213158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'uid' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a494d1a974_26752130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a494d1a974_26752130')) {function content_57c7a494d1a974_26752130($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-list-add', null, 0);?>


<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
"
     <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>

    
    <?php if ((isset($_smarty_tpl->tpl_vars_local['title']) ? $_smarty_tpl->tpl_vars_local['title']->value : null)){?>
        <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title"><?php echo (isset($_smarty_tpl->tpl_vars_local['title']) ? $_smarty_tpl->tpl_vars_local['title']->value : null);?>
</h3>
    <?php }?>

    
    <?php if ((isset($_smarty_tpl->tpl_vars_local['note']) ? $_smarty_tpl->tpl_vars_local['note']->value : null)){?>
        <p class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-note"><?php echo (isset($_smarty_tpl->tpl_vars_local['note']) ? $_smarty_tpl->tpl_vars_local['note']->value : null);?>
</p>
    <?php }?>

    
    <?php if ((($tmp = @(isset($_smarty_tpl->tpl_vars_local['editable']) ? $_smarty_tpl->tpl_vars_local['editable']->value : null))===null||$tmp==='' ? true : $tmp)){?>
        <form class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-form js-<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-form">
            <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(("js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-form-users-").(rand(0,'10e10')), null, 0);?>

            <?php ob_start();?><?php echo smarty_function_router(array('page'=>'ajax/modal-friend-list'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'add','inputClasses'=>"autocomplete-users-sep ".((string)$_smarty_tpl->tpl_vars['uid']->value),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['user_list_add']['form']['fields']['add']['label'],'note'=>"<a href=\"#\" class=\"link-dotted\" data-type=\"modal-toggle\" data-modal-url=\"".$_tmp1."\" data-param-selectable=\"true\" data-param-target=\".".((string)$_smarty_tpl->tpl_vars['uid']->value)."\">Выбрать из списка друзей</a>"),$_smarty_tpl);?>


            <?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add'],'mods'=>'primary','classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-form-submit"),$_smarty_tpl);?>

        </form>
    <?php }?>

    
    
    
        <?php echo smarty_function_component(array('_default_short'=>'user-list-add','template'=>'list','hideableEmptyAlert'=>true,'users'=>(isset($_smarty_tpl->tpl_vars_local['users']) ? $_smarty_tpl->tpl_vars_local['users']->value : null),'showActions'=>true,'show'=>!!(isset($_smarty_tpl->tpl_vars_local['users']) ? $_smarty_tpl->tpl_vars_local['users']->value : null),'classes'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-users",'itemClasses'=>"js-".((string)$_smarty_tpl->tpl_vars['component']->value)."-user"),$_smarty_tpl);?>

    
</div><?php }} ?>