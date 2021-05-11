<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Feedback */

$this->title = 'Изменить: ' . $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="feedback-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
