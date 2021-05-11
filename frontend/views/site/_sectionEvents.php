<?php

/* @var $events array */

;?>

<section class="sectionEvents">
    <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Мероприятия');?></h2>
    <div class="txtCenter jq_hidden">
        <span class="spanArrow eventsArrow prev icon-arrow-left"></span>
        <span class="spanArrow eventsArrow next icon-arrow-right"></span>
    </div>
    <div id="eventsSlider" class="itemsContainer">
        <?php foreach ($events as $event):;?>
            <div class="itemBlock jq_hidden">
                <div class="image">
                    <img src="<?= $event['image'];?>" alt="">
                </div>
                <div class="itemText">
                    <h3 class="itemTitle"><?= $event['title'];?></h3>
                    <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>