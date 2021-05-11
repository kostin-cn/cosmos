<?php

use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $user \common\entities\User */

$user = Yii::$app->user->identity;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $user->getAvatar('/files/anonymous.jpg') ?>"
                     class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= $user->getPublicIdentity() ?></p>
                <a href="<?php echo Url::to(['/sign-in/profile']) ?>">
                    <i class="fa fa-circle text-success"></i>
                    <?php echo Yii::$app->formatter->asDatetime(time()) ?>
                </a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Редактор', 'options' => ['class' => 'header']],
//                    ['label' => 'Файл-менеджер', 'icon' => 'file-image-o', 'url' => ['/file-manager']],
                    ['label' => 'Слайдер', 'icon' => 'image', 'active' => (Yii::$app->controller->id == 'slider'), 'url' => ['/slider']],
                    ['label' => 'Модули', 'icon' => 'file-code-o', 'active' => (Yii::$app->controller->id == 'modules'), 'url' => ['/modules']],
                    ['label' => 'Контакты', 'icon' => 'address-book-o', 'active' => (Yii::$app->controller->id == 'contacts'), 'url' => ['/contacts']],
                    ['label' => 'Соцсети', 'icon' => 'facebook', 'active' => (Yii::$app->controller->id == 'socials'), 'url' => ['/socials']],
                    ['label' => 'Сообщения', 'icon' => 'envelope', 'active' => (Yii::$app->controller->id == 'feedback'), 'url' => ['/feedback']],
                ]
            ]
        ) ?>
    </section>
</aside>
