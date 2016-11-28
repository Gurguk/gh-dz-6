<?php
namespace frontend\models;

use Yii;

class CompanyForm extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'companies';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'site', 'address'], 'required'],
            ['name', 'string', 'length' => [4, 24]],
            ['name', 'match', 'pattern' => '/^[A-Za-z0-9]\w*$/i'],
            [['name', 'email'], 'trim'],
            ['site', 'url', 'defaultScheme' => 'http'],
            ['email', 'email'],
            ['date', 'trim'],
            ['description', 'default', 'value' => null],
            ['description', 'safe'],
            ['description', 'default', 'value' => 'description'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Company name',
            'date' => 'Date of registration',
        ];
    }

}