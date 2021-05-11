<?php

/* @var $hotel array */

;?>

<section class="sectionDesc txtCenter">
    <div class="breadCrumbs jq_hidden">
        <a href="/">Cosmos Hotel Group</a>
        <span> / </span>
        <a href="#"><?= $hotel['brand']['full_title'];?></a>
        <span> / </span>
        <strong><?= $hotel['title'];?></strong>
    </div>

    <h2 class="sectionTitle jq_hidden"><?= $hotel['sub_title'];?></h2>
    <div class="wrapper w820 jq_hidden">
        <p><?= $hotel['description'];?></p>
    </div>

    <div class="txtCenter colorGold descFlex jq_hidden">
        <a href="#"><?= Yii::t('app', 'Посмотреть видео');?><span class="spanIco icon-play"></span></a>
        <span class="divider"></span>
        <a href="#"><?= Yii::t('app', 'Фотогалерея');?><span class="spanIco icon-pic"></span></a>
    </div>
</section>