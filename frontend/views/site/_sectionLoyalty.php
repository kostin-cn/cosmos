<?php

/* @var $loyalty array */

;?>

<section class="sectionLoyalty jq_hidden">
    <div class="bgImage bgFix" style="background-image: url('<?= $loyalty['image'];?>')">

    </div>
    <div class="wrapper w820">
        <div class="loyaltyTitle">
            <h2><?= $loyalty['title'];?></h2>
            <a href="#"><span class="spanIco icon-arrow-long-right"></span><?= Yii::t('app', 'подробнее');?></a>
        </div>
        <div class="loyaltyContainer">
            <div class="loyaltyBlock">
                <img src="/files/front/percent.svg" alt="">
            </div>
            <div class="loyaltyBlock">
                <?= $loyalty['html'];?>
                <div class="loyaltyReg">
                    <a href="#"><?= Yii::t('app', 'Зарегистрироваться');?><span class="spanIco icon-arrow-long-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>