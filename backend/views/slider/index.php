<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\entities\Slider;
use arogachev\sortable\grid\SortableColumn;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Слайдер';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success'])        ?>
    </p>

    <div class="box">
        <div class="box-body">
            <div class="question-index" id="question-sortable">
                <?php Pjax::begin(); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'sort',
                        [
                            'class' => SortableColumn::class,
                            'gridContainerId' => 'question-sortable',
                            'baseUrl' => '/admin/sort/', // Optional, defaults to '/sort/'
                            'confirmMove' => false, // Optional, defaults to true
                            'template' => '<div class="sortable-section">{currentPosition}</div>
                                           <div class="sortable-section">{moveWithDragAndDrop}</div>'
                        ],
                        [
                            'label' => 'Изображение',
                            'format' => 'raw',
                            'value' => function (Slider $data) {
                                if ($data->image_name) {
                                    return Html::img($data->image, [
                                        'alt' => 'yii2 - картинка в gridview',
                                        'style' => 'height:100px;'
                                    ]);
                                }
                                return null;
                            },
                        ],
                        [
                            'attribute' => 'status',
                            'format' => 'raw',
                            'value' => function (Slider $data) {
                                if ($data->status) {
                                    return Html::a('<span class="glyphicon glyphicon-ok"></span> Отображать', ['status', 'id' => $data->id], ['class' => 'btn btn-success btn-raised']);
                                } else {
                                    return Html::a('<span class="glyphicon glyphicon-remove"></span> Скрывать', ['status', 'id' => $data->id], ['class' => 'btn btn-danger btn-raised']);
                                }
                            }
                        ],

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{update}{delete}',
                        ],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>
