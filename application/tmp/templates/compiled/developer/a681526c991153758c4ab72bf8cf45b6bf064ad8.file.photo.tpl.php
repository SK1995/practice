<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:29
         compiled from "/home/you/php/practice/application/frontend/components/photo/photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32399236957c795952e40b1-87156310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a681526c991153758c4ab72bf8cf45b6bf064ad8' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/photo/photo.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32399236957c795952e40b1-87156310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasPhoto' => 0,
    'component' => 0,
    'mods' => 0,
    'useAvatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79595339790_40773361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79595339790_40773361')) {function content_57c79595339790_40773361($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cmods')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cmods.php';
if (!is_callable('smarty_function_cattr')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.cattr.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('photo', null, 0);?>

<?php $_smarty_tpl->tpl_vars['hasPhoto'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['hasPhoto']) ? $_smarty_tpl->tpl_vars_local['hasPhoto']->value : null), null, 0);?>
<?php $_smarty_tpl->tpl_vars['useAvatar'] = new Smarty_variable((($tmp = @(isset($_smarty_tpl->tpl_vars_local['useAvatar']) ? $_smarty_tpl->tpl_vars_local['useAvatar']->value : null))===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars_local['mods']) ? $_smarty_tpl->tpl_vars_local['mods']->value : null), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['hasPhoto']->value){?>
    <?php $_smarty_tpl->tpl_vars['mods'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['mods']->value)." nophoto", null, 0);?>
<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo (isset($_smarty_tpl->tpl_vars_local['classes']) ? $_smarty_tpl->tpl_vars_local['classes']->value : null);?>
"
    data-target-id="<?php echo (isset($_smarty_tpl->tpl_vars_local['targetId']) ? $_smarty_tpl->tpl_vars_local['targetId']->value : null);?>
"
    <?php echo smarty_function_cattr(array('list'=>(isset($_smarty_tpl->tpl_vars_local['attributes']) ? $_smarty_tpl->tpl_vars_local['attributes']->value : null)),$_smarty_tpl);?>
>

    
    <a href="<?php echo (isset($_smarty_tpl->tpl_vars_local['url']) ? $_smarty_tpl->tpl_vars_local['url']->value : null);?>
">
        <img src="<?php echo (isset($_smarty_tpl->tpl_vars_local['photoPath']) ? $_smarty_tpl->tpl_vars_local['photoPath']->value : null);?>
" alt="<?php echo (isset($_smarty_tpl->tpl_vars_local['photoAltText']) ? $_smarty_tpl->tpl_vars_local['photoAltText']->value : null);?>
" class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-image js-photo-image" />
    </a>

    
    <?php if ((isset($_smarty_tpl->tpl_vars_local['editable']) ? $_smarty_tpl->tpl_vars_local['editable']->value : null)){?>
        <ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions">
            
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions-upload js-photo-actions-upload">
                <label class="form-input-file">
                    <span class="js-photo-actions-upload-label">
                        <?php if ($_smarty_tpl->tpl_vars['hasPhoto']->value){?>
                            <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.change_photo'),$_smarty_tpl);?>

                        <?php }else{ ?>
                            <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.upload_photo'),$_smarty_tpl);?>

                        <?php }?>
                    </span>
                    <input type="file" name="photo" class="js-photo-actions-upload-input">
                </label>
            </li>

            
            <?php if ($_smarty_tpl->tpl_vars['useAvatar']->value){?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions-crop-avatar js-photo-actions-crop-avatar">
                    <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.change_avatar'),$_smarty_tpl);?>

                </li>
            <?php }?>

            
            <li class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-actions-remove js-photo-actions-remove">
                <?php echo smarty_function_lang(array('_default_short'=>'user.photo.actions.remove'),$_smarty_tpl);?>

            </li>
        </ul>
    <?php }?>
</div><?php }} ?>