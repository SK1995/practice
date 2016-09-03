<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 06:44:27
         compiled from "/home/you/php/practice/application/frontend/components/comment/comment-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23790526457c7a41b12efb4-19035498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b61c7a3de247a6c3f100147904262a6553d6d2be' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/comment/comment-form.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23790526457c7a41b12efb4-19035498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'targetId' => 0,
    'targetType' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7a41b16f243_88489282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7a41b16f243_88489282')) {function content_57c7a41b16f243_88489282($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_hook')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('comment-form', null, 0);?>


<?php $_smarty_tpl->tpl_vars['targetId'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['targetType'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['targetType']) ? $_smarty_tpl->tpl_vars_local['targetType']->value : null), null, 0);?>



<form method           = "post"
      class            = "<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>(isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null)),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
"
      enctype          = "multipart/form-data"
      data-target-id   = "<?php echo $_smarty_tpl->tpl_vars['targetId']->value;?>
"
      data-target-type = "<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
"
      <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>

    
        <?php echo smarty_function_hook(array('run'=>'comment-form-begin'),$_smarty_tpl);?>


        
            
            <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'reply','value'=>'0','inputClasses'=>'js-comment-form-id'),$_smarty_tpl);?>

            <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'comment_target_id','value'=>$_smarty_tpl->tpl_vars['targetId']->value),$_smarty_tpl);?>


            
            <?php echo smarty_function_component(array('_default_short'=>'editor','set'=>(($tmp = @(isset($_smarty_tpl->tpl_vars_local['editorSet']) ? $_smarty_tpl->tpl_vars_local['editorSet']->value : null))===null||$tmp==='' ? 'light' : $tmp),'name'=>'comment_text','inputClasses'=>'js-comment-form-text','help'=>false,'mediaTargetType'=>'comment'),$_smarty_tpl);?>

        

        <?php echo smarty_function_hook(array('run'=>'comment-form-end'),$_smarty_tpl);?>


        

        
        <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_comment','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add'],'mods'=>'primary','classes'=>'js-comment-form-submit'),$_smarty_tpl);?>


        
        <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_comment','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['save'],'mods'=>'primary','classes'=>'js-comment-form-update-submit hide'),$_smarty_tpl);?>

        <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_comment','type'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['cancel'],'classes'=>'js-comment-form-update-cancel fl-r'),$_smarty_tpl);?>


        
        <?php echo smarty_function_component(array('_default_short'=>'button','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['preview_text'],'type'=>'button','classes'=>'js-comment-form-preview'),$_smarty_tpl);?>

    
</form><?php }} ?>