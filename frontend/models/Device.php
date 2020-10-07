<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "device".
 *
 * @property int|null $serial
 * @property string|null $store
 * @property string|null $created_at
 */
class Device extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
                'value' => function(){return date("Y-m-d");}
            ],
        ];
    }

    public function rules()
    {
        return [
            [['serial'], 'integer'],
            [['created_at'], 'safe'],
            [['store'], 'string', 'max' => 255],
            [['serial'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'serial' => 'Serial',
            'store' => 'Store',
            'created_at' => 'Created At',
        ];
    }
}
