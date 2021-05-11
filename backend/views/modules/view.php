<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\entities\Modules;

/* @var $this yii\web\View */
/* @var $model common\entities\Modules */

$this->title = $model->title ?: 'Модуль';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modules-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' =>
            'btn btn-primary']) ?>
    </p>
    <div class="box">
        <div class="box-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => array_filter([
                    $model->image_name ? [
                        'label' => 'Изображение',
                        'format' => 'raw',
                        'value' => function (Modules $data) {
                            if ($data->image_name) {
                                return Html::img($data->image, [
                                    'alt' => 'yii2 - картинка в gridview',
                                    'style' => 'width:600px'
                                ]);
                            }
                            return null;
                        },
                    ] : '',
                    $model->title ? 'title' : '',
                    $model->html ? 'html:raw' : '',
                ]),
            ]) ?>
        </div>
    </div>
</div>
