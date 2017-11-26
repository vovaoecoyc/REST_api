<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "requests".
 *
 * @property integer $id
 * @property string $time
 * @property string $num
 * @property integer $channel
 * @property string $callid
 * @property string $account
 * @property string $addr
 * @property string $uk
 */
class Requests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
            [['num'], 'required'],
            [['channel'], 'integer'],
            [['num'], 'string', 'max' => 12],
            [['callid'], 'string', 'max' => 64],
            [['account'], 'string', 'max' => 45],
            [['addr', 'uk'], 'string', 'max' => 128],
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
            'num' => 'Num',
            'channel' => 'Channel',
            'callid' => 'Callid',
            'account' => 'Account',
            'addr' => 'Addr',
            'uk' => 'Uk',
        ];
    }
}
