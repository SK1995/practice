<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:26
         compiled from "/home/you/php/practice/application/frontend/components/comment/comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113884964857c7a41ae70215-92723306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c7fada1728c60213c90f9ed2a8061e4f3e3e269' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/comment/comments.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113884964857c7a41ae70215-92723306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'forbidAdd' => 0,
    'oUserCurrent' => 0,
    'pagination' => 0,
    'component' => 0,
    'mods' => 0,
    'targetType' => 0,
    'targetId' => 0,
    'count' => 0,
    'aLang' => 0,
    'isSubscribed' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41aefcf82_30145429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41aefcf82_30145429')) {function content_57c7a41aefcf82_30145429($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_block')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.add_block.php';
if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('comments', null, 0);?>


    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['targetId'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['targetType'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['targetType']) ? $_smarty_tpl->tpl_vars_local['targetType']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['count']) ? $_smarty_tpl->tpl_vars_local['count']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['forbidAdd'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['forbidAdd']) ? $_smarty_tpl->tpl_vars_local['forbidAdd']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['isSubscribed'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['isSubscribed']) ? $_smarty_tpl->tpl_vars_local['isSubscribed']->value : null), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['pagination'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['pagination']) ? $_smarty_tpl->tpl_vars_local['pagination']->value : null), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['forbidAdd']->value){?>
        <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." forbid", null, 0);?>
    <?php }?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['pagination']->value['total']){?>
    <?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'component@comment.toolbar'),$_smarty_tpl);?>

<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 js-comments <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
"
    data-target-type="<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
"
    data-target-id="<?php echo $_smarty_tpl->tpl_vars['targetId']->value;?>
"
    data-comment-last-id="<?php echo (isset($_smarty_tpl->tpl_vars_local['lastCommentId']) ? $_smarty_tpl->tpl_vars_local['lastCommentId']->value : null);?>
"
    <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>
    
    <header class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-header">
        <h3 class="comments-title js-comments-title">
            <?php ob_start();?><?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['titleLang']) ? $_smarty_tpl->tpl_vars_local['titleLang']->value : null))===null||$tmp==='' ? 'comments.comments_declension' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_lang(array('_default_short'=>$_tmp1,'count'=>$_smarty_tpl->tpl_vars['count']->value,'plural'=>true),$_smarty_tpl);?>

        </h3>
    </header>


    

    
    <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('buttons'=>array(array('classes'=>'js-comments-fold-all-toggle','text'=>$_smarty_tpl->tpl_vars['aLang']->value['comments']['folding']['fold_all'])))), null, 0);?>

    
    <?php if ((isset($_smarty_tpl->tpl_vars_local['useSubscribe']) ? $_smarty_tpl->tpl_vars_local['useSubscribe']->value : null)&&$_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['isSubscribed']->value){?><?php echo "active";?><?php }?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('items', null, 0);
$_smarty_tpl->tpl_vars['items']->value[] = array('buttons'=>array(array('classes'=>"comments-subscribe js-comments-subscribe ".$_tmp2,'text'=>$_smarty_tpl->tpl_vars['isSubscribed']->value ? $_smarty_tpl->tpl_vars['aLang']->value['comments']['unsubscribe'] : $_smarty_tpl->tpl_vars['aLang']->value['comments']['subscribe'])));?>
    <?php }?>

    

    <?php echo smarty_function_component(array('_default_short'=>'actionbar','items'=>$_smarty_tpl->tpl_vars['items']->value,'classes'=>'comments-actions'),$_smarty_tpl);?>



    
    <div class="comment-list js-comment-list">
        <?php echo $_smarty_tpl->getSubTemplate ('./comment-tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('comments'=>(isset($_smarty_tpl->tpl_vars_local['comments']) ? $_smarty_tpl->tpl_vars_local['comments']->value : null),'forbidAdd'=>$_smarty_tpl->tpl_vars['forbidAdd']->value,'authorid'=>(isset($_smarty_tpl->tpl_vars_local['authorid']) ? $_smarty_tpl->tpl_vars_local['authorid']->value : null),'authorText'=>(isset($_smarty_tpl->tpl_vars_local['authorText']) ? $_smarty_tpl->tpl_vars_local['authorText']->value : null),'dateReadLast'=>(isset($_smarty_tpl->tpl_vars_local['dateReadLast']) ? $_smarty_tpl->tpl_vars_local['dateReadLast']->value : null),'commentParams'=>(isset($_smarty_tpl->tpl_vars_local['commentParams']) ? $_smarty_tpl->tpl_vars_local['commentParams']->value : null)), 0);?>

    </div>


    
    <?php echo smarty_function_component(array('_default_short'=>'pagination','classes'=>((string)$_smarty_tpl->tpl_vars['component']->value)."-pagination",'params'=>$_smarty_tpl->tpl_vars['pagination']->value),$_smarty_tpl);?>



    

    
    <?php if ($_smarty_tpl->tpl_vars['forbidAdd']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'alert','mods'=>'info','text'=>(isset($_smarty_tpl->tpl_vars_local['forbidText']) ? $_smarty_tpl->tpl_vars_local['forbidText']->value : null)),$_smarty_tpl);?>


    
    <?php }else{ ?>
        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
            
            <h4 class="comment-reply-root js-comment-reply js-comment-reply-root" data-id="0">
                <a href="#" class="link-dotted"><?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['addCommentText']) ? $_smarty_tpl->tpl_vars_local['addCommentText']->value : null))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['aLang']->value['comments']['form']['title'] : $tmp);?>
</a>
            </h4>
        <?php }else{ ?>
            <?php echo smarty_function_component(array('_default_short'=>'alert','mods'=>'info','text'=>$_smarty_tpl->tpl_vars['aLang']->value['comments']['alerts']['unregistered']),$_smarty_tpl);?>

        <?php }?>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&(!$_smarty_tpl->tpl_vars['forbidAdd']->value||($_smarty_tpl->tpl_vars['forbidAdd']->value&&$_smarty_tpl->tpl_vars['count']->value))){?>
        <?php echo $_smarty_tpl->getSubTemplate ('./comment-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('classes'=>'js-comment-form','targetType'=>$_smarty_tpl->tpl_vars['targetType']->value,'targetId'=>$_smarty_tpl->tpl_vars['targetId']->value), 0);?>

    <?php }?>
</div><?php }} ?>