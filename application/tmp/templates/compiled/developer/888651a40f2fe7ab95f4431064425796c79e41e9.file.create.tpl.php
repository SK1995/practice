<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 05:42:10
         compiled from "/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/property/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41247422357c79582572318-57397740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '888651a40f2fe7ab95f4431064425796c79e41e9' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/actions/ActionAdmin/property/create.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
    'eac99433d5b6b70e1321dd31831018f5ac3a904c' => 
    array (
      0 => '/home/you/php/practice/application/plugins/admin/frontend/skin/default/layouts/layout.base.tpl',
      1 => 1472657853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41247422357c79582572318-57397740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTemplatePathPlugin' => 0,
    'sHtmlDescription' => 0,
    'sHtmlKeywords' => 0,
    'sHtmlTitle' => 0,
    'aHtmlHeadFiles' => 0,
    'aHtmlRssAlternate' => 0,
    'sHtmlCanonical' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    '_sPhpSessionId' => 0,
    '_sPhpSessionName' => 0,
    'aRouter' => 0,
    'sPage' => 0,
    'sPath' => 0,
    'aLangJs' => 0,
    'sBodyClasses' => 0,
    'bNoSidebar' => 0,
    'oUserCurrent' => 0,
    'sMenuItemSelect' => 0,
    'sNav' => 0,
    'sNavContent' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
    'bNoSystemMessages' => 0,
    'aMsgError' => 0,
    'aMsgNotice' => 0,
    'sLayoutAfter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c79582690d48_61822669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c79582690d48_61822669')) {function content_57c79582690d48_61822669($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_json')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.json.php';
if (!is_callable('smarty_function_lang_load')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_component')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.component.php';
if (!is_callable('smarty_function_hook')) include '/home/you/php/practice/framework/classes/modules/viewer/plugs/function.hook.php';
?><!doctype html>



<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="ru"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="ru"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru"> <!--<![endif]-->

<head>
    
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlKeywords']->value;?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</title>

    
    <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['css'];?>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    
    <link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>"search/opensearch"),$_smarty_tpl);?>
" title="<?php echo Config::Get('view.name');?>
"/>

    
    <?php if ($_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value){?>
        <link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['title'];?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['sHtmlCanonical']->value){?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sHtmlCanonical']->value;?>
"/>
    <?php }?>


    <script>
        var PATH_ROOT = '<?php echo Router::GetPath('/');?>
',
                PATH_SKIN = '<?php echo Config::Get("path.skin.web");?>
',
                PATH_FRAMEWORK_FRONTEND = '<?php echo Config::Get("path.framework.frontend.web");?>
',
                PATH_FRAMEWORK_LIBS_VENDOR = '<?php echo Config::Get("path.framework.libs_vendor.web");?>
',
                /**
                 * Для совместимости с прошлыми версиями. БУДУТ УДАЛЕНЫ
                 */
                DIR_WEB_ROOT = '<?php echo Config::Get("path.root.web");?>
',
                DIR_STATIC_SKIN = '<?php echo Config::Get("path.skin.web");?>
',
                DIR_STATIC_FRAMEWORK = '<?php echo Config::Get("path.framework.frontend.web");?>
',
                DIR_ENGINE_LIBS = '<?php echo Config::Get("path.framework.web");?>
/libs',

                LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
',
                SESSION_ID = '<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
',
                SESSION_NAME = '<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
',
                LANGUAGE = '<?php echo Config::Get('lang.current');?>
',
                WYSIWYG = <?php if (Config::Get('view.wysiwyg')){?>true<?php }else{ ?>false<?php }?>;

        var aRouter = [];
        <?php  $_smarty_tpl->tpl_vars['sPath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPath']->_loop = false;
 $_smarty_tpl->tpl_vars['sPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aRouter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPath']->key => $_smarty_tpl->tpl_vars['sPath']->value){
$_smarty_tpl->tpl_vars['sPath']->_loop = true;
 $_smarty_tpl->tpl_vars['sPage']->value = $_smarty_tpl->tpl_vars['sPath']->key;
?>
        aRouter['<?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
';
        <?php } ?>
    </script>

    
    <?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['js'];?>


    <script>
        ls.lang.load(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['aLangJs']->value),$_smarty_tpl);?>
);
        ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"blog"),$_smarty_tpl);?>
);
    </script>


    
    

</head>


<body class="<?php echo $_smarty_tpl->tpl_vars['sBodyClasses']->value;?>
  ls-admin">



<div id="container" class=" <?php if ($_smarty_tpl->tpl_vars['bNoSidebar']->value){?>no-sidebar<?php }?>">
    
    <header id="header" class="clearfix" role="banner">
        <ul class="breadcrumbs">
            <li><a href="<?php echo Router::GetPath('/');?>
" class="link-dotted">Перейти на сайт</a></li>    
        </ul>

        <div class="site-info">
            <h1 class="site-name"><a href="<?php echo Router::GetPath('admin');?>
"><?php echo Config::Get("view.name");?>
</a></h1>
        </div>

        
<?php ob_start();?><?php echo smarty_function_router(array('page'=>"admin/users/profile/".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/logout'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'dropdown','text'=>"<img src=\"".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(48))."\" alt=\"Avatar\" class=\"userbar-avatar\" />".((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin()),'classes'=>'admin-userbar js-dropdown-userbar','menu'=>array(array('text'=>'Мой профиль','url'=>$_tmp1),array('text'=>'Выйти','url'=>$_tmp2."?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value)))),$_smarty_tpl);?>

			</header>


			
			<div id="wrapper" class=" clearfix">
				
<?php if (!$_smarty_tpl->tpl_vars['bNoSidebar']->value){?>
<aside id="sidebar" role="complementary">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."blocks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside>
<?php }?>


<div id="content-wrapper">
<div id="content"
role="main"
<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='profile'){?>itemscope itemtype="http://data-vocabulary.org/Person"<?php }?>>


<div class="actionbar  clearfix">
								
	<a href="<?php echo smarty_function_router(array('page'=>"admin/properties/".((string)$_smarty_tpl->tpl_vars['sPropertyTargetType']->value)),$_smarty_tpl);?>
" class="button">&larr; Назад к списку полей</a>

							</div>
						

						
						
						<div class="content-padding">
							

							

							
								<h2 class="page-header">Добавление поля для типа &laquo;<?php echo $_smarty_tpl->tpl_vars['aPropertyTargetParams']->value['name'];?>
&raquo;</h2>
							

							
							<?php if ($_smarty_tpl->tpl_vars['sNav']->value||$_smarty_tpl->tpl_vars['sNavContent']->value){?>
								<div class="nav-group">
									<?php if ($_smarty_tpl->tpl_vars['sNav']->value){?>
										<?php if (in_array($_smarty_tpl->tpl_vars['sNav']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?>
											<?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['sNav']->value];?>

										<?php }else{ ?>
											<?php echo $_smarty_tpl->getSubTemplate ("navs/nav.".((string)$_smarty_tpl->tpl_vars['sNav']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

										<?php }?>
									<?php }else{ ?>
										<?php echo $_smarty_tpl->getSubTemplate ("navs/nav.".((string)$_smarty_tpl->tpl_vars['sNavContent']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }?>
								</div>
							<?php }?>

							
								<?php if (!$_smarty_tpl->tpl_vars['bNoSystemMessages']->value){?>

									<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
										<?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aMsgError']->value,'mods'=>'error','dismissible'=>true),$_smarty_tpl);?>

									<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
										<?php echo smarty_function_component(array('_default_short'=>'alert','text'=>$_smarty_tpl->tpl_vars['aMsgNotice']->value,'dismissible'=>true),$_smarty_tpl);?>

									<?php }?>

								<?php }?>

							
	<form method="post">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.hidden.security_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		
		<?php $_smarty_tpl->tpl_vars['aPropertyType'] = new Smarty_variable(array(array('value'=>'int','text'=>'Целое число'),array('value'=>'float','text'=>'Дробное число'),array('value'=>'varchar','text'=>'Строка'),array('value'=>'text','text'=>'Текст'),array('value'=>'checkbox','text'=>'Чекбокс'),array('value'=>'date','text'=>'Дата'),array('value'=>'select','text'=>'Выпадающий список'),array('value'=>'tags','text'=>'Теги'),array('value'=>'video_link','text'=>'Ссылка на видео'),array('value'=>'file','text'=>'Файл'),array('value'=>'image','text'=>'Изображение')), null, 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'property[type]','sFieldLabel'=>'Тип поля','sFieldClasses'=>'width-200','aFieldItems'=>$_smarty_tpl->tpl_vars['aPropertyType']->value,'sFieldSelectedValue'=>$_smarty_tpl->tpl_vars['_aRequest']->value['property']['type']), 0);?>


		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'property[title]','sFieldValue'=>$_smarty_tpl->tpl_vars['_aRequest']->value['property']['title'],'sFieldLabel'=>'Название'), 0);?>


		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'property[code]','sFieldValue'=>$_smarty_tpl->tpl_vars['_aRequest']->value['property']['code'],'sFieldLabel'=>'Код'), 0);?>


		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['admin'])."forms/fields/form.field.button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sFieldName'=>'property_create_submit','sFieldText'=>$_smarty_tpl->tpl_vars['aLang']->value['plugin']['admin']['add'],'sFieldValue'=>'1','sFieldStyle'=>'primary'), 0);?>

	</form>


							
							
						</div>
					</div>


					
					<footer id="footer">
						

						<ul>
							<li>&copy; 2008-<?php echo date("Y");?>
 LiveStreet CMS</li>
						</ul>

						<ul>
							<li><a href="https://catalog.livestreetcms.com/" class="link-border" target="_blank"><span>Каталог расширений</a></span></li>
							<li><a href="http://livestreet.ru/" class="link-border" target="_blank"><span>Сообщество</a></span></li>
							<li><a href="http://job.livestreetcms.com/" class="link-border" target="_blank"><span>Работа</a></span></li>
						</ul>

						<ul class="footer-right">
							<li><a href="<?php echo Router::GetPath('/');?>
" class="link-border"><span>Перейти на сайт</a></span></li>
						</ul>

						
					</footer>
				</div>
			</div> 
		</div> 
	


	

	
	<?php echo smarty_function_hook(array('run'=>'admin_body_end'),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->tpl_vars['sLayoutAfter']->value;?>

</body>
</html><?php }} ?>