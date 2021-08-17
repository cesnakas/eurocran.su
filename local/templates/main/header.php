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
    $asset->addCss(SITE_TEMPLATE_PATH.'/dist/css/style.css');
    // js
    $asset->addJs(SITE_TEMPLATE_PATH.'/dist/js/jquery.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/dist/js/slick.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/dist/js/magnific-popup.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/dist/js/jquery.animateNumber.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/dist/js/main.min.js');
    $asset->addString('<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqn_--LrDNTF6w9Dz5WOLUsyLVIZ6FqOc&amp;callback=initMap" async defer></script>');
    $asset->addJs(SITE_TEMPLATE_PATH.'/dist/js/google-map.js');
?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(46722495, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/46722495" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-99344548-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-99344548-1');
    </script>

</head>
<body <?=(CSite::InDir(SITE_DIR.'~index.php')) ? '' : 'class="page"';?>>

    <?php echo'<div id="panel">'; $APPLICATION->ShowPanel(); echo'</div>';?>

    <div class="wrapper">

        <!--START HEADER-->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="header__general">
                        <div class="header__logo">
                            <a href="<?=SITE_DIR?>"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/logo.svg"></a>
                        </div>
                        <div class="header__slogan">
							<?$APPLICATION->IncludeFile(
                                SITE_TEMPLATE_PATH.'/include/header_title.php',
                                [],
                                ['SHOW_BORDER' => true, 'MODE' => 'text']
                            );?>
                        </div>
                    </div>
                    <div class="header__info">
                        <div class="header__schedule">
                            <i class="icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12C24 18.617 18.617 24 12 24ZM12 1C5.935 1 1 5.935 1 12C1 18.065 5.935 23 12 23C18.065 23 23 18.065 23 12C23 5.935 18.065 1 12 1Z" fill="#2D2D2D"/><path d="M17.5 18C17.372 18 17.244 17.951 17.146 17.854L11.646 12.354C11.553 12.26 11.5 12.133 11.5 12V4.5C11.5 4.224 11.724 4 12 4C12.276 4 12.5 4.224 12.5 4.5V11.793L17.854 17.147C18.049 17.342 18.049 17.659 17.854 17.854C17.756 17.951 17.628 18 17.5 18Z" fill="#2D2D2D"/></svg></i>
                            <span>
								<?$APPLICATION->IncludeFile(
									SITE_TEMPLATE_PATH.'/include/header_time.php',
									[],
									['SHOW_BORDER' => true, 'MODE' => 'text']
								);?>
                            </span>
                        </div>
                        <div class="header__location">
                            <i class="icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.0782 5.25958C10.3868 5.25958 9.01013 6.63628 9.01013 8.32768C9.01013 10.0191 10.3868 11.3958 12.0782 11.3958C13.7696 11.3958 15.1463 10.0191 15.1463 8.32768C15.1463 6.63628 13.7696 5.25958 12.0782 5.25958ZM12.0782 10.5192C10.8698 10.5192 9.88673 9.53608 9.88673 8.32768C9.88673 7.11929 10.8698 6.13618 12.0782 6.13618C13.2866 6.13618 14.2697 7.11929 14.2697 8.32768C14.2697 9.53608 13.2866 10.5192 12.0782 10.5192Z" fill="#2D2D2D"/><path d="M17.944 2.46193C16.3565 0.874409 14.2457 0 12.0007 0C9.75528 0 7.64487 0.874409 6.05734 2.46193C3.11942 5.39942 2.75431 10.9264 5.26665 14.275L12.0007 24L18.7247 14.2886C21.2471 10.9264 20.882 5.39942 17.944 2.46193ZM18.0137 13.7762L12.0007 22.4598L5.97801 13.7626C3.69929 10.7243 4.02582 5.73297 6.67754 3.08169C8.09938 1.65984 9.98977 0.8766 12.0007 0.8766C14.0116 0.8766 15.902 1.65984 17.3243 3.08169C19.976 5.73297 20.3025 10.7243 18.0137 13.7762Z" fill="#2D2D2D"/></svg></i>
                            <span>
                                <?$APPLICATION->IncludeFile(
									SITE_TEMPLATE_PATH.'/include/header_address.php',
									[],
									['SHOW_BORDER' => true, 'MODE' => 'text']
								);?>
                            </span>
                        </div>
                    </div>
                    <div class="header__btn">

                        <a class="btn btn--empty-inverce btn--sm" href="">Свяжитесь со мной</a>

                    </div>
                    <div class="header__contacts">
                        <i class="icon"><img src="<?=SITE_TEMPLATE_PATH;?>/img/content/phone.svg"></i>
                        <span>
                            <a href="tel:+74999299666">+7 (499)929-96-66</a>
                            <a href="tel:+79853645518">+7 (985)364-55-18</a>
                            <a href="tel:+79852262030">+7 (985)226-20-30</a>
                        </span>
                    </div>
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
									"ROOT_MENU_TYPE" => "top",
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
                        </ul>
                    </div>
                    <div class="nav__search">
                        <div class="search">
                            <form action="<?=SITE_DIR?>search/">
                                <div class="search__box">
                                    <input type="text" name="q" value="<?=$_GET['q']?>" size="40" placeholder="Поиск">
                                    <input type="submit" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END NAV-->

        <?
        if(!CSite::InDir(SITE_DIR.'~index.php')):
        ?>
        <!--START BREADCRUMB-->
        <div class="breadcrumb">
            <div class="container">
				<?php
				$APPLICATION->IncludeComponent(
					'bitrix:breadcrumb',
					'.default',
					Array(
						'START_FROM' => '0',
						'PATH' => '',
						'SITE_ID' => 's1'
					)
				);?>
            </div>
        </div>
        <!--END BREADCRUMBS-->
        <? endif; ?>