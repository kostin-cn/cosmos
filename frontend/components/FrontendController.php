<?php

namespace frontend\components;

use Yii;
use yii\helpers\Url;
use common\entities\Seo;
use yii\web\Controller;

class FrontendController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '@frontend/views/common/error.php'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    protected function findSeoAndSetMeta($page)
    {
        /* @var $seo Seo */
        $seo = Seo::getDb()->cache(function () use ($page) {
            return Seo::findOne(['page' => $page]);
        }, \Yii::$app->params['cacheTime']);
        $this->setMeta($seo->meta_title ?: $page, $seo->meta_description, $seo->meta_keywords);
    }

    protected function setMeta($title = null, $description = null, $keywords = null)
    {
        $this->view->title = $title;

        $description = $description ? $description : Yii::$app->params['description'];

        $this->view->registerMetaTag(['property' => 'og:url', 'content' => Url::canonical()]);
        $this->view->registerMetaTag(['property' => 'og:type', 'content' => 'website']);
        $this->view->registerMetaTag(['property' => 'og:sitename', 'content' => Yii::$app->name]);
        $this->view->registerMetaTag(['property' => 'og:title', 'content' => $this->view->title]);
        $this->view->registerMetaTag(['property' => 'og:description','content'=> "$description"]);
        $this->view->registerMetaTag(['property' => 'og:image','content'=> Yii::$app->params['image']]);

        $this->view->registerMetaTag(['name' => 'twitter:card', 'content' => 'summary_large_image']);
        $this->view->registerMetaTag(['name' => 'twitter:site', 'content' => Url::canonical()]);
        $this->view->registerMetaTag(['name' => 'twitter:title', 'content' => $this->view->title]);
        $this->view->registerMetaTag(['name' => 'twitter:description', 'content' => "$description"]);

        $this->view->registerMetaTag(['itemprop' => 'name', 'content' => $this->view->title]);
        $this->view->registerMetaTag(['itemprop' => 'description', 'content' => "$description"]);
        $this->view->registerMetaTag(['itemprop' => 'image', 'content'=> Yii::$app->params['image']]);

        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }
}