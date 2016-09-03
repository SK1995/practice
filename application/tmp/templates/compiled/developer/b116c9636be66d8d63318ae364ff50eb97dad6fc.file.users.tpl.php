<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:28
         compiled from "/home/you/php/practice/application/frontend/components/activity/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63033892357c7a494cb14f4-25342130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b116c9636be66d8d63318ae364ff50eb97dad6fc' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/activity/users.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63033892357c7a494cb14f4-25342130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a494cb8442_38668800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a494cb8442_38668800')) {function content_57c7a494cb8442_38668800($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'user-list-add','users'=>(isset($_smarty_tpl->tpl_vars_local['users']) ? $_smarty_tpl->tpl_vars_local['users']->value : null),'classes'=>'js-activity-users','note'=>$_smarty_tpl->tpl_vars['aLang']->value['activity']['users']['note']),$_smarty_tpl);?>
<?php }} ?>