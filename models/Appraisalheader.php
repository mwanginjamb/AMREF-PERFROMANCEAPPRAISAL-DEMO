<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appraisalheader".
 *
 * @property int $id
 * @property string|null $supervisor_id
 * @property string|null $supervisor_name
 * @property string|null $employee_id
 * @property string|null $employee_name
 * @property int|null $overview_supervisor_id
 * @property string|null $overview_name
 * @property int|null $appraisee_department
 * @property string|null $appraisal_start_date
 * @property string|null $appraisal_end_date
 * @property string|null $goal_setting_start_date
 * @property string|null $goal_setting_end_date
 * @property int|null $goal_setting_status
 * @property string|null $my_start_date
 * @property string|null $my_end_date
 * @property int|null $my_status
 * @property string|null $ey_start_date
 * @property string|null $ey_end_date
 * @property int|null $ey_status
 * @property string|null $mid_year_comments_employee
 * @property string|null $mid_year_comments_supervisor
 * @property string|null $mid_year_comments_overview
 * @property int|null $recommended_action
 * @property string|null $ey_supervisor_comments
 * @property string|null $ey_overview_comments
 * @property string|null $ey_employee_comments
 * @property int|null $is_goal_setting
 * @property int|null $is_mid_year_appraisal
 * @property int|null $is_end_year_appraisal
 * @property int|null $is_peer_appraisal
 * @property int|null $is_agreement
 * @property float|null $objectives_score
 * @property float|null $behaviour_score
 * @property float|null $peer_Score
 * @property int|null $initialization_id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Appraisalheader extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appraisalheader';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['overview_supervisor_id', 'appraisee_department', 'goal_setting_status', 'my_status', 'ey_status', 'recommended_action', 'is_goal_setting', 'is_mid_year_appraisal', 'is_end_year_appraisal', 'is_peer_appraisal', 'is_agreement', 'initialization_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['appraisal_start_date', 'appraisal_end_date', 'goal_setting_start_date', 'goal_setting_end_date', 'my_start_date', 'my_end_date', 'ey_start_date', 'ey_end_date'], 'safe'],
            [['mid_year_comments_employee', 'mid_year_comments_supervisor', 'mid_year_comments_overview', 'ey_supervisor_comments', 'ey_overview_comments', 'ey_employee_comments'], 'string'],
            [['objectives_score', 'behaviour_score', 'peer_Score'], 'number'],
            [['supervisor_id', 'supervisor_name', 'employee_id'], 'string', 'max' => 255],
            [['employee_name', 'overview_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'supervisor_id' => 'Supervisor ID',
            'supervisor_name' => 'Supervisor Name',
            'employee_id' => 'Employee ID',
            'employee_name' => 'Employee Name',
            'overview_supervisor_id' => 'Overview Supervisor ID',
            'overview_name' => 'Overview Name',
            'appraisee_department' => 'Appraisee Department',
            'appraisal_start_date' => 'Appraisal Start Date',
            'appraisal_end_date' => 'Appraisal End Date',
            'goal_setting_start_date' => 'Goal Setting Start Date',
            'goal_setting_end_date' => 'Goal Setting End Date',
            'goal_setting_status' => 'Goal Setting Status',
            'my_start_date' => 'My Start Date',
            'my_end_date' => 'My End Date',
            'my_status' => 'My Status',
            'ey_start_date' => 'Ey Start Date',
            'ey_end_date' => 'Ey End Date',
            'ey_status' => 'Ey Status',
            'mid_year_comments_employee' => 'Mid Year Comments Employee',
            'mid_year_comments_supervisor' => 'Mid Year Comments Supervisor',
            'mid_year_comments_overview' => 'Mid Year Comments Overview',
            'recommended_action' => 'Recommended Action',
            'ey_supervisor_comments' => 'Ey Supervisor Comments',
            'ey_overview_comments' => 'Ey Overview Comments',
            'ey_employee_comments' => 'Ey Employee Comments',
            'is_goal_setting' => 'Is Goal Setting',
            'is_mid_year_appraisal' => 'Is Mid Year Appraisal',
            'is_end_year_appraisal' => 'Is End Year Appraisal',
            'is_peer_appraisal' => 'Is Peer Appraisal',
            'is_agreement' => 'Is Agreement',
            'objectives_score' => 'Objectives Score',
            'behaviour_score' => 'Behaviour Score',
            'peer_Score' => 'Peer Score',
            'initialization_id' => 'Initialization ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    public function getInitialization()
    {
        return $this->hasOne(Initializedappraisals::class,['id' => 'initialization_id' ]);
    }

    public function getEmployee()
    {
        return $this->hasOne(Employee::class,['employee_no' => 'employee_id' ]);
    }


    public function getSupervisor()
    {
        return $this->hasOne(Employee::class,['employee_no' => 'supervisor_id' ]);
    }

    public function getDepartmentalobjectives()
    {
        return $this->hasMany(Departmentgoal::class,['departmentid' => 'appraisee_department']);
    }

    public  function getIsAppraisee()
    {
        return $this->employee_id == Yii::$app->user->identity->employee->employee_no;
    }

    public function isSupervisor()
    {
        return $this->supervisor_id == Yii::$app->user->identity->employee->employee_no;
    }

    public function isOverview()
    {
        return $this->overview_supervisor_id == Yii::$app->user->identity->employee->employee_no;
    }

}
