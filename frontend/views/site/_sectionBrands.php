<?php

/* @var $brands array */

;?>

<section class="sectionBrands">
    <div class="wrapper">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Наши бренды');?></h2>
        <div id="brandsContainer" class="itemsContainer jq_hidden">
            <?php $brandsLength = count($brands);?>
            <?php foreach ($brands as $key=>$brand):;?>
                <div class="itemBlock indexBrandsItemBlock <?= $brand['isCenter'] ? 'centered' : '';?> <?= $key == 0 ? 'brandLeft' : '';?> <?= $key == $brandsLength-1 ? 'brandRight' : '';?>">
                    <div class="blockContent">
                        <div class="bgImage">
                            <img src="<?= $brand['image'];?>" alt="">
                            <video src="<?= $brand['video'];?>" autoplay loop muted playsinline></video>
                        </div>
                        <div class="itemText">
                            <img src="<?= $brand['logo'];?>" alt="">
                            <p><?= $brand['title'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
