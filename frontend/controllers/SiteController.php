<?php
namespace frontend\controllers;

use common\entities\Contacts;
use frontend\forms\CallForm;
use frontend\forms\FeedbackForm;
use Yii;
use frontend\components\FrontendController;
use yii\helpers\Url;

class SiteController extends FrontendController
{
    public function actionIndex()
    {

        $slider = [
            [
                'image' => '/files/front/slider/1.jpg',
            ],
            [
                'image' => '/files/front/slider/2.jpg',
            ],
            [
                'image' => '/files/front/slider/3.jpg',
            ],
            [
                'image' => '/files/front/slider/4.jpg',
            ],
            [
                'image' => '/files/front/slider/5.jpg',
            ],
        ];

        $promo = [
            [
                'image' => '/files/front/promo/1.jpg',
                'title' => 'Скидка при раннем бронировании',
            ],
            [
                'image' => '/files/front/promo/2.jpg',
                'title' => 'Свадьба в Cosmos Hotels',
            ],
            [
                'image' => '/files/front/promo/3.jpg',
                'title' => 'День Рождения в Cosmos Collection Altay Resort',
            ],
        ];

        $hotels = [
            [
                'image' => '/files/front/hotels/1.jpg',
                'city' => 'Москва',
                'title' => 'Cosmos',
            ],
            [
                'image' => '/files/front/hotels/5.jpg',
                'city' => 'Петрозаводск',
                'title' => 'Cosmos Collection Shuiskaya Chupa',
            ],
            [
                'image' => '/files/front/hotels/2.jpg',
                'city' => 'Петрозаводск',
                'title' => 'Cosmos Petrozavodsk',
            ],
            [
                'image' => '/files/front/hotels/3.jpg',
                'city' => 'Московская Область',
                'title' => 'Изумрудный Лес',
            ],
            [
                'image' => '/files/front/hotels/4.jpg',
                'city' => 'Астрахань',
                'title' => 'Park Inn By Radison',
            ],
        ];

        $brands = [
            [
                'image' => '/files/front/brands/2.jpg',
                'video' => '/files/front/brands/2.mov',
                'logo' => '/files/front/brands/2_logo.svg',
                'title' => 'hotels',
                'isCenter' => false,
            ],
            [
                'image' => '/files/front/brands/3.jpg',
                'video' => '/files/front/brands/1.mov',
                'logo' => '/files/front/brands/3_logo.svg',
                'title' => 'collection',
                'isCenter' => true,
            ],
            [
                'image' => '/files/front/brands/1.jpg',
                'video' => '/files/front/brands/3.mov',
                'logo' => '/files/front/brands/smart_new.svg',
                'title' => 'smart&nbsp;hotels',
                'isCenter' => false,
            ],
//            [
//                'image' => '/files/front/brands/4.jpg',
//                'video' => '/files/front/brands/2.mov',
//                'logo' => '/files/front/brands/4_logo.svg',
//                'title' => 'travel',
//                'isCenter' => false,
//            ],
        ];

        $loyalty = [
            'image' => '/files/front/modules/1.jpg',
            'title' => 'Cosmos Bonus<br>программа лояльности',
            'html' => 'Присоединяйтесь к нашей программе лояльности и бронируйте со скидкой на сайте!',
        ];

        $events = [
            [
                'image' => '/files/front/events/1.jpg',
                'title' => 'Мероприятия в отеле Интурист Коломенское',
            ],
            [
                'image' => '/files/front/events/2.jpg',
                'title' => 'Уникальная площадка в Шуйской Чупе',
            ],
            [
                'image' => '/files/front/events/3.jpg',
                'title' => 'Конференц-пакеты в гостинице Космос Москва',
            ],
        ];

        $advantages = [
            [
                'image' => '/files/front/advantages/1.svg',
                'title' => 'Бесплатный Wi-Fi',
                'html' => 'На территории всех отелей бесплатно предоставляется Wi-Fi',
            ],
            [
                'image' => '/files/front/advantages/2.svg',
                'title' => 'Вкусные завтраки',
                'html' => 'Мы предлагаем вам самые вкусные и сытные завтраки',
            ],
            [
                'image' => '/files/front/advantages/3.svg',
                'title' => 'Удобное расположение',
                'html' => 'Наши отели расположены в лучших локациях России и мира',
            ],
            [
                'image' => '/files/front/advantages/4.svg',
                'title' => 'Парковка',
                'html' => 'На территории всех отелей бесплатно предоставляется парковка',
            ],
            [
                'image' => '/files/front/advantages/5.svg',
                'title' => 'Камера хранения',
                'html' => 'На территории всех отелей вы можете воспользоваться услугами камеры хранения',
            ],
            [
                'image' => '/files/front/advantages/6.svg',
                'title' => 'Единая скидочная карта',
                'html' => 'На территории всех отелей действует единая система лояльности',
            ],
        ];

        $life = [
            [
                'image' => '/files/front/life/1.jpg',
            ],
            [
                'image' => '/files/front/life/2.jpg',
            ],
            [
                'image' => '/files/front/life/3.jpg',
            ],
        ];


        $this->setMeta('Cosmos Hotel Group', 'Cosmos Hotel Group', 'Cosmos Hotel Group');
        return $this->render('index', [
            'slider' => $slider,
            'promo' => $promo,
            'hotels' => $hotels,
            'brands' => $brands,
            'loyalty' => $loyalty,
            'events' => $events,
            'advantages' => $advantages,
            'life' => $life,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContacts()
    {
        $contacts = Contacts::getDb()->cache(function () {
            return Contacts::find()->having(['status' => 1])->orderBy('sort')->all();
        }, Yii::$app->params['cacheTime']);
        return $this->render('contacts', [
            'contacts' => $contacts,
        ]);
    }

    public function actionFeedback()
    {
        $model = new FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->create()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Ваша заявка принята, мы свяжемся с вами в ближайшее время');
                return $this->redirect(Url::previous());
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка');
            }
        }
        return $this->render('feedback', [
            'model' => $model,
        ]);
    }

    public function actionRecall()
    {
        $model = new CallForm();
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail()) {
            Yii::$app->session->setFlash('success', 'Ваша заявка принята, мы перезвоним вам в ближайшее время');
            return $this->redirect(['site/index']);
        } else {
            Yii::$app->session->setFlash('error', 'Произошла ошибка');
        }
        return $this->render('recall', [
            'model' => $model,
        ]);
    }
}
