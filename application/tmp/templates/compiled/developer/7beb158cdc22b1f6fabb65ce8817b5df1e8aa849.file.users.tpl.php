<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:59
         compiled from "/home/you/php/practice/application/frontend/components/feed/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114154899757c7a4b390c642-38982920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7beb158cdc22b1f6fabb65ce8817b5df1e8aa849' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/feed/users.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114154899757c7a4b390c642-38982920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a4b391cf40_30058763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a4b391cf40_30058763')) {function content_57c7a4b391cf40_30058763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php echo smarty_function_component(array('_default_short'=>'user-list-add','users'=>(isset($_smarty_tpl->tpl_vars_local['users']) ? $_smarty_tpl->tpl_vars_local['users']->value : null),'classes'=>'js-feed-users','attributes'=>array('data-param-type'=>'users'),'note'=>$_smarty_tpl->tpl_vars['aLang']->value['feed']['users']['note']),$_smarty_tpl);?>
<?php }} ?>