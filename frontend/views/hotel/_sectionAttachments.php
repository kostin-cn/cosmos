<?php

/* @var $hotel array */

;?>

<section class="sectionAttachments jq_hidden">
    <div id="attachSlider">
        <?php foreach ($hotel['attachments'] as $attachment):;?>
            <div class="slide">
                <img src="<?= $attachment['image'];?>" alt="">
            </div>
        <?php endforeach;?>
    </div>
    <div class="attachArrow prev"><span class="icon-arrow icon-arrow-long-left"></span></div>
    <div class="attachArrow next"><span class="icon-arrow icon-arrow-long-right"></span></div>
</section>