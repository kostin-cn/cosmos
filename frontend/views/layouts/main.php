<?php

use common\widgets\MultiLang\MultiLang;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$dropdownMenu = [
    'Алтай' => [
            'status' => true,
            'items' => [
                [
                    'title' => 'Cosmos Collection Altay Resort (5*)',
                    'rating' => 5,
                    'slug' => '',
                ],
            ],
    ],
    'Астрахань' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Park Inn by Radisson Астрахань (4*)',
                'rating' => 4,
                'slug' => '',
            ],
        ],
    ],
    'Волгоград' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Park Inn by Radisson Волгоград (4*)',
                'rating' => 4,
                'slug' => '',
            ],
        ],
    ],
    'Воронеж' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Holiday Inn Express Voronezh – Kirova (3*)',
                'rating' => 3,
                'slug' => '',
            ],
        ],
    ],
    'Ижевск' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Park Inn by Radisson Ижевск (4*)',
                'rating' => 4,
                'slug' => '',
            ],
        ],
    ],
    'Казань' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Park Inn by Radisson Казань (4*)',
                'rating' => 4,
                'slug' => '',
            ],
        ],
    ],
    'Карелия' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Шуйская Чупа',
                'rating' => 4,
                'slug' => '',
            ],
            [
                'title' => 'Cosmos Petrozavodsk (4*)',
                'rating' => 4,
                'slug' => 'petrozavodsk',
            ],
        ],
    ],
    'Карловы Вары' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Savoy Westend Hotel (5*)',
                'rating' => 5,
                'slug' => '',
            ],
        ],
    ],
    'Москва' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Cosmos Moscow (4*)',
                'rating' => 4,
                'slug' => '',
            ],
            [
                'title' => 'Holiday Inn Express Moscow - Paveletskaya (3*)',
                'rating' => 3,
                'slug' => 'holiday-inn-pavletskaya',
            ],
            [
                'title' => 'Интурист Коломенское (3*)',
                'rating' => 3,
                'slug' => '',
            ],
        ],
    ],
    'Московская область' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Cosmos Collection Izumrudny Les (5*)',
                'rating' => 5,
                'slug' => 'izumrudny-les',
            ],
        ],
    ],
    'Намибия' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Leopard Lodge',
                'rating' => 5,
                'slug' => '',
            ],
        ],
    ],
    'Новосибирск' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Park Inn by Radisson Новосибирск (4*)',
                'rating' => 4,
                'slug' => '',
            ],
        ],
    ],
    'Сочи' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Park Inn by Radisson Сочи (4*)',
                'rating' => 4,
                'slug' => '',
            ],
        ],
    ],
    'Форте Дей Марми' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Principe Forte Dei Marmi (5*)',
                'rating' => 5,
                'slug' => '',
            ],
        ],
    ],
    'Ярославль' => [
        'status' => true,
        'items' => [
            [
                'title' => 'Park Inn by Radisson Ярославль (4*)',
                'rating' => 4,
                'slug' => '',
            ],
        ],
    ],
];

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="body-<?= Yii::$app->controller->id;?>-<?= Yii::$app->controller->action->id;?>">
<?php $this->beginBody() ?>

<div id="main">
    <?= Alert::widget() ?>

    <div id="content" class="contentWrapper">

        <div id="hotelsDropMenu">
            <div class="dropmenuContent">
                <form action="" id="hotelFilters">
                    <div class="wrapper">
                        <div class="form-group">
                            <label><?= Yii::t('app', 'Количество звезд');?>:</label>
                            <div class="form-control">
                                <input type="checkbox" name="check-3" id="check-3" value="3" />
                                <label for="check-3">
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                </label>
                            </div>
                            <div class="form-control">
                                <input type="checkbox" name="check-4" id="check-4" value="4" />
                                <label for="check-4">
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                </label>
                            </div>
                            <div class="form-control">
                                <input type="checkbox" name="check-5" id="check-5" value="5" />
                                <label for="check-5">
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                    <span class="spanIco icon-star"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="border-block"></div>

                    <span id="resetFilter" class="linkReset hidden"><?= Yii::t('app', 'Сбросить фильтр');?></span>

                    <div class="form-submit hidden">
                        <button type="submit"><?= Yii::t('app', 'Фильтр');?></button>
                    </div>
                </form>

                <div class="wrapper">
                    <div class="itemsContainer">
                        <?php foreach ($dropdownMenu as $city=>$menu):;?>
                            <div class="itemBlock">
                                <p><strong><?= $city;?></strong></p>
                                <?php foreach ($menu['items'] as $item):;?>
                                    <p><a href="<?= $item['slug'] ? Url::to(['hotel/index', 'slug' => $item['slug']]) : '#';?>"><?= $item['title'];?></a></p>
                                <?php endforeach;?>
                            </div>
                        <?php endforeach;?>
                        <div class="itemBlock">
                            <a class="btn white-gray" href="#"><span class="spanIco icon-arrow-long-right"></span><span><?= Yii::t('app', 'все отели');?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $content ?>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
