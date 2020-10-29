<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "initializedappraisals".
 *
 * @property int $id
 * @property int $appraisalcalendarid
 * @property int $departmentid
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Appraisalcalendar $appraisalcalendar
 * @property Department $department
 */
class Initializedappraisals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'initializedappraisals';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['appraisalcalendarid', 'departmentid'], 'required'],
            [['appraisalcalendarid', 'departmentid', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['appraisalcalendarid'], 'exist', 'skipOnError' => true, 'targetClass' => Appraisalcalendar::className(), 'targetAttribute' => ['appraisalcalendarid' => 'id']],
            [['departmentid'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['departmentid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'appraisalcalendarid' => 'Appraisal Calendar ID',
            'departmentid' => 'Departmentid',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Appraisalcalendar]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\AppraisalcalendarQuery
     */
    public function getAppraisalcalendar()
    {
        return $this->hasOne(Appraisalcalendar::className(), ['id' => 'appraisalcalendarid']);
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\DepartmentQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'departmentid']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\InitializedappraisalsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\InitializedappraisalsQuery(get_called_class());
    }
}
