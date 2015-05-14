<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $project_id
 * @property string $project_name
 * @property string $project_description
 * @property string $project_client
 * @property string $project_startdate
 * @property string $project_enddate
 * @property integer $user_id
 * @property integer $bugs_id
 *
 * @property Bugs[] $bugs
 * @property User $user
 * @property Clients $project
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'project_description', 'project_startdate', 'project_enddate', 'user_id', 'bugs_id'], 'required'],
            [['project_description', 'project_client'], 'string'],
            [['project_startdate', 'project_enddate'], 'safe'],
            [['user_id', 'bugs_id'], 'integer'],
            [['project_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'project_name' => 'Project Name',
            'project_description' => 'Project Description',
            'project_client' => 'Project Client',
            'project_startdate' => 'Project Startdate',
            'project_enddate' => 'Project Enddate',
            'user_id' => 'User ID',
            'bugs_id' => 'Bugs ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBugs()
    {
        return $this->hasMany(Bugs::className(), ['project_id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Clients::className(), ['client_id' => 'project_id']);
    }
}
