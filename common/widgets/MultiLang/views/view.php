<?php
namespace common\widgets\MultiLang;

use yii\helpers\Url;
use Yii;

?>

<div class="language-choosing">
    <?php foreach (Yii::$app->params['languages'] as $key => $lang): ; ?>
        <a href="<?= Url::to(array_merge(
            \Yii::$app->request->get(),
            [\Yii::$app->controller->route, 'language' => $key]
        )) ?>"
           class="item-lang <?= Yii::$app->language == $key ? 'active' : ''; ?>">
            <?= $lang; ?>
        </a>
    <?php endforeach; ?>
</div>