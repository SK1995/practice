<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:46:59
         compiled from "/home/you/php/practice/application/frontend/components/feed/blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181741162857c7a4b38ceed7-61804724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83d0a227848df24db730d7d38dec19be7d31e34b' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/feed/blogs.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181741162857c7a4b38ceed7-61804724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'blog' => 0,
    'blogsSubscribed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a4b38f5d38_95831840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a4b38f5d38_95831840')) {function content_57c7a4b38f5d38_95831840($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <div class="feed-blogs js-feed-blogs">
        <?php $_smarty_tpl->tpl_vars['blogsSubscribed'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['blogsSubscribed']) ? $_smarty_tpl->tpl_vars_local['blogsSubscribed']->value : null), null, 0);?>

        <p class="text-help">
            <?php echo $_smarty_tpl->tpl_vars['aLang']->value['feed']['blogs']['note'];?>

        </p>

        <?php if ((isset($_smarty_tpl->tpl_vars_local['blogsJoined']) ? $_smarty_tpl->tpl_vars_local['blogsJoined']->value : null)){?>
            <div class="field-checkbox-group">
                <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = (isset($_smarty_tpl->tpl_vars_local['blogsJoined']) ? $_smarty_tpl->tpl_vars_local['blogsJoined']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','inputClasses'=>'js-feed-blogs-subscribe','inputAttributes'=>array('data-id'=>$_smarty_tpl->tpl_vars['blog']->value->getId()),'checked'=>isset($_smarty_tpl->tpl_vars['blogsSubscribed']->value[$_smarty_tpl->tpl_vars['blog']->value->getId()]),'label'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['blog']->value->getUrlFull())."\">".$_tmp1."</a>"),$_smarty_tpl);?>

                <?php } ?>
            </div>
        <?php }else{ ?>
            <?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aLang']->value['feed']['blogs']['empty'],'mods'=>'info'),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }?><?php }} ?>