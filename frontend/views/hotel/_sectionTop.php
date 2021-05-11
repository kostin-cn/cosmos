<?php

/* @var $hotel array */

;?>

<section class="sectionTop">
    <div class="sliderContainer">
        <div class="bgImage respons__block" style="background-image: url('<?= $hotel['image'];?>')">
            <?php if ($hotel['video']):;?>
                <video src="<?= $hotel['video'];?>" autoplay muted loop></video>
            <?php endif;?>
        </div>
        <div class="hotelText txtCenter">
            <h3><?= $hotel['brand']['full_title'];?></h3>
            <h1><?= $hotel['title'];?></h1>
            <p><?= $hotel['short_desc'];?></p>
        </div>
    </div>

    <form action="" id="formSearch" class="custom-form">
        <div class="form-accordeon active">
            <div class="accordeonHead txtCenter">
                <span><?= Yii::t('app', 'Забронировать номер');?></span>
                <span class="spanIco icon-chevrone-down hidden"></span>
            </div>

            <div class="accordeonBody">
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
            </div>
        </div>
    </form>
</section>