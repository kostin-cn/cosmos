<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $model \frontend\forms\FeedbackForm */
?>
<div class="page">
    <?php $form = ActiveForm::begin(['options' => ['id' => 'feedback']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]); ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]); ?>
    <?= $form->field($model, 'message')->textarea(['rows' => 4]); ?>

    <div class="checkbox-block">
        <?= $form->field($model, 'data_collection_checkbox',
            [
                'options' => ['class' => 'form-group radio data-checkbox'],
                'checkboxTemplate' => "{input}{label}\n{hint}\n{error}"
            ])->checkbox()
            ->label(Yii::t('app', 'Согласие на обработку персональных данных') . ' *', ['class' => 'check inline']); ?>

    </div>
    <div class="captcha">
        <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
            'captchaAction' => 'site/captcha',
            'template' => '<div class="flex-block"><div class="image">{image}</div><div class="input-block">{input}</div></div>',
        ]) ?>
    </div>

    <div class="form-group submit-group">
        <?= Html::submitButton(Yii::t('app', Yii::t('app', 'Отправить')), ['class' => 'btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
