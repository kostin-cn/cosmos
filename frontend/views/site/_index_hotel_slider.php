<?php /**
 * @var $hotels array
 */;?>
<section class="sectionHotels jq_hidden">
  <h2 class="sectionTitle"><?= Yii::t('app', 'Отели');?></h2>
  <span class="subTitle">Cosmos Hotel Group</span>

  <div class="hotelsContainer">
    <div id="defaultBackgroundContainer">
      <div class="defaultBackgroundWrapper">
        <div class="defaultBackground" style="background-image:url(<?= $hotels[0]['image'];?>)">

        </div>
      </div>
    </div>

    <div id="backgroundsContainer">
      <?php foreach ($hotels as $key2=>$hotel):?>

      <div class="dynamicBackgroundWrapper <?= $key2?'':'active';?>">
        <div class="dynamicBackground <?= $key2?'':'showed';?>" style="background-image:url(<?= $hotel['image'];?>)"></div>
      </div>

      <div class="dynamicTexts <?= $key2?'':'active';?>">
          <p class="hotelsCity"><?= $hotel['city'];?></p>
          <h3 class="hotelsTitle"><?= $hotel['title'];?></h3>
          <a class="read-more" href="#"><?= Yii::t('app', 'подробнее');?></a>
      </div>
      <?php endforeach;?>
    </div>

    <div class="sliderContainer">
      <div id="hotelsSlider">
        <?php foreach ($hotels as $key=>$hotel):?>
            <div class="slide">
              <div class="blockContent">
                <div class="bgImage" style="background-image:url(<?= $hotel['image'];?>)">

                </div>
                <div class="slideText">
                  <p class="hotelsCity"><?= $hotel['city'];?></p>
                  <h3 class="hotelsTitle"><?= $hotel['title'];?></h3>
                </div>
              </div>
            </div>
        <?php endforeach;?>
      </div>

      <div class="hotelControls">
        <div class="hotelsNav"></div>
        <span class="hotelsArrow prev icon-arrow-left"></span>
        <span class="hotelsArrow next icon-arrow-right"></span>
      </div>
    </div>

  </div>
</section>
