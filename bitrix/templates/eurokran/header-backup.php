<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead()?>
<meta name="viewport" content="width=1008">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/fancybox/jquery.fancybox-1.3.4.css">
<!--[if lt IE 9]><script src="<?=SITE_TEMPLATE_PATH?>/js/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("a.fancybox, a[rel=fancybox]").fancybox();
});
</script>
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter17837284 = new Ya.Metrika({id:17837284, enableAll: true, ut:"noindex", webvisor:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/17837284?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="<?=isMAIN()?"main index":"main";?>">
    <header>
    	<div class="wrap clearfix">
            <div class="logo"><a href="/"></a></div>
            <div class="h-content clearfix">
                <div class="h-phone">
					<? $APPLICATION->IncludeFile("inc/header_phone.php", Array(), Array("MODE"=>"html")); ?>
                </div>
                <<?=isMAIN()?"h1":"div";?> class="h-title">
                    <? $APPLICATION->IncludeFile("inc/header_title.php", Array(), Array("MODE"=>"html")); ?></<?=isMAIN()?"h1":"div";?>>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main",
					Array(
						"ROOT_MENU_TYPE" => "main",
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "",
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
            <div class="h-line"></div>
			<? if (isMAIN()) { ?>
            <hgroup>
                <div class="h1"><? $APPLICATION->IncludeFile("inc/index_h1.php", Array(), Array("MODE"=>"html")); ?></div>
                <div class="h2"><? $APPLICATION->IncludeFile("inc/index_h2.php", Array(), Array("MODE"=>"html")); ?></div>
            </hgroup>
			<? } ?>
        </div>
    </header>
	
	<? if (isMAIN()) { ?>
    <div class="index-slider-panel">
    	<div class="wrap">
        	<div class="isp-block">
            	<div class="isp-block-wrap">
            	<ul class="carousel jcarousel-skin-simple">
					<?
					CModule::IncludeModule("iblock");
					$q = CIBlockElement::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>2, "ACTIVE"=>"Y"), false, Array("nTopCount"=>9), Array("ID", "NAME", "DETAIL_PAGE_URL", "PREVIEW_TEXT", "PROPERTY_ADRESS", "PREVIEW_PICTURE"));
					while ($a = $q->GetNext()) {
					?>
                    <li>
                    	<a href="<?=$a["DETAIL_PAGE_URL"]?>">
                        	<span class="jc-img"><img src="<?=rIMG($a["PREVIEW_PICTURE"], 5, 300, 176)?>" width="300" height="176" alt=""></span>
                        	<span class="jc-title"><?=$a["NAME"]?></span>
							<span class="jc-subtitle"><?=$a["PROPERTY_ADRESS_VALUE"]?></span>
							<span class="jc-text"><?=$a["PREVIEW_TEXT"]?></span>
                        </a>
                    </li>
					<? } ?>
                </ul>
                </div>
            </div>
        </div>
    </div>
	<? } ?>
	
	<? if (!isMAIN()) { ?>
	<section class="content-columns">
    	<div class="wrap clearfix">
            <aside class="sidebar">
            	<div class="sidebar-inside clearfix">
                	<nav class="sidebar-nav">
                        <ul class="clearfix">
						<?
						$pureURI = $_SERVER["REQUEST_URI"];
						if (substr_count($pureURI, "?")) {
							$pos = strpos($pureURI, "?");
							$pureURI = substr($pureURI, 0, $pos);
						}
						$arURI = explode("/", $pureURI);
						CModule::IncludeModule("iblock");
						$q = CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "DEPTH_LEVEL"=>1, "ACTIVE"=>"Y"), false);
						while ($a = $q->GetNext()) {
						?>
                            <li><a href="<?=$a["SECTION_PAGE_URL"]?>"><?=$a["NAME"]?></a>
								<?
								$qEl = CIBlockElement::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "SECTION_ID"=>$a["ID"], "ACTIVE"=>"Y"), false, false, Array("ID", "NAME", "DETAIL_PAGE_URL"));
								if ($qEl->SelectedRowsCount() > 0 && $a["CODE"] == $arURI[2]) {
								?>
                            	<ul>
									<? while ($aEl = $qEl->GetNext()) { ?>
                                    <li><a href="<?=$aEl["DETAIL_PAGE_URL"]?>"><?=$aEl["NAME"]?></a></li>
									<? } ?>
                                </ul>
								<? } ?>
                            </li>
						<? } ?>
                        </ul>
                    </nav>
                </div>
            </aside>
            <section class="content">
            	<div class="content-inside clearfix">
                    <div class="text clearfix"><!--<?=$_SERVER["REQUEST_URI"]?>-->
                    <? // заголовок H1 в разделе /tehnika/ отображается в шаблоне компонента
                       if (strpos($_SERVER['REQUEST_URI'], '/tehnika/') === false) { ?>
                            <h1><?=$APPLICATION->ShowTitle(false);?></h1>
                    <? } ?>
	<? } ?>