<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:29
         compiled from "/home/you/php/practice/application/frontend/components/wall/wall.form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74736041657c79595776cd1-69404641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64258cab2f5a4ae292a69ad69dedad3e0e6d221a' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/wall/wall.form.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74736041657c79595776cd1-69404641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79595791909_69848447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79595791909_69848447')) {function content_57c79595791909_69848447($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<form class="wall-form js-wall-form <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
" data-id="<?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['id']) ? $_smarty_tpl->tpl_vars_local['id']->value : null))===null||$tmp==='' ? 0 : $tmp);?>
" <?php if (!(($tmp = @(isset($_smarty_tpl->tpl_vars_local['display']) ? $_smarty_tpl->tpl_vars_local['display']->value : null))===null||$tmp==='' ? true : $tmp)){?>style="display: none"<?php }?>>
    
    <?php ob_start();?><?php echo (($tmp = @(isset($_smarty_tpl->tpl_vars_local['placeholder']) ? $_smarty_tpl->tpl_vars_local['placeholder']->value : null))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['aLang']->value['wall']['form']['fields']['text']['placeholder'] : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'textarea','placeholder'=>$_tmp1,'inputClasses'=>'width-full js-wall-form-text'),$_smarty_tpl);?>


    
    <footer class="wall-form-footer">
        <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'submit','mods'=>'primary','classes'=>'js-wall-form-submit','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add']),$_smarty_tpl);?>

    </footer>
</form><?php }} ?>