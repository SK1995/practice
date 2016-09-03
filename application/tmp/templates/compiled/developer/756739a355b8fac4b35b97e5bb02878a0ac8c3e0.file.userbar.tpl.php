<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:39:28
         compiled from "/home/you/php/practice/application/frontend/components/userbar/userbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212069148057c794e0531e82-88712894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '756739a355b8fac4b35b97e5bb02878a0ac8c3e0' => 
    array (
      0 => '/home/you/php/practice/application/frontend/components/userbar/userbar.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212069148057c794e0531e82-88712894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'iCountWallUser' => 0,
    'iCountCreated' => 0,
    'iCountFavourite' => 0,
    'iCountFriendsUser' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'sMenuHeadItemSelect' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c794e05e2af6_60124700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c794e05e2af6_60124700')) {function content_57c794e05e2af6_60124700($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_lang')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
?>

<div class="userbar">
    <div class="userbar-inner clearfix" style="min-width: <?php echo Config::Get('view.grid.fluid_min_width');?>
; max-width: <?php echo Config::Get('view.grid.fluid_max_width');?>
;">
        <?php if (!Config::Get('view.layout_show_banner')){?>
            <h1 class="userbar-logo">
                <a href="<?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
"><?php echo Config::Get('view.name');?>
</a>
            </h1>
        <?php }?>

        <nav class="userbar-nav">
            <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
                <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.info'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.wall'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.publications'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.favourite'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.friends'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.activity'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.messages'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.settings'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'content'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('text'=>"<img src=\"".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(24))."\" alt=\"".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName())."\" class=\"avatar\" /> ".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName()),'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath()),'classes'=>'nav-item--userbar-username','menu'=>array(array('name'=>'whois','text'=>$_tmp1,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())),array('name'=>'wall','text'=>$_tmp2,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."wall/",'count'=>$_smarty_tpl->tpl_vars['iCountWallUser']->value),array('name'=>'created','text'=>$_tmp3,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."created/topics/",'count'=>$_smarty_tpl->tpl_vars['iCountCreated']->value),array('name'=>'favourites','text'=>$_tmp4,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."favourites/topics/",'count'=>$_smarty_tpl->tpl_vars['iCountFavourite']->value),array('name'=>'friends','text'=>$_tmp5,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."friends/",'count'=>$_smarty_tpl->tpl_vars['iCountFriendsUser']->value),array('name'=>'activity','text'=>$_tmp6,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."stream/"),array('name'=>'talk','text'=>$_tmp7,'url'=>$_tmp8,'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value),array('name'=>'settings','text'=>$_tmp9,'url'=>$_tmp10),array('name'=>'admin','text'=>$_tmp11,'url'=>$_tmp12,'is_enabled'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()))),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['create'],'url'=>$_tmp13."add/topic",'attributes'=>array('data-modal-target'=>'modal-write')),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['talk']['title'],'url'=>$_tmp14,'title'=>$_smarty_tpl->tpl_vars['aLang']->value['talk']['new_messages'],'is_enabled'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value,'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['logout'],'url'=>$_tmp15."logout/?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value))), null, 0);?>
            <?php }else{ ?>
                <?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/login'),$_smarty_tpl);?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/register'),$_smarty_tpl);?>
<?php $_tmp17=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['title'],'classes'=>'js-modal-toggle-login','url'=>$_tmp16),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['registration']['title'],'classes'=>'js-modal-toggle-registration','url'=>$_tmp17)), null, 0);?>
            <?php }?>

            <?php echo smarty_function_component(array('_default_short'=>'nav','name'=>'userbar','activeItem'=>$_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value,'mods'=>'userbar','items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

        </nav>

        <?php echo smarty_function_component(array('_default_short'=>'search','template'=>'main','mods'=>'light'),$_smarty_tpl);?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    <?php echo smarty_function_component(array('_default_short'=>'modal-create'),$_smarty_tpl);?>

<?php }?><?php }} ?>