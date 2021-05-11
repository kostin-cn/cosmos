<?php

use common\widgets\MultiLang\MultiLang;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $menuItems array */
/* @var $menuItemsAbout array */

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

?>

<div id="mainNav">
    <div id="menu" class="wrapper">

        <a class="logo txtCenter" href="<?= Url::to(['site/index']); ?>">
            <img class="imgLogo" src="/files/svg/logo.svg" alt="">
            <img class="logo-fill" src="/files/svg/logo-fill.svg" alt="">
            <p><strong>hotel group</strong></p>
        </a>

      <?php if(Yii::$app->devicedetect->isMobile()) {?>
        <div class="mainNavMobileSpacer"></div>
        <div class="btnCircled reserve"><img class="imgIcon" src="/files/svg/Calend.svg" alt=""></div>
      <?php } else {?>
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
        <button class="reserve btn gray"><?= Yii::t('app', 'Забронировать');?></button>
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
