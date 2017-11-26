<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sms".
 *
 * @property integer $id
 * @property string $num
 * @property string $text
 * @property integer $state
 * @property string $response
 */
class Sms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'text'], 'required'],
            [['text', 'response'], 'string'],
            [['state'], 'integer'],
            [['num'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num' => 'Num',
            'text' => 'Text',
            'state' => 'State',
            'response' => 'Response',
        ];
    }
}
