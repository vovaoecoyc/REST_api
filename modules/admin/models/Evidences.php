<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "evidences".
 *
 * @property integer $id
 * @property string $time
 * @property integer $request_id
 * @property string $counter_name
 * @property integer $counter_id
 * @property integer $counter_num
 * @property integer $service_id
 * @property integer $value
 */
class Evidences extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evidences';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time', 'request_id'], 'required'],
            [['time'], 'safe'],
            [['request_id', 'counter_id', 'counter_num', 'service_id', 'value'], 'integer'],
            [['counter_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
            'request_id' => 'Request ID',
            'counter_name' => 'Counter Name',
            'counter_id' => 'Counter ID',
            'counter_num' => 'Counter Num',
            'service_id' => 'Service ID',
            'value' => 'Value',
        ];
    }
}
