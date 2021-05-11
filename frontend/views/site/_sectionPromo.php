<?php

/* @var $promo array */

;?>

<section class="sectionPromo">
    <div class="wrapper">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Акции');?></h2>
        <a class="linkToAll jq_hidden" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все акции');?></span></a>
        <div class="txtCenter jq_hidden">
            <span class="spanArrow promoArrow prev icon-arrow-left"></span>
            <span class="spanArrow promoArrow next icon-arrow-right"></span>
        </div>
        <div id="promoSlider" class="itemsContainer">
            <?php foreach ($promo as $promoItem):;?>
                <div class="itemBlock jq_hidden">
                    <a class="blockContent" href="#">
                        <div class="bgImage">
                            <img src="<?= $promoItem['image'];?>" alt="">
                        </div>
                        <div class="itemText">
                            <h3 class="itemTitle"><?= $promoItem['title'];?></h3>
                            <span class="read-more"><?= Yii::t('app', 'подробнее');?></span>
                        </div>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>