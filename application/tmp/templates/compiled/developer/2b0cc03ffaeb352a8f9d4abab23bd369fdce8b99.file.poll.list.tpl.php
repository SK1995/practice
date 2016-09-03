<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/poll/poll.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146056869557c7a41ac279f7-62554548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0cc03ffaeb352a8f9d4abab23bd369fdce8b99' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/poll/poll.list.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146056869557c7a41ac279f7-62554548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'polls' => 0,
    'poll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41ac2ed08_33647131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41ac2ed08_33647131')) {function content_57c7a41ac2ed08_33647131($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['poll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['poll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['poll']->key => $_smarty_tpl->tpl_vars['poll']->value){
$_smarty_tpl->tpl_vars['poll']->_loop = true;
?>
	<?php echo $_smarty_tpl->getSubTemplate ('./poll.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('poll'=>$_smarty_tpl->tpl_vars['poll']->value), 0);?>

<?php } ?><?php }} ?>