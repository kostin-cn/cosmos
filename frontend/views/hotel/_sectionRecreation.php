<?php

/* @var $hotel array */

;?>

<section id="recreations" class="sectionRecreation">
    <div class="wrapper">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Мероприятия');?></h2>
        <a class="linkToAll jq_hidden" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все мероприятия');?></span></a>
    </div>
    <div class="wrapper w720 txtCenter">
        <p class="jq_hidden"><?= $hotel['recreations']['desc'];?></p>
    </div>
    <div class="wrapper advantCat">
      <div class="advantCategories">
        <?php foreach ($hotel['recreations']['items'] as $key=>$advantage):;?>
          <span id="cat-<?= $key;?>" class="catLink jq_hidden <?= $key == 0 ? 'active' : '';?>" data-id="#slider-<?= $key;?>"><?= $advantage['title'];?></span>
        <?php endforeach;?>
      </div>
    </div>
    <div>
        <?php foreach ($hotel['recreations']['items'] as $key=>$advantage):;?>
            <div id="slider-<?= $key;?>" class="sliderContainer jq_hidden <?= $key==0 ? '' : 'hidden';?>">
                <div class="advantagesSlider">
                    <div class="slide">
                        <div class="bgImage bgFix" style="background-image: url('<?= $advantage['items'][0]['image'];?>')">

                        </div>
                        <div class="slideText txtCenter">
                            <p><strong><?= $advantage['items'][0]['title'];?></strong></p>
                            <p><?= $advantage['items'][0]['desc'];?></p>
                            <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
        <div class="advantagesArrow prev jq_hidden"><span class="icon-arrow icon-arrow-long-left"></span></div>
        <div class="advantagesArrow next jq_hidden"><span class="icon-arrow icon-arrow-long-right"></span></div>
    </div>
</section>
