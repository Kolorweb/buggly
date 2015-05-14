<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property integer $client_id
 * @property string $client_name
 * @property string $client_email
 * @property integer $client_phone
 * @property integer $user_id
 *
 * @property Projects[] $projects
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_name', 'client_email', 'client_phone', 'user_id'], 'required'],
            [['client_phone', 'user_id'], 'integer'],
            [['client_name', 'client_email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'client_name' => 'Client Name',
            'client_email' => 'Client Email',
            'client_phone' => 'Client Phone',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['client_id' => 'client_id']);
    }
}
