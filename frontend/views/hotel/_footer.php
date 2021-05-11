<?php
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $socials array */
/* @var $menuFooterLeft array */
/* @var $menuFooterMiddle array */
/* @var $menuFooterRight array */

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

$menuFooterLeft = [
    ['label' => Yii::t('app', 'Отели'), 'url' => '#'],
    ['label' => Yii::t('app', 'Акции'), 'url' => '#'],
    ['label' => Yii::t('app', 'Программа лояльности'), 'url' => '#'],
    ['label' => Yii::t('app', 'Мероприятия'), 'url' => '#'],
    ['label' => Yii::t('app', 'Life'), 'url' => '#'],
    ['label' => Yii::t('app', 'Путешествия'), 'url' => '#'],
    ['label' => Yii::t('app', 'Еда'), 'url' => '#'],
    ['label' => Yii::t('app', 'Служба поддержки'), 'url' => '#'],
];

$menuFooterMiddle = [
    ['label' => Yii::t('app', 'Позиционирование'), 'url' => '#'],
    ['label' => Yii::t('app', 'Команда'), 'url' => '#'],
    ['label' => Yii::t('app', 'Миссия'), 'url' => '#'],
    ['label' => Yii::t('app', 'Цели'), 'url' => '#'],
    ['label' => Yii::t('app', 'История'), 'url' => '#'],
    ['label' => Yii::t('app', 'СМИ о нас'), 'url' => '#'],
    ['label' => Yii::t('app', 'Пресс-релизы'), 'url' => '#'],
    ['label' => Yii::t('app', 'Брендбук'), 'url' => '#'],
];

$menuFooterRight = [
    ['label' => Yii::t('app', 'Услуги'), 'url' => '#'],
    ['label' => Yii::t('app', 'Выгода для партнеров'), 'url' => '#'],
    ['label' => Yii::t('app', 'Финансовые показатели/годовой отчет'), 'url' => '#'],
    ['label' => Yii::t('app', 'Как стать партнером'), 'url' => '#'],
    ['label' => Yii::t('app', 'Контакты'), 'url' => '#'],
    ['label' => Yii::t('app', 'Подать заявку'), 'url' => '#'],
];

?>

<div id="footer">

    <div class="wrapper nonWrap">
        <div class="left">
            <div class="footer-accordeon active">
                <span class="footerLink footer-accordeonHead"><?= Yii::t('app', 'Cosmos');?></span>
                <?= Menu::widget([
                    'items' => $menuFooterLeft,
                    'options' => ['class' => 'navMenu footer-accordeonBody'],
                ]); ?>
            </div>
        </div>

        <div class="middle">
            <div class="footer-accordeon">
                <span class="footerLink footer-accordeonHead"><?= Yii::t('app', 'Жизнь компании');?></span>
                <?= Menu::widget([
                    'items' => $menuFooterMiddle,
                    'options' => ['class' => 'navMenu footer-accordeonBody'],
                ]); ?>
            </div>
        </div>

        <div class="right">
            <div class="footer-accordeon">
                <span class="footerLink footer-accordeonHead"><?= Yii::t('app', 'Партнерам');?></span>
                <?= Menu::widget([
                    'items' => $menuFooterRight,
                    'options' => ['class' => 'navMenu footer-accordeonBody'],
                ]); ?>
            </div>
            <div class="footer-accordeon">
                <a class="footerLink footer-accordeonHead" href="#"><?= Yii::t('app', 'Карьера');?></a>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="shopBlock">
            <a class="storeLink" href="https://www.apple.com/ua/app-store/" target="_blank">
                <img src="/files/front/appstore.svg" alt="">
            </a>
            <a class="storeLink" href="https://play.google.com/store?hl=ru&gl=US" target="_blank">
                <img src="/files/front/googleplay.svg" alt="">
            </a>
        </div>

        <div class="socialsContainer">
            <?php foreach ($socials as $social):;?>
                <a class="soc" href="<?= $social['link'];?>" target="_blank"><span class="icon-<?= $social['icon'];?>"></span></a>
            <?php endforeach;?>
        </div>
    </div>
    <div class="wrapper">
        <div class="left copyrightBlock">
            <p><small>&copy; <?= date('Y'); ?> <?= Yii::t('app', 'ООО "Космос ОГ"'); ?></small></p>
            <p><a href="#"><small><?= Yii::t('app', 'Пользовательское соглашение');?></small></a></p>
        </div>

        <div class="middle">
            <p>Проспект Мира, д. 150, Москва, Россия, 129366</p>
        </div>

        <div class="right txtRight">
            <a href="tel:+74957302012">+7 (495) 730-20-12 </a>
            <p><small>9:00 - 20:00, пн - вс</small></p>
            <a href="mailto:support@cosmosgroup.ru">support@cosmosgroup.ru</a>
        </div>
    </div>
</div>
