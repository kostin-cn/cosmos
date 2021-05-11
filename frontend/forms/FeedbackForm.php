<?php

namespace frontend\forms;

use Yii;
use yii\base\Model;
use common\entities\Feedback;

class FeedbackForm extends Model
{
    public $name;
    public $email;
    public $message;
    public $verifyCode;
    public $data_collection_checkbox;

    public function rules()
    {
        return array_filter([
            [['message', 'name', 'email'], 'required'],
            ['email', 'email'],
            ['verifyCode', 'captcha', 'captchaAction' => 'site/captcha'],
            [['message'], 'string'],
            [['data_collection_checkbox'], 'required', 'requiredValue' => 1, 'message' => Yii::t('app', 'Необходимо ваше согласие'),],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'message' => Yii::t('app', 'Ваше сообщение'),
            'name' => Yii::t('app', 'Ваше имя'),
            'email' => Yii::t('app', 'Ваш E-mail'),
            'verifyCode' => Yii::t('app', 'Проверочный код'),
            'data_collection_checkbox' => Yii::t('app', 'Согласие на обработку персональных данных'),
        ];
    }

    public function create()
    {
        $model = new Feedback();
        $model->name = $this->name;
        $model->email = $this->email;
        $model->message = $this->message;
        return $model->save();
    }

    private $html;

    public function sendEmail()
    {
        $this->html .= "<style>";
        $this->html .= ".h2{ font-size:2em; font-weight:lighter; text-transform:uppercase;}";
        $this->html .= "</style>";
        $this->html .= "Вам было отправлено сообщение через форму обратной связи";
        $this->html .= "<table>";
        $this->html .= "<tr><td colspan='2' class='form-heading' ><h2></h2></td><td></td></tr>";
        $this->html .= "<tr><td>Автор</td><td>: {$this->name}</td></tr>";
        $this->html .= "<tr><td>E-Mail автора</td><td>: {$this->email}</td></tr>";
        $this->html .= "<tr><td>Текст сообщения</td><td>: {$this->message}</td></tr>";
        $this->html .= "</table>";

        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom([Yii::$app->params['siteEmail'] => Yii::$app->name])
            ->setSubject('Сообщение из формы обратной связи')
            ->setHtmlBody($this->html)
            ->send();
    }
}