<?php

/* @var $hotel array */

;?>

<section class="sectionAwards">
    <div class="wrapper">
        <h2 class="sectionTitle jq_hidden"><?= Yii::t('app', 'Премии');?></h2>
        <div class="txtCenter jq_hidden">
            <span class="spanArrow awardsArrow prev icon-arrow-left"></span>
            <span class="spanArrow awardsArrow next icon-arrow-right"></span>
        </div>
        <div id="awardsSlider" class="itemsContainer">
            <?php foreach ($hotel['awards'] as $award):;?>
                <div class="itemBlock jq_hidden">
                    <div class="itemContent">
                        <?php if ($award['image']) {;?>
                            <div class="image">
                                <img src="<?= $award['image'];?>" alt="">
                            </div>
                        <?php }else {;?>
                            <div class="image nonImg">
                                <div class="nullAward">
                                    <span class="spanIco icon-medal"></span>

                                </div>
                            </div>
                        <?php };?>
                        <?php if ($award['title']):;?>
                            <div class="itemText txtCenter">
                                <h3 class="itemTitle"><?= $award['title'];?></h3>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>