<?php

use yii\helpers\Url;
use yii\widgets\Menu;
use common\widgets\MultiLang\MultiLang;

/* @var $this yii\web\View */
/* @var $hotel array */
/* @var $groups array */
/* @var $brands array */

$contactValue = [
    'point' => Yii::t('app', 'Адрес'),
    'phone' => Yii::t('app', 'Телефон'),
    'email' => Yii::t('app', 'E-mail'),
];

$navItems = [
    ['label' => Yii::t('app', 'Номера'), 'url' => ['site/apartments']],
    ['label' => Yii::t('app', 'Отдых'), 'url' => ['site/relax']],
    ['label' => Yii::t('app', 'Акции'), 'url' => ['site/promo']],
    ['label' => Yii::t('app', 'Рестораны'), 'url' => ['site/restaurants']],
    ['label' => Yii::t('app', 'События'), 'url' => ['site/events']],
    ['label' => Yii::t('app', 'Мероприятия'), 'url' => ['site/activities']],
    ['label' => Yii::t('app', 'Контакты'), 'url' => ['site/contacts']],
];

?>

<div class="page-hotel">

    <div class="hotelNav">

        <div class="navTop">
            <div class="wrapper">
                <div class="leftNav">

                    <div class="dropdownNav">
                        <span class="current"><?= $hotel['brand']['group']['title'];?></span><span class="spanIco icon-chevrone-down"></span>
                        <ul>
                            <?php foreach ($groups as $group):;?>
                                <li class="<?= $group['title'] == $hotel['brand']['group']['title'] ? 'active' : '';?>">
                                    <a href="#"><?= $group['title'];?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                    <div class="divider"></div>

                    <div class="dropdownNav">
                        <span class="current"><?= $hotel['brand']['full_title'];?></span><span class="spanIco icon-chevrone-down"></span>
                        <ul>
                            <?php foreach ($brands as $brand):;?>
                                <li class="<?= $brand['title'] == $hotel['brand']['title'] ? 'active' : '';?>">
                                    <a href="#"><?= $brand['full_title'];?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                    <div class="divider"></div>

                    <span><?= $hotel['title'];?></span>
                </div>

                <div class="rightNav">
                    <div class="socialsContainer">
                        <?php foreach ($hotel['socials'] as $social):;?>
                            <a class="soc" href="<?= $social['link'];?>" target="_blank"><span class="icon-<?= $social['icon'];?>"></span></a>
                        <?php endforeach;?>
                    </div>
                    <?= MultiLang::widget(); ?>
                </div>
            </div>
        </div>

        <div id="menu" class="wrapper">

            <a class="logo txtCenter" href="<?= Url::to(['site/index']); ?>">
                <img class="imgLogo" src="<?= $hotel['brand']['logo'];?>" alt="">
                <img class="logo-fill" src="/files/svg/logo-fill.svg" alt="">
                <p><strong><?= $hotel['brand']['title'];?></strong></p>
                <p><span><?= $hotel['title'];?> <?= Yii::t('app', 'hotel');?></span></p>
            </a>

            <div class="topMenuContainer">
                <?= Menu::widget([
                    'items' => $navItems,
                    'options' => ['class' => 'navMenu'],
                    'encodeLabels' => false,
                ]); ?>
            </div>

            <div class="menuRightBlock">
                <div class="menuRoundBlock">
                    <div id="burger">
                        <span class="top"></span>
                        <span class="bottom"></span>
                    </div>
                    <a class="userBtn" href="#">
                        <span class="icon-user"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <section class="sectionTop">
        <div class="bgImage respons__block" style="background-image: url('<?= $hotel['image'];?>')">

        </div>
        <div class="hotelText txtCenter">
            <h3><?= $hotel['brand']['full_title'];?></h3>
            <h1><?= $hotel['title'];?></h1>
            <p><?= $hotel['short_desc'];?></p>
        </div>

        <form action="" id="formSearch" class="custom-form">
            <div class="wrapper w960">

                <div class="date-input">
                    <div class="form-group">
                        <span class="spanBefore"><?= Yii::t('app', 'Даты:');?></span>
                        <label for="select-date" class="hidden"><?= Yii::t('app', 'Дата');?></label>
                        <select name="select-date" id="select-date" class="form-control">
                            <option value="26 апреля — 2 мая">26 апреля — 2 мая</option>
                            <option value="26 апреля — 2 мая">3 мая - 10 мая</option>
                            <option value="26 апреля — 2 мая">11 мая - 18 мая</option>
                        </select>
                        <span class="spanIco icon-chevrone-down"></span>
                    </div>
                </div>

                <div class="guests-input">
                    <div class="form-group">
                        <span class="spanBefore"><?= Yii::t('app', 'Гости:');?></span>
                        <label for="select-guests" class="hidden"><?= Yii::t('app', 'Гости');?></label>
                        <select name="select-guests" id="select-guests" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <span class="spanIco icon-chevrone-down"></span>
                    </div>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn gold"><?= Yii::t('app', 'Выбрать даты');?></button>
                </div>
            </div>
        </form>
    </section>

    <section class="sectionDesc txtCenter">
        <div class="breadCrumbs jq_hidden">
            <a href="#"><?= $hotel['brand']['group']['title'];?></a>
            <span> / </span>
            <a href="#"><?= $hotel['brand']['full_title'];?></a>
            <span> / </span>
            <strong><?= $hotel['title'];?></strong>
        </div>

        <h2 class="sectionTitle jq_hidden"><?= $hotel['sub_title'];?></h2>
        <div class="wrapper w820 jq_hidden">
            <p><?= $hotel['description'];?></p>
        </div>

        <div class="txtCenter colorGold descFlex jq_hidden">
            <a href="#"><?= Yii::t('app', 'Посмотреть видео');?><span class="spanIco icon-play"></span></a>
            <span class="divider"></span>
            <a href="#"><?= Yii::t('app', 'Фотогалерея');?><span class="spanIco icon-pic"></span></a>
        </div>
    </section>

    <section class="sectionAttachments jq_hidden">
        <div id="attachSlider">
            <?php foreach ($hotel['attachments'] as $attachment):;?>
            <div class="slide">
                <img src="<?= $attachment['image'];?>" alt="">
            </div>
            <?php endforeach;?>
        </div>
        <div class="attachArrow prev"><span class="icon-arrow icon-arrow-long-left"></span></div>
        <div class="attachArrow next"><span class="icon-arrow icon-arrow-long-right"></span></div>
    </section>

    <section class="sectionApartments">
        <div class="wrapper">
            <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Номера');?></h2>
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
                        <ul>
                            <?php foreach ($hotel['apartments']['items'] as $key=>$apartment):;?>
                                <li class="hoverElem" data-key="<?= $key;?>">
                                    <a href="#">
                                        <span><?= $apartment['title'];?></span>
                                        <span class="icon-arrow icon-arrow-long-right"></span>
                                    </a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if($hotel['services']):;?>
    <section class="sectionServices hidden">
        <div class="wrapper">
            <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Услуги');?></h2>
            
        </div>
    </section>
    <?php endif;?>

    <section class="sectionAdventures">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Развлечения');?></h2>
        <div class="sliderContainer jq_hidden">
            <div class="bgImage">
                <img src="<?= $hotel['adventures'][0]['image'];?>" alt="">
            </div>
            <div class="wrapper">
                <div class="text">
                    <h2><?= $hotel['adventures'][0]['title'];?></h2>
                    <p><?= $hotel['adventures'][0]['desc'];?></p>
                    <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                </div>

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
        </div>
    </section>

    <section class="sectionPromo">
        <div class="wrapper">
            <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Акции');?></h2>
            <a class="linkToAll jq_hidden" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все акции');?></span></a>
            <div class="itemsContainer">
                <?php foreach ($hotel['promo'] as $promo):;?>
                    <a class="itemBlock jq_hidden" href="#">
                        <div class="blockContent">
                            <div class="bgImage">
                                <img src="<?= $promo['image'];?>" alt="">
                            </div>
                            <div class="itemText">
                                <h3><?= $promo['title'];?></h3>
                                <span class="read-more"><?= Yii::t('app', 'подробнее');?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <section class="sectionRestaurant jq_hidden">
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
                        <p><?= $restaurant['desc'];?></p>
                        <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                        <div class="itemsContainer">
                            <div class="itemBlock">
                                <span class="ico icon-fork"></span>
                                <p><?= $restaurant['menu_text'];?></p>
                                <a class="btn white" href="#"><?= Yii::t('app', 'Посмотреть меню');?></a>
                            </div>
                            <div class="itemBlock">
                                <span class="ico icon-clock"></span>
                                <p><?= $restaurant['time'];?></p>
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

    <section class="sectionEvents">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'События');?></h2>
        <a class="linkToAll jq_hidden" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все события');?></span></a>
        <div class="itemsContainer">
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

    <section class="sectionRecreation">
        <div class="wrapper w720 txtCenter">
            <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Мероприятия');?></h2>
            <p class="jq_hidden"><?= $hotel['recreations']['desc'];?></p>
        </div>
        <div class="advantCategories wrapper w70">
            <?php foreach ($hotel['recreations']['items'] as $key=>$advantage):;?>
                <a class="jq_hidden <?= $key == 0 ? 'active' : '';?>" href="#"><?= $advantage['title'];?></a>
            <?php endforeach;?>
        </div>
        <div class="sliderContainer jq_hidden">
            <div id="advantagesSlider">
                <?php foreach ($hotel['recreations']['items'][0]['items'] as $slide):;?>
                <div class="slide">
                    <div class="bgImage">
                        <img src="<?= $slide['image'];?>" alt="">
                    </div>
                    <div class="slideText txtCenter">
                        <p><strong><?= $slide['title'];?></strong></p>
                        <p><?= $slide['desc'];?></p>
                        <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="advantagesArrow prev"><span class="icon-arrow icon-arrow-long-left"></span></div>
            <div class="advantagesArrow next"><span class="icon-arrow icon-arrow-long-right"></span></div>
        </div>
    </section>

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

    <section class="sectionAdvantages">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Наши преимущества');?></h2>
        <div class="itemsContainer">
            <?php foreach ($hotel['advantages'] as $advantage):;?>
                <div class="itemBlock jq_hidden">
                    <div class="image">
                        <img src="<?= $advantage['image'];?>" alt="">
                    </div>
                    <div class="itemText">
                        <h3 class="itemTitle"><?= $advantage['title'];?></h3>
                        <p><?= $advantage['html'];?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </section>

    <section class="sectionTravel jq_hidden">
        <div class="bgImage bgFix" style="background-image: url('<?= $hotel['travel']['image'];?>')">

        </div>
        <div class="sectionText">
            <h2><?= $hotel['travel']['title'];?></h2>
            <p><?= $hotel['travel']['desc'];?></p>
            <a href="#">
                <span><?= Yii::t('app', 'Подробнее');?></span>
                <span class="spanIco icon-arrow-long-right"></span>
            </a>
        </div>
    </section>

    <section class="sectionAwards">
        <div class="wrapper">
            <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Премии');?></h2>
            <div class="itemsContainer">
                <?php foreach ($hotel['awards'] as $award):;?>
                    <div class="itemBlock jq_hidden">
                        <div class="image">
                            <?php if ($award['image']) {;?>
                                <img src="<?= $award['image'];?>" alt="">
                            <?php }else {;?>
                                <div class="nullAward">
                                    <span class="spanIco icon-medal"></span>
                                    <span><?= Yii::t('app', 'Место для награды');?></span>
                                </div>
                            <?php };?>
                        </div>
                        <div class="itemText">
                            <h3 class="itemTitle"><?= $award['title'];?></h3>
                            <p><?= $award['desc'];?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <section class="sectionContacts jq_hidden">
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
                                <p class="stronk"><strong><?= $contactValue[$item['type']];?></strong></p>
                                <?php if ($item['type'] == 'phone') {;?>
                                    <p><a href="tel: <?= ($item['value']) ;?>"><?= ($item['value']) ;?></a></p>
                                <?php } elseif ($item['type'] == 'email') { ?>
                                    <p><a class="email" href="email: <?= ($item['value']) ;?>"><?= ($item['value']) ;?></a></p>
                                <?php } else { ?>
                                    <p><?= ($item['value']) ;?></p>
                                <?php } ?>
                                <?php endforeach;?>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <div class="itemBlock">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

</div>
