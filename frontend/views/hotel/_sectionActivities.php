<?php

/* @var $hotel array */

;?>

<section class="sectionActivities jq_hidden">
    <div class="wrapper w720 txtCenter">
        <h2 class="sectionTitle"><?= Yii::t('app', 'Активности');?></h2>
        <p><?= $hotel['activities']['desc'];?></p>
        <div class="itemsContainer">
            <a class="itemBlock" href="#">
                <span class="spanIco icon-dok"></span>
                <span><?= Yii::t('app', 'Расписание активностей');?></span>
            </a>
            <a class="itemBlock" href="#">
                <span class="spanIco icon-kids"></span>
                <span><?= Yii::t('app', 'Детская программа');?></span>
            </a>
        </div>
    </div>
</section>