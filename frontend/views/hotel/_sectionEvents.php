<?php

/* @var $hotel array */

;?>

<section id="events" class="sectionEvents">
    <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'События');?></h2>
    <a class="linkToAll jq_hidden" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все события');?></span></a>
    <div class="txtCenter jq_hidden">
        <span class="spanArrow eventsArrow prev icon-arrow-left"></span>
        <span class="spanArrow eventsArrow next icon-arrow-right"></span>
    </div>
    <div id="eventsSlider" class="itemsContainer">
        <?php foreach ($hotel['events'] as $event):;?>
            <div class="itemBlock jq_hidden">
                <div class="image">
                    <img src="<?= $event['image'];?>" alt="">
                </div>
                <div class="itemText">
                    <h3><?= $event['title'];?></h3>
                    <!--                    <p>--><?//= $event['desc'];?><!--</p>-->
                    <div class="itemPrice colorGold">
                        <div class="itemDate">
                            <span></span>
                            <span><?= $event['date_time'];?></span>
                        </div>
                        <span><?= $event['price'];?></span>
                    </div>
                    <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>