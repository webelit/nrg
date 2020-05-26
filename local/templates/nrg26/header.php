<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <? $APPLICATION->ShowHead() ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <?php

    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/check.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick-theme.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.min.css');
    ?>
    <script src="/local/templates/nrg26/js/jquery.min.js"></script>
    <script src="/local/templates/nrg26/js/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<div id = "panel"><?php $APPLICATION->ShowPanel();?></div>
<body>
    <main class="content">
        <div class="flex">
            <div class="left_nav" id="flex_nav">
                <div class="logo flex_1">
                    <p class="bars" id="bars"><img src="/local/templates/nrg26/images/bars.svg" alt="bars"></p>
                    <p class="close" id="close"><img src="/local/templates/nrg26/images/close.svg" alt="bars"></p>
                    <a href="/"><img src="/local/templates/nrg26/images/logo.svg" alt="nrg26" class="logo_img"></a>
                    <a href="/" class="mobile_phone"><img src="/local/templates/nrg26/images/mobile_phone.svg" alt="bars"></a>
                </div>
                <div class="phone" id="phone">
                    <div class="phone_p">
                        <img src="/local/templates/nrg26/images/phone.svg" alt="������� ��������">
                        <p class="phone_text">8 (8652) 68-07-90</p>
                    </div>
                    <div class="phone_p">
                        <img src="/local/templates/nrg26/images/mail.svg" alt="email ��������">
                        <p>contact@nrg26.ru</p>
                    </div>
                </div>
                <div class="left_menu" id="menu">
                <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_nrg", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_nrg",
		"MENU_THEME" => "site"
	),
	false
); ?>
                </div>
                <div class="soc" id="soc">
                    <a href=""><img src="/local/templates/nrg26/images/telegramm.svg" alt="telegramm"></a>
                    <a href=""><img src="/local/templates/nrg26/images/whatsapp.svg" alt="whatsapp"></a>
                    <a href=""><img src="/local/templates/nrg26/images/insta.svg" alt="instagram"></a>
                </div>
            </div>
            <div class="cont_right">