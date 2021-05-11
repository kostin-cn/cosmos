<?php

/* @var $hotel array */

;?>

<section id="restaurants" class="sectionRestaurant jq_hidden">
    <h2 class="sectionTitle"><?= Yii::t('app', 'Рестораны');?></h2>
    <a class="linkToAll" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все рестораны');?></span></a>
    <div class="sliderContainer">
        <div id="restaurantSlider">
            <?php foreach ($hotel['restaurants'] as $restaurant):;?>
                <div class="slider">
                    <div class="bgImage">
                        <img src="<?= $restaurant['image'];?>" alt="">
                    </div>
                    <div class="slideText txtCenter">
                        <h3><?= $restaurant['title'];?></h3>
                        <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                        <div class="itemsContainer">
                            <div class="itemBlock">
                                <span class="ico icon-fork"></span>
                                <p><?= $restaurant['menu_text'];?></p>
                            </div>
                            <div class="itemBlock">
                                <span class="ico icon-clock"></span>
                                <p><?= $restaurant['time'];?></p>
                            </div>
                        </div>
                        <div class="itemsContainer">
                            <div class="itemBlock">

                                <a class="btn white" href="#"><?= Yii::t('app', 'Посмотреть меню');?></a>
                            </div>
                            <div class="itemBlock">

                                <a class="btn white" href="#"><?= Yii::t('app', 'Забронировать стол');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="restaurantArrow prev"><span class="icon-arrow icon-arrow-long-left"></span></div>
        <div class="restaurantArrow next"><span class="icon-arrow icon-arrow-long-right"></span></div>
    </div>
</section>