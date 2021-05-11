<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\entities\Feedback;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\FeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сообщения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="box">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'created_at',
                        'format' => 'raw',
                        'value' => function (Feedback $data) {
                            return Yii::$app->formatter->asDate($data->created_at, 'dd.MM.yyyy HH:mm');
                        },
                        'filter' => DatePicker::widget([
                            'model' => $searchModel,
                            'attribute' => 'created_at',
                            'type' => DatePicker::TYPE_COMPONENT_APPEND,
                            'pluginOptions' => [
                                'todayHighlight' => true,
                                'todayBtn' => true,
                                'autoclose' => true,
                                'format' => 'dd.mm.yyyy',
                            ]
                        ]),
                        'options' => ['width' => '200'],
                    ],
                    'name',
                    'email:email',
                    [
                        'attribute' => 'message',
                        'contentOptions' => ['style' => 'white-space: normal;']
                    ],
                    [
                        'attribute' => 'status',
                        'format' => 'raw',
                        'value' => function (Feedback $data) {
                            if ($data->status) {
                                return Html::a('<span class="glyphicon glyphicon-ok"></span> Обработан', ['status', 'id' => $data->id], ['class' => 'btn btn-success btn-raised']);
                            } else {
                                return Html::a('<span class="glyphicon glyphicon-remove"></span> Ожидает', ['status', 'id' => $data->id], ['class' => 'btn btn-danger btn-raised']);
                            }
                        },
                        'filter' => Html::activeDropDownList(
                            $searchModel,
                            'status',
                            ['0' => 'Ожидает', '1' => 'Обработан'],
                            ['class' => 'form-control', 'prompt' => 'Все']
                        ),
                        'options' => ['style' => 'width: 100px; max-width: 100px;'],
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'headerOptions' => ['width' => '80'],
                        'template' => '{delete}',
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
