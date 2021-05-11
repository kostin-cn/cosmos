<?php

use yii\helpers\Url;
use yii\widgets\Menu;
use common\widgets\MultiLang\MultiLang;

/* @var $this yii\web\View */
/* @var $hotel array */
/* @var $brand_list array */

/* @var $menuItems array */
/* @var $menuItemsAbout array */

$contactValue = [
    'point' => Yii::t('app', 'Адрес'),
    'phone' => Yii::t('app', 'Телефон'),
    'email' => Yii::t('app', 'E-mail'),
];

?>

<div class="page-hotel rating-<?= $hotel['rating'];?>">

    <?= $this->render('_mobileNav', [
            'hotel' => $hotel,
    ]);?>

    <?= $this->render('_hotelNav', [
            'hotel'=>$hotel,
            'brand_list'=>$brand_list,
        ]);?>

    <?= $this->render('_sectionTop', ['hotel'=>$hotel]);?>

    <?= $this->render('_sectionDesc', ['hotel'=>$hotel]);?>

    <?php if ($hotel['attachments'])
        echo $this->render('_sectionAttachments', ['hotel'=>$hotel]);?>

    <?php if ($hotel['apartments'])
        echo $this->render('_sectionApartments', ['hotel'=>$hotel]);?>

    <?php if($hotel['services'])
        echo $this->render('_sectionServices', ['hotel'=>$hotel]);?>

    <?php if ($hotel['adventures'])
        echo $this->render('_sectionAdventures', ['hotel'=>$hotel]);?>

    <?php if ($hotel['promo'])
        echo $this->render('_sectionPromo', ['hotel'=>$hotel]);?>

    <?php if ($hotel['restaurants'])
        echo $this->render('_sectionRestaurant', ['hotel'=>$hotel]);?>

    <?php if ($hotel['events'])
        echo $this->render('_sectionEvents', ['hotel'=>$hotel]);?>

    <?php if ($hotel['recreations'])
        echo $this->render('_sectionRecreation', ['hotel'=>$hotel]);?>

    <?php if ($hotel['activities'])
        echo $this->render('_sectionActivities', ['hotel'=>$hotel]);?>

    <?php if ($hotel['advantages'])
        echo $this->render('_sectionAdvantages', ['hotel'=>$hotel]);?>

    <?php if ($hotel['travel'])
        echo $this->render('_sectionTravel', ['hotel'=>$hotel]);?>

    <?php if ($hotel['awards'])
        echo $this->render('_sectionAwards', ['hotel'=>$hotel]);?>

    <?= $this->render('_sectionContacts', ['hotel'=>$hotel]);?>

</div>

<?= $this->render('_footer');?>