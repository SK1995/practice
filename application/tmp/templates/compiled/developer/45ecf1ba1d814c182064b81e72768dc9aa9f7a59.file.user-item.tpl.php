<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/user/user-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42124875357c7a41adb9588-73909743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ecf1ba1d814c182064b81e72768dc9aa9f7a59' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user/user-item.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42124875357c7a41adb9588-73909743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41aded115_33814285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41aded115_33814285')) {function content_57c7a41aded115_33814285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-item', null, 0);?>

<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['user']) ? $_smarty_tpl->tpl_vars_local['user']->value : null), null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
"
    <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>

    <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-avatar-link">
        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileAvatarPath((($tmp = @(isset($_smarty_tpl->tpl_vars_local['avatarSize']) ? $_smarty_tpl->tpl_vars_local['avatarSize']->value : null))===null||$tmp==='' ? 24 : $tmp));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->getLogin();?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-avatar" />
    </a>

    <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-name">
        <?php echo $_smarty_tpl->tpl_vars['user']->value->getDisplayName();?>

    </a>
</div><?php }} ?>