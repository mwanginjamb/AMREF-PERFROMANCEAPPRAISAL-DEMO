<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "objective".
 *
 * @property int $id
 * @property int $departmentgoalid
 * @property string $objective
 * @property int|null $updated_by
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int $weight
 * @property float|null $weighted_objective_score
 * @property int|null $employee_no
 * @property int|null $appraisal_id
 * @property string|null $performance_level
 * @property string|null $performance_comment
 * @property int|null $appraisee_self_rating
 * @property int|null $appraiser_rating
 * @property int|null $agreed_rating
 * @property string|null $rating_comments
 * @property string|null $employee_comments
 *
 * @property Kpi[] $kpis
 */
class Objective extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'objective';
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
            [['departmentgoalid', 'objective', 'weight'], 'required'],
            [['departmentgoalid', 'updated_by', 'created_by', 'created_at', 'updated_at', 'weight', 'employee_no', 'appraisal_id', 'appraisee_self_rating', 'appraiser_rating', 'agreed_rating'], 'integer'],
            [['objective', 'performance_comment', 'rating_comments', 'employee_comments'], 'string'],
            [['weighted_objective_score'], 'number'],
            [['performance_level'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'departmentgoalid' => 'Departmentgoalid',
            'objective' => 'Objective',
            'updated_by' => 'Updated By',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'weight' => 'Weight',
            'weighted_objective_score' => 'Weighted Objective Score',
            'employee_no' => 'Employee No',
            'appraisal_id' => 'Appraisal ID',
            'performance_level' => 'Performance Level',
            'performance_comment' => 'Performance Comment',
            'appraisee_self_rating' => 'Appraisee Self Rating',
            'appraiser_rating' => 'Appraiser Rating',
            'agreed_rating' => 'Agreed Rating',
            'rating_comments' => 'Rating Comments',
            'employee_comments' => 'Employee Comments',
        ];
    }

    /**
     * Gets query for [[Kpis]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\KpiQuery
     */
    public function getKpis()
    {
        return $this->hasMany(Kpi::className(), ['objectiveid' => 'id']);
    }

    /**
     * Gets query for [[Departmentgoal]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\DepartmentgoalQuery
     */
    public function getDepartmentgoal()
    {
        return $this->hasOne(Departmentgoal::className(), ['id' => 'departmentgoalid']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\ObjectiveQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\ObjectiveQuery(get_called_class());
    }
}
