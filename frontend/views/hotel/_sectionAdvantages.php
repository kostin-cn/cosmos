<?php

use yii\helpers\FileHelper;

/* @var $hotel array */

;?>

<section class="sectionAdvantages">
    <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Наши преимущества');?></h2>
    <div class="itemsContainer">
        <?php foreach ($hotel['advantages'] as $advantage):;?>
            <div class="itemBlock jq_hidden">
                <div class="image">
                    <?php if (substr($advantage['image'], -3, 3) == 'svg') {;?>
                        <?= file_get_contents(FileHelper::normalizePath(Yii::getAlias('@webroot').$advantage['image'])); ?>
                    <?php }else{;?>
                        <img src="<?= $advantage['image'];?>" alt="">
                    <?php };?>
                </div>
                <div class="itemText">
                    <h3 class="itemTitle"><?= $advantage['title'];?></h3>
                    <p><?= $advantage['html'];?></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>