<?php

use common\widgets\MultiLang\MultiLang;
use yii\helpers\Url;
use yii\widgets\Menu;

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

$brandsItem = [
    ['label' => Yii::t('app', '<div class="blockB">Cosmos Collection<span class="spanIco icon-chevrone-down"></span></div>'),
        'options' => ['class' => 'mobSubDropMenu'],
        'items' => [
            ['label' => Yii::t('app', 'Izumrudny Les'), 'url' => Url::to(['hotel/index', 'slug' => 'izumrudny-les'])],
            ['label' => Yii::t('app', 'Altay Resort'), 'url' => '#'],
            ['label' => Yii::t('app', 'Savoy Westend Hotel'), 'url' => '#'],
            ['label' => Yii::t('app', 'Principe Forte Dei Marmi'), 'url' => '#'],
        ]],
    ['label' => Yii::t('app', '<div class="blockB">Cosmos Hotels<span class="spanIco icon-chevrone-down"></span></div>'),
        'options' => ['class' => 'mobSubDropMenu'],
        'items' => [
            ['label' => Yii::t('app', 'Izumrudny Les'), 'url' => Url::to(['hotel/index', 'slug' => 'izumrudny-les'])],
            ['label' => Yii::t('app', 'Altay Resort'), 'url' => '#'],
            ['label' => Yii::t('app', 'Savoy Westend Hotel'), 'url' => '#'],
            ['label' => Yii::t('app', 'Principe Forte Dei Marmi'), 'url' => '#'],
        ]],
    ['label' => Yii::t('app', '<div class="blockB">Cosmos Smart<span class="spanIco icon-chevrone-down"></span></div>'),
        'options' => ['class' => 'mobSubDropMenu'],
        'items' => [
            ['label' => Yii::t('app', 'Holiday Inn Павелецкая'), 'url' => Url::to(['hotel/index', 'slug' => 'holiday-inn-pavletskaya'])],
            ['label' => Yii::t('app', 'Altay Resort'), 'url' => '#'],
            ['label' => Yii::t('app', 'Savoy Westend Hotel'), 'url' => '#'],
            ['label' => Yii::t('app', 'Principe Forte Dei Marmi'), 'url' => '#'],
        ]],
    ['label' => Yii::t('app', '<div class="blockB">Cosmos Stay<span class="spanIco icon-chevrone-down"></span></div>'),
        'options' => ['class' => 'mobSubDropMenu'],
        'items' => [
            ['label' => Yii::t('app', 'Izumrudny Les'), 'url' => Url::to(['hotel/index', 'slug' => 'izumrudny-les'])],
            ['label' => Yii::t('app', 'Altay Resort'), 'url' => '#'],
            ['label' => Yii::t('app', 'Savoy Westend Hotel'), 'url' => '#'],
            ['label' => Yii::t('app', 'Principe Forte Dei Marmi'), 'url' => '#'],
        ]],
];

$menuItems = [
//    ['label' => Yii::t('app', '<div class="blockA">Отели<span class="spanIco icon-chevrone-down"></span></div>'),
//        'options' => ['class' => 'mobDropMenu'],
//        'items' => $brandsItem],
    ['label' => Yii::t('app', 'Отели'), 'url' => '#'],
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

<div id="mobMenu">
    <div class="blkTop">

        <div class="wrapper">
            <a class="logo txtCenter" href="<?= Url::to(['site/index']); ?>">
                <img class="imgLogo" src="/files/svg/logo-fill.svg" alt="">
                <p><strong>hotel group</strong></p>
            </a>
            <div class="topRightBlk">
                <div class="menuRoundBlock">
                    <a class="userBtn" href="#">
                        <span class=" spanIco icon-user"></span>
                        <span><?= Yii::t('app', 'Войти'); ?></span>
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
            <div>
                <?= Menu::widget([
                    'items' => $menuItems,
                    'encodeLabels' => false,
                ]); ?>
                <?= Menu::widget([
                    'items' => $menuItemsAbout,
                    'encodeLabels' => false,
                ]); ?>
            </div>

            <div class="blkBottom">
                <?= MultiLang::widget(); ?>
                <div class="socialsContainer">
                    <?php foreach ($socials as $social):; ?>
                        <a class="soc" href="<?= $social['link']; ?>" target="_blank"><span
                                    class="icon-<?= $social['icon']; ?>"></span></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>