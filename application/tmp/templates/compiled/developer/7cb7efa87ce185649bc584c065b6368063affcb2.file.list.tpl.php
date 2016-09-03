<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/components/user-list-add/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100256939957c7a494d22089-60478050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cb7efa87ce185649bc584c065b6368063affcb2' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user-list-add/list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '770b6700760d011eea31979cbc92bb4925cf1900' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user/user-list-small.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '2817b5be3103e0bcb33b56a22dde1a2fe7243598' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/user/user-list-small-item.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100256939957c7a494d22089-60478050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'aLang' => 0,
    'classes' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a494db2311_81396418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a494db2311_81396418')) {function content_57c7a494db2311_81396418($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['users'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['users']) ? $_smarty_tpl->tpl_vars_local['users']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null), null, 0);?>


<?php if ((isset($_smarty_tpl->tpl_vars_local['title']) ? $_smarty_tpl->tpl_vars_local['title']->value : null)){?>
	<h3 class="user-list-small-title"><?php echo (isset($_smarty_tpl->tpl_vars_local['title']) ? $_smarty_tpl->tpl_vars_local['title']->value : null);?>
</h3>
<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['users']->value||(isset($_smarty_tpl->tpl_vars_local['hideableEmptyAlert']) ? $_smarty_tpl->tpl_vars_local['hideableEmptyAlert']->value : null)){?>
	<?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['empty'],'mods'=>'empty','classes'=>'js-user-list-small-empty','visible'=>!$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['users']->value||!(($tmp = @(isset($_smarty_tpl->tpl_vars_local['show']) ? $_smarty_tpl->tpl_vars_local['show']->value : null))===null||$tmp==='' ? true : $tmp)){?>
	<ul class="user-list-small js-user-list-small <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php if (!(($tmp = @(isset($_smarty_tpl->tpl_vars_local['show']) ? $_smarty_tpl->tpl_vars_local['show']->value : null))===null||$tmp==='' ? true : $tmp)){?>style="display: none"<?php }?>>
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['userContainer'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value, null, 0);?>

			<?php if ($_smarty_tpl->tpl_vars['user']->value->getUser()){?>
				<?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getUser(), null, 0);?>
			<?php }?>

			<?php if (!(isset($_smarty_tpl->tpl_vars_local['exclude']) ? $_smarty_tpl->tpl_vars_local['exclude']->value : null)||!in_array($_smarty_tpl->tpl_vars['user']->value->getId(),(isset($_smarty_tpl->tpl_vars_local['exclude']) ? $_smarty_tpl->tpl_vars_local['exclude']->value : null))){?>
				
    
        <?php echo smarty_function_component(array('_default_short'=>'user-list-add','template'=>'item','user'=>$_smarty_tpl->tpl_vars['user']->value,'showActions'=>true),$_smarty_tpl);?>

    

			<?php }?>
		<?php } ?>
	</ul>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/components/user/user-list-small-item.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57c7a494d77824_76853644')) {function content_57c7a494d77824_76853644($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('user-list-small-item', null, 0);?>


    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['user']) ? $_smarty_tpl->tpl_vars_local['user']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['userId'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->getId(), null, 0);?>


<li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 js-user-list-small-item <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" data-user-id="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php if ((isset($_smarty_tpl->tpl_vars_local['selectable']) ? $_smarty_tpl->tpl_vars_local['selectable']->value : null)){?>
        <input type="checkbox" class="js-user-list-small-checkbox" data-user-id="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" data-user-login="<?php echo $_smarty_tpl->tpl_vars['user']->value->getLogin();?>
" />
    <?php }?>

    
    
        <?php echo smarty_function_component(array('_default_short'=>'user','template'=>'item','user'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>

    
</li><?php }} ?>