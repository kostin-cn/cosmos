<?php

/* @var $this yii\web\View */
/* @var $slider array */
/* @var $promo array */
/* @var $hotels array */
/* @var $brands array */
/* @var $loyalty array */
/* @var $events array */
/* @var $advantages array */
/* @var $life array */

?>

<?= $this->render('_mainNav');?>

<div class="page-index">

    <?= $this->render('_mobileNav');?>

    <?= $this->render('_sectionTop_slider',['slider'=>$slider]);?>

    <?= $this->render('_sectionPromo',['promo'=>$promo]);?>

    <?= $this->render('_index_hotel_slider',['hotels'=>$hotels]);?>

    <?= $this->render('_sectionBrands',['brands'=>$brands]);?>

    <?= $this->render('_sectionLoyalty',['loyalty'=>$loyalty]);?>

    <?= $this->render('_sectionEvents',['events'=>$events]);?>

    <?= $this->render('_sectionAdvantages',['advantages'=>$advantages]);?>

    <?= $this->render('_sectionLife',['life'=>$life]);?>

    <?= $this->render('_sectionSubscribe');?>

</div>

<?= $this->render('_footer');?>