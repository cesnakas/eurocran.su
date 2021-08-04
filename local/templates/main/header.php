<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?php
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    $asset = Asset::getInstance();
    // meta
    $asset->addString('<meta http-equiv="X-UA-Compatible" content="IE = edge">');
    $asset->addString('<meta content="notranslate" name="google">');
    $asset->addString('<meta name="viewport" content="width=device-width,initial-scale=1">');
    // css
    $asset->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
    // js
    $asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/js/slick.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/js/magnific-popup.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.animateNumber.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/js/main.min.js');
    $asset->addString('<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqn_--LrDNTF6w9Dz5WOLUsyLVIZ6FqOc&amp;callback=initMap" async defer></script>');
    $asset->addJs(SITE_TEMPLATE_PATH.'/js/google-map.js');
?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<body>

    <?php echo'<div id="panel">'; $APPLICATION->ShowPanel(); echo'</div>';?>

    <div class="wrapper">

        <!--START HEADER-->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="header__general">
                        <div class="header__logo">
                            <a href="<?=SITE_DIR?>"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/logo.svg"/></a>
                        </div>
                        <div class="header__slogan">Аренда спецтехники LIEBHERR c 2000 года</div>
                    </div>
                    <div class="header__info">
                        <div class="header__schedule"> <i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/img/content/clock.svg"/></i><span> 10:00-17:00</span></div>
                        <div class="header__location"> <i class="icon"> <img src="<?=SITE_TEMPLATE_PATH?>/img/content/location.svg"/></i><span> г. Москва, <br> ул. Куликовская, 12</span></div>
                    </div>
                    <div class="header__btn"><a class="btn btn--empty-inverce btn--sm" href="">Свяжитесь со мной</a></div>
                    <div class="header__contacts"><i class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/phone.svg"/></i><span><a href="">+7 (499)929-96-66 </a><a href="">+7 (985)364-55-18</a><a href="">+7 (985)226-20-30</a></span></div>
                </div>
            </div>
        </header>
        <!--END HEADER-->

        <!--START NAV-->
        <div class="nav">
            <div class="container">
                <div class="row">
                    <div class="menu-btn"><span></span><span></span><span></span></div>
                    <div class="nav__menu">
                        <div class="menu-close"><span></span><span></span></div>
                        <ul>
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
                            <!--
                            <li><a href="<?/*=SITE_DIR*/?>">Каталог</a></li>
                            <li><a href="<?/*=SITE_DIR*/?>">Услуги</a></li>
                            <li><a href="<?/*=SITE_DIR*/?>">О компании</a></li>
                            <li><a href="<?/*=SITE_DIR*/?>">Объекты</a></li>
                            <li><a href="<?/*=SITE_DIR*/?>">Цены</a></li>
                            <li><a href="<?/*=SITE_DIR*/?>">Блог</a></li>
                            <li><a href="<?/*=SITE_DIR*/?>">Контакты</a></li>
                            -->
                        </ul>
                    </div>
                    <!--<div class="nav__search">
                        <div class="search">
                            <form action="search">
                                <div class="search__box">
                                    <input type="text" placeholder="Поиск">
                                    <input type="submit" value="">
                                </div>
                            </form>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!--END NAV-->
