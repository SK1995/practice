<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:53
         compiled from "/home/you/php/practice/application/frontend/components/activity/blocks/recent-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206531038557c7a4ad13ade3-94481980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '694865cca1a14d267d3dd5b43287fc0b50ee4339' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/activity/blocks/recent-item.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206531038557c7a4ad13ade3-94481980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'blog' => 0,
    'topic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a4ad16b001_66204382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a4ad16b001_66204382')) {function content_57c7a4ad16b001_66204382($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('item_content', null, null); ob_start(); ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUserWebPath();?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['user']->value->getDisplayName();?>
</a> &rarr;
    <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value->getUrlFull();?>
" class="blog-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a> &rarr;
    <a href="<?php echo (isset($_smarty_tpl->tpl_vars_local['topicUrl']) ? $_smarty_tpl->tpl_vars_local['topicUrl']->value : null);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>

    <p>
        <time datetime="<?php echo smarty_function_date_format(array('date'=>(isset($_smarty_tpl->tpl_vars_local['date']) ? $_smarty_tpl->tpl_vars_local['date']->value : null),'format'=>'c'),$_smarty_tpl);?>
">
            <?php echo smarty_function_date_format(array('date'=>(isset($_smarty_tpl->tpl_vars_local['date']) ? $_smarty_tpl->tpl_vars_local['date']->value : null),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y"),$_smarty_tpl);?>

        </time> |

        <?php echo smarty_function_lang(array('_default_short'=>'comments.comments_declension','count'=>$_smarty_tpl->tpl_vars['topic']->value->getCountComment(),'plural'=>true),$_smarty_tpl);?>

    </p>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_component(array('_default_short'=>'item','element'=>'li','mods'=>'image-rounded','desc'=>Smarty::$_smarty_vars['capture']['item_content'],'image'=>array('path'=>$_smarty_tpl->tpl_vars['user']->value->getProfileAvatarPath(48),'url'=>$_smarty_tpl->tpl_vars['user']->value->getUserWebPath())),$_smarty_tpl);?>
<?php }} ?>