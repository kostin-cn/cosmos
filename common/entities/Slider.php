<?php

namespace common\entities;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;
use backend\components\SortableBehavior;

/**
 * This is the model class for table "{{%slider}}".
 *
 * @property int $id
 * @property string $image_name
 * @property int $sort
 * @property int $status
 *
 * @property UploadedFile $uploadedImageFile
 * @property string $image
 */
class Slider extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%slider}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => SortableBehavior::class,
            ],
        ];
    }

    public function rules()
    {
        return array_filter([
            [['image_name'], 'required'],
            [['sort', 'status'], 'integer'],
            [['image_name'], 'string', 'max' => 50],

            [['uploadedImageFile', 'datum'], 'safe'],
            [['uploadedImageFile'], 'file', 'extensions' => 'png, jpg, jpeg'],
            $this->isNewRecord ? ['uploadedImageFile', 'required'] : null,
        ]);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_name' => 'Изображение',
            'uploadedImageFile' => 'Изображение',
            'sort' => 'Порядок',
            'status' => 'Статус',
        ];
    }

    #################### IMAGES ####################

    private $imageWidth = 1920;
    private $imageHeight = null;

    public function __construct(array $config = [])
    {
        $folderName = str_replace(['{', '}', '%'], '', $this::tableName());
        parent::__construct($config);
        $this->_folder = '/files/' . $folderName . '/';
        $this->_folderPath = Yii::getAlias('@files') . '/' . $folderName . '/';
    }

    public $uploadedImageFile;
    private $_folder;
    private $_folderPath;

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->uploadedImageFile = UploadedFile::getInstance($this, 'uploadedImageFile');
            if ($this->isNewRecord) {
                /* @var $lastModel self */
                $lastModel = self::find()->orderBy(['id' => SORT_DESC])->one();
                $id = $lastModel->id + 1;
            } else {
                $id = $this->id;
            }
            if ($this->uploadedImageFile) {
                if (!$this->isNewRecord) {
                    $this->deleteImage();
                }
                $this->image_name = $id . '_' . time() . '.' . $this->uploadedImageFile->extension;
            }
            return true;
        }
        return false;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if ($this->uploadedImageFile) {
            $path = $this->_folderPath . $this->image_name;
            FileHelper::createDirectory(dirname($path, 1));
            $this->uploadedImageFile->saveAs($path);
            if ($this->uploadedImageFile->extension != 'svg') {
                Image::thumbnail($path, $this->imageWidth, $this->imageHeight)->save($path);
            }
        }
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $this->deleteImage();
    }

    public function deleteImage()
    {
        if ($this->image_name) {
            if (file_exists($this->_folderPath . $this->image_name)) {
                unlink($this->_folderPath . $this->image_name);
            }
        }
    }

    public function removeImage()
    {
        $this->deleteImage();
        $this->image_name = null;
        $this->save();
    }

    public function getImage()
    {
        return $this->_folder . $this->image_name;
    }
}
