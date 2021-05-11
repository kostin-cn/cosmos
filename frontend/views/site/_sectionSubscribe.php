<?php



;?>

<section class="sectionSubscribe jq_hidden">
    <div class="wrapper">
        <h2><?= Yii::t('app', 'Подпишитесь на рассылку приятных предложений со скидкой');?></h2>

        <form action="" id="formSubscribe" class="custom-form">

            <div class="form-group">
                <label for="form-name" class="hidden"><?= Yii::t('app', 'Ваше имя');?></label>
                <input name="form-name" id="form-name" type="text" class="form-control" placeholder="<?= Yii::t('app', 'Ваше имя');?>">
            </div>

            <div class="form-group">
                <label for="form-email" class="hidden"><?= Yii::t('app', 'Адрес почты');?></label>
                <input name="form-email" id="form-email" type="text" class="form-control" placeholder="<?= Yii::t('app', 'Адрес почты');?>">
            </div>

            <div class="form-submit">
                <button type="submit" class="btn gray"><?= Yii::t('app', 'Подписаться');?></button>
            </div>

        </form>
    </div>
</section>