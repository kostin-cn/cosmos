<?php

/* @var $hotel array */
/* @var $brand_list array */
/* @var $menuItems array */
/* @var $menuItemsAbout array */
/* @var $navItems array */

$menuItems = [
    ['label' => Yii::t('app', 'Отели<span class="spanIco icon-chevrone-down"></span>'), 'options' => ['id' => 'dropdownMenu', 'class' => 'nonAfter']],
    ['label' => Yii::t('app', 'Акции'), 'url' => '#'],
    ['label' => Yii::t('app', 'Путешествия'), 'url' => '#'],
    ['label' => Yii::t('app', 'Life'), 'url' => '#'],
    ['label' => Yii::t('app', 'Мероприятия'), 'url' => '#'],
];
$menuItemsAbout = [
    ['label' => Yii::t('app', 'Управление'), 'url' => '#'],
    ['label' => Yii::t('app', 'О нас'), 'url' => '#'],
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

use common\widgets\MultiLang\MultiLang;
use yii\helpers\Url;
use yii\widgets\Menu; ?>

<div class="hotelNav">

    <div class="navTop">
        <div class="wrapper">
            <div class="leftNav">

                <div class="dropdownNav">
                    <span class="current">Cosmos Hotel Group</span><span class="spanIco icon-chevrone-down"></span>

                    <div class="topMenuContainer">
                        <?= Menu::widget([
                            'items' => $menuItems,
                            'options' => ['id' => 'mainNavMenuLeft', 'class' => 'navMenu'],
                            'encodeLabels' => false,
                        ]); ?>
                        <span class="divider"></span>
                        <?= Menu::widget([
                            'items' => $menuItemsAbout,
                            'options' => ['id' => 'mainNavMenuRight', 'class' => 'navMenu'],
                            'encodeLabels' => false,
                        ]); ?>
                    </div>

                </div>

                <div class="divider"></div>

                <div class="dropdownNav">
                    <span class="current"><?= $hotel['brand']['full_title'];?></span><span class="spanIco icon-chevrone-down"></span>


                    <div class="topMenuContainer">
                        <ul class="navMenu">
                            <?php foreach ($brand_list as $item):;?>
                                <li class="<?= $item['slug'] == $hotel['slug'] ? 'active' : '';?>">
                                    <a href="#"><?= $item['title'];?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>

                <div class="divider"></div>

                <span><?= $hotel['title'];?></span>
            </div>

            <div class="rightNav">
                <div class="socialsContainer">
                    <?php foreach ($hotel['socials'] as $social):;?>
                        <a class="soc" href="<?= $social['link'];?>" target="_blank"><span class="icon-<?= $social['icon'];?>"></span></a>
                    <?php endforeach;?>
                </div>
                <?= MultiLang::widget(); ?>
            </div>
        </div>
    </div>

    <div id="menu" class="wrapper">

        <a class="logo txtCenter" href="<?= Url::to(['site/index']); ?>">
            <img class="imgLogo" src="<?= $hotel['brand']['logo'];?>" alt="">
            <img class="logo-fill" src="<?= $hotel['brand']['logo_fill']?:"/files/svg/logo-fill.svg";?>" alt="">
            <?php if($hotel['brand']['title']) {?>
              <p><strong><?= $hotel['brand']['title'];?></strong></p>
            <?php }?>
            <p><span><?= $hotel['title'];?> <?= Yii::t('app', 'hotel');?></span></p>
        </a>
      <?php if(Yii::$app->devicedetect->isMobile()) {?>
        <div class="mainNavMobileSpacer"></div>
        <div class="btnCircled reserve"><img class="imgIcon" src="/files/svg/Calend.svg" alt=""></div>
      <?php } else {?>
        <div class="topMenuContainer">
          <?= Menu::widget([
            'items' => $navItems,
            'options' => ['class' => 'navMenu'],
            'encodeLabels' => false,
          ]); ?>
        </div>
        <button class="reserve btn gold"><?= Yii::t('app', 'Забронировать');?></button>
      <?php } ?>


        <div class="menuRightBlock">
            <?= MultiLang::widget(); ?>
            <div class="menuRoundBlock">
                <div id="burger">
                    <span class="top"></span>
                    <span class="bottom"></span>
                </div>
                <a class="userBtn" href="#">
                    <span class="icon-user"></span>
                </a>
            </div>
        </div>

    </div>
</div>
