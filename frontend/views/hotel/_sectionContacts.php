<?php

/* @var $hotel array */

;?>

<section id="contacts" class="sectionContacts jq_hidden">
    <div class="wrapper w620 txtCenter">
        <h2 class="sectionTitle"><?= Yii::t('app', 'Контактная информация');?></h2>
        <p><?= $hotel['contacts']['desc'];?></p>
    </div>
    <div class="wrapper">
        <div class="itemsContainer">
            <div class="itemBlock">
                <ul class="accordeon">
                    <?php foreach ($hotel['contacts']['items'] as $key=>$contact):;?>
                        <li>
                            <div class="liHead <?= $key == 0 ? 'active' : '';?>">
                                <span><?= $contact['title'];?></span>
                                <span class="spanIco icon-arrow-top"></span>
                            </div>
                            <div class="liBody <?= $key == 0 ? 'active' : '';?>">
                                <?php foreach ($contact['items'] as $item):;?>
                                    <p class="stronk"><strong><?= Yii::t('app', $item['type']);?></strong></p>
                                    <?php if ($item['type'] == 'phone') {;?>
                                        <!--<h3>--><?//= Yii::t('app','Телефон');?><!--</h3>-->
                                        <p><a href="tel: <?= ($item['value']) ;?>"><?= ($item['value']) ;?></a></p>
                                    <?php } elseif ($item['type'] == 'email') { ?>
                                        <!--<h3>--><?//= Yii::t('app','Телефон');?><!--</h3>-->
                                        <p><a class="email" href="email: <?= ($item['value']) ;?>"><?= ($item['value']) ;?></a></p>
                                    <?php } else { ?>
                                        <p><?= ($item['value']) ;?></p>
                                    <?php } ?>
                                <?php endforeach;?>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
              <div id="createRoute" class="btnLink btn white"><span class="spanIco icon-arrow-long-right"></span> <?= Yii::t('app', "построить маршрут");?></div>

            </div>
            <div class="itemBlock">
                <?php $placemark = '<div class="mapPlacemark"><img src="' . $hotel['brand']['logo'] . '" alt=""><p><strong>' . $hotel['brand']['title'] . '</strong></p><p><span>' . $hotel['title'] . ' hotel</span></p></div>';?>
                <div id="map"
                     data-lat="<?= $hotel['contacts']['lat'];?>"
                     data-lng="<?= $hotel['contacts']['lng'];?>"
                     data-center_lat="<?= $hotel['contacts']['centerLat']?:$hotel['contacts']['lat'];?>"
                     data-center_lng="<?= $hotel['contacts']['centerLng']?:$hotel['contacts']['lng'];?>"
                     data-zoom="<?= $hotel['contacts']['zoom'];?>"
                     data-placemark='<?= $placemark;?>'
                     data-address='<?= $hotel['contacts']['items'][0]['items'][0]['value'];?>'
                ></div>
            </div>
        </div>
    </div>
</section>
