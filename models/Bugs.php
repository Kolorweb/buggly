<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bugs".
 *
 * @property integer $bug_id
 * @property string $bug_name
 * @property string $bug_description
 * @property string $bug_createdDate
 * @property string $bug_status
 * @property integer $project_id
 *
 * @property Projects $project
 */
class Bugs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bugs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bug_name', 'bug_description', 'bug_createdDate', 'bug_status', 'project_id'], 'required'],
            [['bug_description', 'bug_status'], 'string'],
            [['bug_createdDate'], 'safe'],
            [['project_id'], 'integer'],
            [['bug_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bug_id' => 'Bug ID',
            'bug_name' => 'Bug Name',
            'bug_description' => 'Bug Description',
            'bug_createdDate' => 'Bug Created Date',
            'bug_status' => 'Bug Status',
            'project_id' => 'Project ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Projects::className(), ['project_id' => 'project_id']);
    }
}
