<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_activity".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $date_created
 * @property string $action
 */
class UserActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'date_created', 'action'], 'required'],
            [['user_id', 'date_created'], 'integer'],
            [['action'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'date_created' => Yii::t('app', 'Date Created'),
            'action' => Yii::t('app', 'Action'),
        ];
    }
}
