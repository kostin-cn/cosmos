<?php

namespace frontend\forms;

use Yii;
use yii\base\Model;

class CallForm extends Model
{
    public $phone;
    public $verifyCode;
    public $data_collection_checkbox;

    public function rules()
    {
        return array_filter([
            [['phone'], 'required'],
            ['verifyCode', 'captcha', 'captchaAction' => 'site/captcha'],
            [['phone'], 'string'],
            [['data_collection_checkbox'], 'required', 'requiredValue' => 1, 'message' => Yii::t('app', 'Необходимо ваше согласие'),],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'phone' => Yii::t('app', 'Телефон'),
            'verifyCode' => Yii::t('app', 'Проверочный код'),
            'data_collection_checkbox' => Yii::t('app', 'Согласие на обработку персональных данных'),
        ];
    }

    private $html;

    public function sendEmail()
    {
        $this->html .= "<style>";
        $this->html .= ".h2{ font-size:2em; font-weight:lighter; text-transform:uppercase;}";
        $this->html .= "</style>";
        $this->html .= "Вам было отправлен запрос на перезвон через форму обратной связи";
        $this->html .= "<table>";
        $this->html .= "<tr><td colspan='2' class='form-heading' ><h2></h2></td><td></td></tr>";
        $this->html .= "<tr><td>Номер телефона</td><td>: <a href='tel:". str_replace([' ', '(', ')', '-'], '', $this->phone) ."'>{$this->phone}</a></td></tr>";
        $this->html .= "</table>";

        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom([Yii::$app->params['siteEmail'] => Yii::$app->name])
            ->setSubject('Запрос перезвона')
            ->setHtmlBody($this->html)
            ->send();
    }
}