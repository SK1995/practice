<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/tags-favourite/tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187158868257c7a41ac324f6-88380707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd90aef8d290576f953bc8fad1be8db5e74bd39d' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/tags-favourite/tags.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    '3bfa0aadcb6d91c04da0fc6a1df015134d6b6574' => 
    array (
      0 => '/home/you/php/practice/framework/frontend/components/tags/tags.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187158868257c7a41ac324f6-88380707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41acf3780_97404591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41acf3780_97404591')) {function content_57c7a41acf3780_97404591($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('tags', null, 0);?>

<?php if ((isset($_smarty_tpl->tpl_vars_local['tags']) ? $_smarty_tpl->tpl_vars_local['tags']->value : null)){?>
	<ul class="tag-list js-tags-topic-<?php echo (isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null);?>
" data-type="<?php echo (isset($_smarty_tpl->tpl_vars_local['targetType']) ? $_smarty_tpl->tpl_vars_local['targetType']->value : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null);?>
">
		<li class="tag-list-item tag-list-item-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags']['tags'];?>
:</li>

		<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['tags']) ? $_smarty_tpl->tpl_vars_local['tags']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
?><li class="tag-list-item tag-list-item-tag"><?php if (!$_smarty_tpl->tpl_vars['tag']->first){?>, <?php }?><a rel="tag" href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['tag']->value);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['tagsFavourite']) ? $_smarty_tpl->tpl_vars_local['tagsFavourite']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?><li class="tag-list-item tag-list-item-tag tag-list-item-tag-personal js-tag-list-item-tag-personal">, <a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
favourites/topics/tag/<?php echo rawurlencode($_smarty_tpl->tpl_vars['tag']->value);?>
/"rel="tag"class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><li class="tag-list-item tag-list-item-edit js-favourite-tag-edit" data-type="<?php echo (isset($_smarty_tpl->tpl_vars_local['targetType']) ? $_smarty_tpl->tpl_vars_local['targetType']->value : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars_local['isEditable']) ? $_smarty_tpl->tpl_vars_local['isEditable']->value : null)){?>style="display:none;"<?php }?>><a href="#" class="link-dotted"><?php echo smarty_function_lang(array('_default_short'=>'favourite_tags.edit'),$_smarty_tpl);?>
</a></li>
	<?php }?>

	</ul>
<?php }?><?php }} ?>