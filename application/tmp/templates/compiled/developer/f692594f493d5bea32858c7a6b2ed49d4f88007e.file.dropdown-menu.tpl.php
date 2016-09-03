<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/framework/frontend/components/dropdown/dropdown-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87012626357c794df2976d4-76600759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f692594f493d5bea32858c7a6b2ed49d4f88007e' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/dropdown/dropdown-menu.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87012626357c794df2976d4-76600759',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794df2ac253_73854886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df2ac253_73854886')) {function content_57c794df2ac253_73854886($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'nav','name'=>(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null) ? ((string)(isset($_smarty_tpl->tpl_vars_local['name']) ? $_smarty_tpl->tpl_vars_local['name']->value : null))."_menu" : '','activeItem'=>(isset($_smarty_tpl->tpl_vars_local['activeItem']) ? $_smarty_tpl->tpl_vars_local['activeItem']->value : null),'mods'=>'stacked dropdown','showSingle'=>true,'classes'=>"dropdown-menu js-dropdown-menu ".((string)(isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null)),'attributes'=>array_merge((($tmp = @(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null))===null||$tmp==='' ? array() : $tmp),array('role'=>'menu','aria-hidden'=>'true')),'items'=>(isset($_smarty_tpl->tpl_vars_local['items']) ? $_smarty_tpl->tpl_vars_local['items']->value : null)),$_smarty_tpl);?>
<?php }} ?>