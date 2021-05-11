<?php

/* @var $hotel array */

;?>

<section id="adventures" class="sectionAdventures">
    <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Отдых');?></h2>
    <div class="sliderContainer jq_hidden">

        <div class="wide-slide-container">

            <?php foreach ($hotel['adventures'] as $key=>$adventure):;?>
                <div class="b-slide <?= $key == 0 ? 'active' : '' ;?> <?= $key == 1 ? 'next' : '' ;?>" data-index="<?= $key;?>">
                    <div class="bgImage">
                        <img src="<?= $adventure['image'];?>" alt="">
                    </div>
                    <div class="wrapper">
                        <div class="text">
                            <h2><?= $adventure['title'];?></h2>
                            <p><?= $adventure['desc'];?></p>
                            <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                        </div>

                    </div>
                </div>

            <?php endforeach;?>

        </div>


        <div class="adv-slider-container">
            <div id="adventureSlider">
                <?php $length = count($hotel['adventures']);?>
                <?php foreach ($hotel['adventures'] as $key=>$adventure):;?>
                    <div class="slide" data-key="<?= $key;?>">
                        <div class="slideContent">
                            <div class="bgImage">
                                <img src="<?= $adventure['image'];?>" alt="">
                            </div>
                            <h3><?= $adventure['title'];?></h3>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="adventuresSlider-controls">
                <div class="adventuresArrow prev"><span class="icon-arrow icon-arrow-top"></span></div>
                <div class="roundBlock">
                    <span id="currSlide">1</span>
                    <span> / </span>
                    <span><?= $length;?></span>
                </div>
                <div class="adventuresArrow next"><span class="icon-arrow icon-arrow-top rotate180"></span></div>
            </div>

        </div>

        <div class="mobile-slider-container">
            <div class="mobAdvSlider-controls txtCenter">
                <div class="advArrow prev"><span class="icon-arrow icon-arrow-left"></span></div>
                <div class="advArrow next"><span class="icon-arrow icon-arrow-right"></span></div>
            </div>
            <div id="mobAdvSlider">
                <?php $length = count($hotel['adventures']);?>
                <?php foreach ($hotel['adventures'] as $key=>$adventure):;?>
                    <div class="slide" data-key="<?= $key;?>">
                        <a href="#" class="slideContent">
                            <div class="bgImage">
                                <img src="<?= $adventure['image'];?>" alt="">
                            </div>
                            <h3><?= $adventure['title'];?></h3>

                        </a>
                    </div>
                <?php endforeach;?>
            </div>

        </div>

    </div>
</section>