<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:29
         compiled from "/home/you/php/practice/application/frontend/components/wall/wall.posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171732398657c7959579c819-27306326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5512f1bdc84ca5f279e48c73acd69658390befa7' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/wall/wall.posts.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171732398657c7959579c819-27306326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'comments' => 0,
    'postId' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c795957efd84_06338378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c795957efd84_06338378')) {function content_57c795957efd84_06338378($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['posts']) ? $_smarty_tpl->tpl_vars_local['posts']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['comments'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value->getLastReplyWall(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['postId'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value->getId(), null, 0);?>

    
    <?php echo $_smarty_tpl->getSubTemplate ('./wall.entry.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('entry'=>$_smarty_tpl->tpl_vars['post']->value,'showReply'=>!$_smarty_tpl->tpl_vars['comments']->value,'classes'=>'wall-post js-wall-post','type'=>'post'), 0);?>


    
    <div class="wall-comments js-wall-comment-wrapper" data-id="<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
">
        
        <?php if (count($_smarty_tpl->tpl_vars['comments']->value)<$_smarty_tpl->tpl_vars['post']->value->getCountReply()){?>
            <?php echo smarty_function_component(array('_default_short'=>'more','classes'=>'wall-more-comments js-wall-more-comments','count'=>$_smarty_tpl->tpl_vars['post']->value->getCountReply()-Config::Get('module.wall.count_last_reply'),'target'=>".js-wall-entry-container[data-id=".((string)$_smarty_tpl->tpl_vars['postId']->value)."]",'ajaxParams'=>array('last_id'=>$_smarty_tpl->tpl_vars['comments']->value[0]->getId(),'target_id'=>$_smarty_tpl->tpl_vars['postId']->value)),$_smarty_tpl);?>

        <?php }?>

        
        <div class="js-wall-entry-container" data-id="<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['comments']->value){?>
                <?php echo $_smarty_tpl->getSubTemplate ('./wall.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('comments'=>$_smarty_tpl->tpl_vars['comments']->value), 0);?>

            <?php }?>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
            <?php echo $_smarty_tpl->getSubTemplate ('./wall.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['postId']->value,'display'=>$_smarty_tpl->tpl_vars['comments']->value,'placeholder'=>$_smarty_tpl->tpl_vars['aLang']->value['wall']['form']['fields']['text']['placeholder_reply']), 0);?>

        <?php }?>
    </div>
<?php } ?><?php }} ?>