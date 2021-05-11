<?php

/* @var $slider array */

;?>

<section class="sectionTop">
    <div class="sliderContainer">
        <div id="indexSlider">
            <?php $length = count($slider);?>
            <?php foreach ($slider as $key=>$slide):;?>
                <div class="slide" data-key="<?= $key+1;?>">
                    <div class="bgImage respons__block" style="background-image: url('<?= $slide['image'];?>')">

                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="topText">
            <div class="wrapper">
                <h1 class="slideTitle"><?= Yii::t('app', 'Открой вселенную гостеприимства');?></h1>
            </div>
        </div>

        <div class="flexText">
            <span class="spanArrow indexArrow prev icon-arrow-long-left"></span>
            <div class="roundBlock">
                <span id="currSlide">1</span>
                <span> / </span>
                <span><?= $length;?></span>
            </div>
            <span class="spanArrow indexArrow next icon-arrow-long-right"></span>
        </div>
    </div>

    <form action="" id="formSearch" class="custom-form">
        <div class="form-accordeon active">
            <div class="accordeonHead txtCenter">
                <span><?= Yii::t('app', 'Забронировать номер');?></span>
                <span class="spanIco icon-chevrone-down hidden"></span>
            </div>
            <div class="accordeonBody">
                <div class="wrapper">
                    <div class="search-input">
                        <div class="form-group">
                            <span class="spanBefore icon-search"></span>
                            <label for="form-search" class="hidden"><?= Yii::t('app', 'Поиск');?></label>
                            <input name="form-search" id="form-search" type="text" class="form-control" placeholder="<?= Yii::t('app', 'Отель или город');?>">
                        </div>
                    </div>

                    <div class="nonWrap">
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
                            <button type="submit" class="btn gray"><?= Yii::t('app', 'Найти');?></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</section>