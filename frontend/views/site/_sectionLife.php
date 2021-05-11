<?php

/* @var $life array */

;?>

<section class="sectionLife">
    <div class="wrapper">
        <h2 class="sectionTitle jq_hidden">Cosmos life</h2>
        <div class="itemsContainer">
            <?php foreach ($life as $lifeItem):;?>
                <div class="itemBlock jq_hidden">
                    <div class="image">
                        <img src="<?= $lifeItem['image'];?>" alt="">
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>