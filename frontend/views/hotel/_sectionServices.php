<?php

/* @var $hotel array */

;?>

<section id="services" class="sectionServices">
    <div class="wrapper">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Услуги');?></h2>
        <div class="catArrContainer jq_hidden colorGold">
            <span class="spanArrow catArrow prev icon-arrow-long-left"></span>
            <span class="spanArrow catArrow next icon-arrow-long-right"></span>
        </div>
    </div>

    <div class="sliderCatContainer">
        <div id="servicesCategories" class="advantCategories jq_hidden">
            <?php $i = 0;?>
            <?php foreach ($hotel['services'] as $key=>$advantage):;?>
                <span class="slide catLinkSvc <?= $i == 0 ? 'active' : '';?>" data-id="#block-<?= $i;?>"><?= $key;?></span>
                <?php
                $i++;
            endforeach;?>
        </div>
    </div>
    <div class="wrapper">
        <div class="itemsContainer">
            <?php $i = 0;?>
            <?php foreach ($hotel['services'] as $service):;?>
                <div id="block-<?= $i;?>" class="itemBlock <?= $i == 0 ? '' : 'hidden';?>">
                    <div class="imageBlock">
                        <div class="itemSlider">
                            <?php foreach ($service['images'] as $image):;?>
                                <div class="slide">
                                    <div class="bgImage">
                                        <img src="<?= $image;?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="text descBlock">
                        <h3><?= $service['title'];?></h3>
                        <p><?= $service['desc'];?></p>
                        <a class="btn white" href="#"><?= Yii::t('app', 'Читать подробнее');?></a>
                    </div>
                </div>
                <?php
                $i++;
            endforeach;?>
        </div>
    </div>
</section>
