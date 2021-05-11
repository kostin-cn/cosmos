<?php

use common\widgets\MultiLang\MultiLang;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $hotel array */

$socials = [
    [
        'icon' => 'fb',
        'link' => 'https://www.facebook.com/cosmoshotelgroup/',
    ],
    [
        'icon' => 'in',
        'link' => 'https://www.instagram.com/cosmoshotelgroup/',
    ],
];

$navItems = array();
if ($hotel['apartments']) $navItems[] = ['label' => Yii::t('app', 'Номера'), 'url' => '#apartments'];
if ($hotel['services']) $navItems[] = ['label' => Yii::t('app', 'Услуги'), 'url' => '#services'];
if ($hotel['adventures']) $navItems[] = ['label' => Yii::t('app', 'Отдых'), 'url' => '#adventures'];
if ($hotel['promo']) $navItems[] = ['label' => Yii::t('app', 'Акции'), 'url' => '#promo'];
if ($hotel['restaurants']) $navItems[] = ['label' => Yii::t('app', 'Рестораны'), 'url' => '#restaurants'];
if ($hotel['events']) $navItems[] = ['label' => Yii::t('app', 'События'), 'url' => '#events'];
if ($hotel['recreations']) $navItems[] = ['label' => Yii::t('app', 'Мероприятия'), 'url' => '#recreations'];
$navItems[] = ['label' => Yii::t('app', 'Контакты'), 'url' => '#contacts'];

?>

<div id="mobMenu">
    <div class="blkTop">

        <div class="wrapper">

            <a class="logo txtCenter" href="<?= Url::to(['site/index']); ?>">
                <img class="imgLogo" src="<?= $hotel['brand']['logo_fill']?:"/files/svg/logo-fill.svg";?>" alt="">
                <p><strong><?= $hotel['brand']['title'];?></strong></p>
                <p><span><?= $hotel['title'];?> <?= Yii::t('app', 'hotel');?></span></p>
            </a>

            <div class="topRightBlk">
                <div class="menuRoundBlock">
                    <a class="userBtn" href="#">
                        <span class=" spanIco icon-user"></span>
                        <span><?= Yii::t('app', 'Войти');?></span>
                    </a>
                </div>
                <div class="menuRoundBlock closeBtnBlk">
                    <div id="brgr" class="active">
                        <span class="top"></span>
                        <span class="bottom"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blkCntnt">
        <div class="cntntWrap">
            <?= Menu::widget([
                'items' => $navItems,
                'encodeLabels' => false,
            ]); ?>

            <div class="blkBottom">
                <p class="txtCenter">
                    <a href="/" class="homeLink">
                        <span class="spanIco icon-arrow-long-right"></span>
                        <span>Cosmos Hotel Group</span>
                    </a>
                </p>
                <?= MultiLang::widget(); ?>
                <div class="socialsContainer">
                    <?php foreach ($socials as $social):;?>
                        <a class="soc" href="<?= $social['link'];?>" target="_blank"><span class="icon-<?= $social['icon'];?>"></span></a>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

</div>