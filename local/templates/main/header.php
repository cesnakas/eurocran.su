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

