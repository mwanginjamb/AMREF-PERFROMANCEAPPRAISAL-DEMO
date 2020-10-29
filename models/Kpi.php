<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "kpi".
 *
 * @property int $id
 * @property int $objectiveid
 * @property string $kpi
 * @property int|null $updated_by
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Objective $objective
 */
class Kpi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kpi';
    }

    public function behaviors()
    {
        return [
            BlameableBehavior::class,
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['objectiveid', 'kpi'], 'required'],
            [['objectiveid', 'updated_by', 'created_by', 'created_at', 'updated_at'], 'integer'],
            [['kpi'], 'string'],
            [['objectiveid'], 'exist', 'skipOnError' => true, 'targetClass' => Objective::className(), 'targetAttribute' => ['objectiveid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'objectiveid' => 'Objectiveid',
            'kpi' => 'Kpi',
            'updated_by' => 'Updated By',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Objective]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\ObjectiveQuery
     */
    public function getObjective()
    {
        return $this->hasOne(Objective::className(), ['id' => 'objectiveid']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\KpiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\KpiQuery(get_called_class());
    }
}
