<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:41:06
         compiled from "/home/you/php/practice/application/frontend/components/topic/topic-add-type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:373490757c79542586af4-79354674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a16bd9bedfe90bff3f398ac7d60b82a5f0f45e' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/topic/topic-add-type.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '373490757c79542586af4-79354674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'typeCode' => 0,
    'LS' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c795425bed53_89350592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c795425bed53_89350592')) {function content_57c795425bed53_89350592($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['type']) ? $_smarty_tpl->tpl_vars_local['type']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['typeCode'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value->getCode(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['typeCode']->value)){?>
    <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('topic',"topic-add-type-".((string)$_smarty_tpl->tpl_vars['typeCode']->value)), null, 0);?>

    
    
    <?php if (!$_smarty_tpl->tpl_vars['template']->value){?>
        <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['LS']->value->Component_GetTemplatePath('topic','add'), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('topic'=>(isset($_smarty_tpl->tpl_vars_local['topic']) ? $_smarty_tpl->tpl_vars_local['topic']->value : null),'type'=>(isset($_smarty_tpl->tpl_vars_local['type']) ? $_smarty_tpl->tpl_vars_local['type']->value : null),'blogs'=>(isset($_smarty_tpl->tpl_vars_local['blogs']) ? $_smarty_tpl->tpl_vars_local['blogs']->value : null),'blogId'=>(isset($_smarty_tpl->tpl_vars_local['blogId']) ? $_smarty_tpl->tpl_vars_local['blogId']->value : null),'skipBlogs'=>(isset($_smarty_tpl->tpl_vars_local['skipBlogs']) ? $_smarty_tpl->tpl_vars_local['skipBlogs']->value : null)), 0);?>

<?php }?><?php }} ?>