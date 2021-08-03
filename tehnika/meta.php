<?
// файл подключается в:
// 1. /bitrix/templates/eurokran/components/bitrix/news/tech/bitrix/news.list/.default/template.php
// 2. /tehnika/index.php

if ($_SERVER['REQUEST_URI'] == '/tehnika/' ||
    strpos($_SERVER['REQUEST_URI'], '/tehnika/?PAGEN_1=') !== false) {

    $seo_h1 = 'Аренда спецтехники';

} elseif ($_SERVER['REQUEST_URI'] == '/tehnika/arenda-nizkoramnykh-tralov/' ||
    strpos($_SERVER['REQUEST_URI'], '/tehnika/arenda-nizkoramnykh-tralov/?PAGEN_1=') !== false) {

    $seo_h1 = 'Аренда низкорамного трала';

} elseif($_SERVER['REQUEST_URI'] == '/tehnika/apenda-mobilnykh-avtokpanov-liebherr-ltm/' ||
    strpos($_SERVER['REQUEST_URI'], '/tehnika/apenda-mobilnykh-avtokpanov-liebherr-ltm/?PAGEN_1=') !== false) {

    $seo_h1 = 'Аренда мобильных автокранов Liebherr LTM';

} elseif($_SERVER['REQUEST_URI'] == '/tehnika/organizatsiya-negabaritnykh-perevozok/' ||
    strpos($_SERVER['REQUEST_URI'], '/tehnika/organizatsiya-negabaritnykh-perevozok/?PAGEN_1=') !== false) {

    $seo_h1 = 'Организация негабаритных перевозок';

} elseif($_SERVER['REQUEST_URI'] == '/tehnika/perevozka-negabaritnogo-gruza/' ||
    strpos($_SERVER['REQUEST_URI'], '/tehnika/perevozka-negabaritnogo-gruza/?PAGEN_1=') !== false) {

    $seo_h1 = 'Перевозка негабаритного груза';

} elseif($_SERVER['REQUEST_URI'] == '/tehnika/perevozka-negabaritnogo-transporta/' ||
    strpos($_SERVER['REQUEST_URI'], '/tehnika/perevozka-negabaritnogo-transporta/?PAGEN_1=') !== false) {

    $seo_h1 = 'Перевозка негабаритного транспорта';

} elseif($_SERVER['REQUEST_URI'] == '/tehnika/perevozki-tralom/' ||
    strpos($_SERVER['REQUEST_URI'], '/tehnika/perevozki-tralom/?PAGEN_1=') !== false) {

    $seo_h1 = 'Перевозка тралом';

} else {
    $APPLICATION->SetPageProperty("title", "Аренда строительной техники в Москве доступная стоимость, минимальные сроки, высокое качество предоставляемой техники | eurocran.su");
    $APPLICATION->SetPageProperty("description", "ООО ЕвроКран: Аренда спецтехники: ✔Автокраны ✔Низкорамные тралы ✔Модульные платформы");
}

?>