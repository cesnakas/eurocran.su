<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init(array("fx"));

?><!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<?use \Bitrix\Main\Page\Asset;?>
	<meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<?$APPLICATION->ShowMeta("description")?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<?$APPLICATION->ShowCSS();?>
	<?$APPLICATION->ShowHeadStrings()?>
	<?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/ion.rangeSlider.css', true);
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/styles.css', true);

	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/jquery.fancybox.min.css', true);

	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/response_1229.css', true);
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/response_1023.css', true);
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/response_767.css', true);
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/response_479.css', true);
?>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46722495 = new Ya.Metrika({ id:46722495, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46722495" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35763331-1']);
  _gaq.push(['_addOrganic','images.yandex.ru','q',true]);
  _gaq.push(['_addOrganic','blogsearch.google.ru','q',true]);
  _gaq.push(['_addOrganic','blogs.yandex.ru','text',true]);
  _gaq.push(['_addOrganic','nigma.ru','s']);
  _gaq.push(['_addOrganic','webalta.ru','q']);
  _gaq.push(['_addOrganic','aport.ru','r']);
  _gaq.push(['_addOrganic','poisk.ru','text']);
  _gaq.push(['_addOrganic','km.ru','sq']);
  _gaq.push(['_addOrganic','liveinternet.ru','ask']);
  _gaq.push(['_addOrganic','quintura.ru','request']);
  _gaq.push(['_addOrganic','search.qip.ru','query',true]);
  _gaq.push(['_addOrganic','gde.ru','keywords']);
  _gaq.push(['_addOrganic','gogo.ru','q']);
  _gaq.push(['_addOrganic','ru.yahoo.com','p',true]);
  _gaq.push(['_addOrganic','price.ru','pnam']);
  _gaq.push(['_addOrganic','tyndex.ru','pnam']);
  _gaq.push(['_addOrganic','torg.mail.ru','q',true]);
  _gaq.push(['_addOrganic','tiu.ru','query']);
  _gaq.push(['_addOrganic','tech2u.ru','text']);
  _gaq.push(['_addOrganic','akavita.by','z']);
  _gaq.push(['_addOrganic','tut.by','query']);
  _gaq.push(['_addOrganic','all.by','query']);
  _gaq.push(['_addOrganic','meta.ua','q']);
  _gaq.push(['_addOrganic','bigmir.net','q']);
  _gaq.push(['_addOrganic','i.ua','q']);
  _gaq.push(['_addOrganic','online.ua','q']);
  _gaq.push(['_addOrganic','a.ua','s']);
  _gaq.push(['_addOrganic','ukr.net','search_query']);
  _gaq.push(['_addOrganic','search.ua','query']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99344548-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-99344548-1');
</script>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrap">
	<div class="main">
		<header>
			<div class="info">
				<div class="cont row">
					<div class="logo">
						<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt=""></a>
					</div>

					<div class="slogan"><?$APPLICATION->IncludeFile(SITE_DIR."include/area/name.php", Array(), Array("SHOW_BORDER" => true, "MODE" => "text"));?></div>

					<div class="time">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/ic_time.svg" alt="">
						<span><?$APPLICATION->IncludeFile(SITE_DIR."include/area/work.php", Array(), Array("SHOW_BORDER" => true, "MODE" => "text"));?></span>
					</div>

					<div class="phones modal_cont">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/ic_phone.svg" alt="" class="icon">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/area/main_number.php", Array(), Array("SHOW_BORDER" => true, "MODE" => "text"));?>

						<button class="btn mini_modal_btn" data-modal-id="#phones_modal"></button>

						<div class="mini_modal" id="phones_modal">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/area/phones_modal.php", Array(), Array("SHOW_BORDER" => true, "MODE" => "text"));?>
						</div>
					</div>
                    <div>
                        <img class="lup_img" src="/bitrix/templates/new/images/lupa.png" width="40px">
                    </div>

					<div class="callback modal_cont">
						<button class="btn mini_modal_btn" data-modal-id="#callback_modal">Заказать звонок</button>

						<?$APPLICATION->IncludeFile(SITE_DIR."include/callback_modal.php", Array(), Array("SHOW_BORDER" => false, "MODE" => "text"));?>
					</div>

					<button class="mob_menu_btn">
						<span></span>
					</button>
				</div>
			</div>

			<div class="bottom">
				<div class="cont">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"main",
						Array(
							"ROOT_MENU_TYPE" => "main",
							"MAX_LEVEL" => "2",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array()
						)
					);?>
				</div>
			</div>

            <div class="bottom2" style="display: none">
                <div class="cont">
                    <form class="top_srch_frm" action="/search/">
                        <input type="text" class="input_srch" name="q" value="<?=$_GET['q']?>" size="40" />
                        <input class="srch_pg_btn" type="submit" value="Искать" />
                    </form>
                </div>
            </div>
		</header>

		<section class="page_head">
			<div class="cont">
			<?$APPLICATION->IncludeComponent(
				"bitrix:breadcrumb", 
				"navigation", 
				array(
					"START_FROM" => "0",
					"PATH" => "",
					"SITE_ID" => "s1"
				),
				false
			);?>
			</div>
		</section>

		<section class="category_info content_flex">
			<div class="cont row">