<?php

/* @var $hotel array */

;?>

<section class="sectionTravel jq_hidden">
    <div class="bgImage bgFix" style="background-image: url('<?= $hotel['travel']['image'];?>')">

    </div>
    <div class="sectionText">
        <h2><?= $hotel['travel']['title'];?></h2>
        <p><?= $hotel['travel']['desc'];?></p>
        <a href="#">
            <span><?= Yii::t('app', 'Подробнее');?></span>
            <span class="spanIco icon-arrow-long-right"></span>
        </a>
    </div>
</section>