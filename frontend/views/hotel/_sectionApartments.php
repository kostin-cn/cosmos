<?php

/* @var $hotel array */
$isMobile = Yii::$app->devicedetect->isMobile();
;?>

<section id="apartments" class="sectionApartments">
    <div class="wrapper">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Номера');?></h2>
        <a class="linkToAll jq_hidden" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все номера');?></span></a>
        <div class="itemsContainer">
            <div class="itemBlock imageBlock jq_hidden">
                <div class="image">
                    <img src="<?= $hotel['apartments']['image'];?>" alt="">
                    <?php foreach ($hotel['apartments']['items'] as $kkk=>$apartment):;?>
                        <img class="thisImg" data-key="<?= $kkk;?>" data-src="<?= $apartment['image'];?>" alt="">
                    <?php endforeach;?>
                </div>
            </div>
            <div class="itemBlock descBlock jq_hidden">
                <div class="text">
                    <h3><?= $hotel['apartments']['title'];?></h3>
                    <p><?= $hotel['apartments']['desc'];?></p>
                    <ul id="<?= $isMobile?"apartmentsSlider":"apartmentsList";?>">
                        <?php foreach ($hotel['apartments']['items'] as $key=>$apartment):;?>
                            <li class="hoverElem" data-key="<?= $key;?>">
                                <a href="#">
                                    <?php if($isMobile) {?>
                                      <span class="bgImage" style="background-image:url(<?= $apartment['image'];?>)">
                                      </span>
                                      <span class="slideInfo">
                                        <span><?= $apartment['title'];?></span>
                                        <span class="icon-arrow icon-arrow-long-right"></span>
                                      </span>
                                    <?php } else {?>
                                      <span><?= $apartment['title'];?></span>
                                      <span class="icon-arrow icon-arrow-long-right"></span>
                                    <?php }?>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
