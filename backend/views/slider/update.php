<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Slider */

$this->title = 'Изменить: ' . $model->sort;

$this->params['breadcrumbs'][] = ['label' => 'Слайдер', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
