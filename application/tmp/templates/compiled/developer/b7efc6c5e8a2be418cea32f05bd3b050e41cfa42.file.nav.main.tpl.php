<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:27
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/navs/nav.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57053318957c794df445289-39430611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7efc6c5e8a2be418cea32f05bd3b050e41cfa42' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/navs/nav.main.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57053318957c794df445289-39430611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMenuMain' => 0,
    'oMenuSection' => 0,
    'oMenuItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794df4e6f12_93373233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794df4e6f12_93373233')) {function content_57c794df4e6f12_93373233($_smarty_tpl) {?>

<div class="m-nav-toggle dropdown-toggle js-nav-main-fold-mobile"><i class="icon-list"></i> Навигация</div>

<ul class="nav-main js-nav-main">
	
	<?php  $_smarty_tpl->tpl_vars['oMenuSection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oMenuSection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oMenuMain']->value->GetSections(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oMenuSection']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['oMenuSection']->key => $_smarty_tpl->tpl_vars['oMenuSection']->value){
$_smarty_tpl->tpl_vars['oMenuSection']->_loop = true;
 $_smarty_tpl->tpl_vars['oMenuSection']->index++;
?>
		<?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->getName()!='addition'){?>
            <li class="nav-main-item nav-main-item-root <?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>js-nav-main-item-root<?php }?> <?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->GetActive()){?>active<?php }?>" data-item-id="<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->index;?>
">
                <a <?php if (!$_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>href="<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->value->GetUrlFull();?>
"<?php }else{ ?>href="#"<?php }?>
				   <?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>class="js-dropdown-nav-main" data-dropdown-target="dropdown-menu-nav-main-<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->index;?>
"<?php }?>>
                    <i class="nav-main-item-icon nav-main-item-icon-<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->value->GetName();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oMenuSection']->value->GetCaption(), ENT_QUOTES, 'UTF-8', true);?>
"></i>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oMenuSection']->value->GetCaption(), ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>

			
				<?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>
                    <ul class="js-nav-main-submenu">
						<?php  $_smarty_tpl->tpl_vars['oMenuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oMenuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oMenuSection']->value->GetItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oMenuItem']->key => $_smarty_tpl->tpl_vars['oMenuItem']->value){
$_smarty_tpl->tpl_vars['oMenuItem']->_loop = true;
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['oMenuItem']->value->GetActive()){?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['oMenuItem']->value->GetUrlFull();?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oMenuItem']->value->GetCaption(), ENT_QUOTES, 'UTF-8', true);?>
</span></a>
                            </li>
						<?php } ?>
                    </ul>
				<?php }?>
            </li>
		<?php }?>
	<?php } ?>

	<?php if (!isset($_smarty_tpl->tpl_vars['oMenuSection'])) $_smarty_tpl->tpl_vars['oMenuSection'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['oMenuSection']->value = $_smarty_tpl->tpl_vars['oMenuMain']->value->GetSection('addition')){?>
        <li class="nav-main-item nav-main-item-root <?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>js-nav-main-item-root<?php }?> <?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->GetActive()){?>active<?php }?>" data-item-id="<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->index+1;?>
">
            <a <?php if (!$_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>href="<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->value->GetUrlFull();?>
"<?php }else{ ?>href="#"<?php }?>
			   <?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>class="js-dropdown-nav-main" data-dropdown-target="dropdown-menu-nav-main-<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->index+1;?>
"<?php }?>>
                <i class="nav-main-item-icon nav-main-item-icon-<?php echo $_smarty_tpl->tpl_vars['oMenuSection']->value->GetName();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oMenuSection']->value->GetCaption(), ENT_QUOTES, 'UTF-8', true);?>
"></i>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oMenuSection']->value->GetCaption(), ENT_QUOTES, 'UTF-8', true);?>
</span>
            </a>

		
			<?php if ($_smarty_tpl->tpl_vars['oMenuSection']->value->HasItems()){?>
                <ul class="js-nav-main-submenu">
					<?php  $_smarty_tpl->tpl_vars['oMenuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oMenuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oMenuSection']->value->GetItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oMenuItem']->key => $_smarty_tpl->tpl_vars['oMenuItem']->value){
$_smarty_tpl->tpl_vars['oMenuItem']->_loop = true;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['oMenuItem']->value->GetActive()){?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['oMenuItem']->value->GetUrlFull();?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oMenuItem']->value->GetCaption(), ENT_QUOTES, 'UTF-8', true);?>
</span></a>
                        </li>
					<?php } ?>
                </ul>
			<?php }?>
        </li>
	<?php }?>

	
</ul>
<?php }} ?>