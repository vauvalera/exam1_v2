<?
IncludeTemplateLangFile(__FILE__);
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/reset.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/owl.carousel.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/scripts.js');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon"  href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
    <link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
    <?$APPLICATION->ShowPanel()?>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <?$Date_now= date("H:i:s")?>
                    <?$Date_nac=new DateTime($date."9:00")?>
                    <?$Date_kon=new DateTime($date."18:00")?>
                    <?if(($Date_now>$Date_nac) & ($Date_now<$Date_kon)):?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <?else:?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <?endif;?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                  <?$APPLICATION->IncludeComponent(
						"bitrix:system.auth.form", 
						"demo", 
						array(
							"COMPONENT_TEMPLATE" => "demo",
							"REGISTER_URL" => "/login/?register=yes",
							"FORGOT_PASSWORD_URL" => "/login/?forgot_password=yes",
							"PROFILE_URL" => " /login/user.php",
							"SHOW_ERRORS" => "Y"
						),
						false
					);?>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"hor_mult", 
	array(
		"COMPONENT_TEMPLATE" => "hor_mult",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
        <!-- /nav -->
        <?if($APPLICATION->GetCurPage(false)!=SITE_DIR):?>
        <?$APPLICATION->IncludeFile("inner-br.php")?>
        <?endif;?>
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <?if($APPLICATION->GetCurPage(false)==SITE_DIR):?>
                        <?$APPLICATION->IncludeFile("header-main.php")?>
                        <?else:?>
                        <h1><?$APPLICATION->ShowTitle(false);?></h1>
                        <?endif;?>