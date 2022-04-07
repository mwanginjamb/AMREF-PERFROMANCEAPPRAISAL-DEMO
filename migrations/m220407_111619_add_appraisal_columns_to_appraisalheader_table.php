<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%appraisalheader}}`.
 */
class m220407_111619_add_appraisal_columns_to_appraisalheader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%appraisalheader}}', 'supervisor_id', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'supervisor_name', $this->string());
        $this->addColumn('{{%appraisalheader}}', 'employee_id', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'employee_name', $this->string(150));
        $this->addColumn('{{%appraisalheader}}', 'overview_supervisor_id', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'overview_name', $this->string(150));
        $this->addColumn('{{%appraisalheader}}', 'appraisee_department', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'appraisal_start_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'appraisal_end_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'goal_setting_start_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'goal_setting_end_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'goal_setting_status', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'my_start_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'my_end_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'my_status', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'ey_start_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'ey_end_date', $this->date());
        $this->addColumn('{{%appraisalheader}}', 'ey_status', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'mid_year_comments_employee', $this->text());
        $this->addColumn('{{%appraisalheader}}', 'mid_year_comments_supervisor', $this->text());
        $this->addColumn('{{%appraisalheader}}', 'mid_year_comments_overview', $this->text());
        $this->addColumn('{{%appraisalheader}}', 'recommended_action', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'ey_supervisor_comments', $this->text());
        $this->addColumn('{{%appraisalheader}}', 'ey_overview_comments', $this->text());
        $this->addColumn('{{%appraisalheader}}', 'ey_employee_comments', $this->text());
        $this->addColumn('{{%appraisalheader}}', 'is_goal_setting', $this->boolean());
        $this->addColumn('{{%appraisalheader}}', 'is_mid_year_appraisal', $this->boolean());
        $this->addColumn('{{%appraisalheader}}', 'is_end_year_appraisal', $this->boolean());
        $this->addColumn('{{%appraisalheader}}', 'is_peer_appraisal', $this->boolean());
        $this->addColumn('{{%appraisalheader}}', 'is_agreement', $this->boolean());
        $this->addColumn('{{%appraisalheader}}', 'objectives_score', $this->float());
        $this->addColumn('{{%appraisalheader}}', 'behaviour_score', $this->float());
        $this->addColumn('{{%appraisalheader}}', 'peer_Score', $this->float());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%appraisalheader}}', 'supervisor_id');
        $this->dropColumn('{{%appraisalheader}}', 'supervisor_name');
        $this->dropColumn('{{%appraisalheader}}', 'employee_id');
        $this->dropColumn('{{%appraisalheader}}', 'employee_name');
        $this->dropColumn('{{%appraisalheader}}', 'overview_supervisor_id');
        $this->dropColumn('{{%appraisalheader}}', 'overview_name');
        $this->dropColumn('{{%appraisalheader}}', 'appraisee_department');
        $this->dropColumn('{{%appraisalheader}}', 'appraisal_start_date');
        $this->dropColumn('{{%appraisalheader}}', 'appraisal_end_date');
        $this->dropColumn('{{%appraisalheader}}', 'goal_setting_start_date');
        $this->dropColumn('{{%appraisalheader}}', 'goal_setting_end_date');
        $this->dropColumn('{{%appraisalheader}}', 'goal_setting_status');
        $this->dropColumn('{{%appraisalheader}}', 'my_start_date');
        $this->dropColumn('{{%appraisalheader}}', 'my_end_date');
        $this->dropColumn('{{%appraisalheader}}', 'my_status');
        $this->dropColumn('{{%appraisalheader}}', 'ey_start_date');
        $this->dropColumn('{{%appraisalheader}}', 'ey_end_date');
        $this->dropColumn('{{%appraisalheader}}', 'ey_status');
        $this->dropColumn('{{%appraisalheader}}', 'mid_year_comments_employee');
        $this->dropColumn('{{%appraisalheader}}', 'mid_year_comments_supervisor');
        $this->dropColumn('{{%appraisalheader}}', 'mid_year_comments_overview');
        $this->dropColumn('{{%appraisalheader}}', 'recommended_action');
        $this->dropColumn('{{%appraisalheader}}', 'ey_supervisor_comments');
        $this->dropColumn('{{%appraisalheader}}', 'ey_overview_comments');
        $this->dropColumn('{{%appraisalheader}}', 'ey_employee_comments');
        $this->dropColumn('{{%appraisalheader}}', 'is_goal_setting');
        $this->dropColumn('{{%appraisalheader}}', 'is_mid_year_appraisal');
        $this->dropColumn('{{%appraisalheader}}', 'is_end_year_appraisal');
        $this->dropColumn('{{%appraisalheader}}', 'is_peer_appraisal');
        $this->dropColumn('{{%appraisalheader}}', 'is_agreement');
        $this->dropColumn('{{%appraisalheader}}', 'objectives_score');
        $this->dropColumn('{{%appraisalheader}}', 'behaviour_score');
        $this->dropColumn('{{%appraisalheader}}', 'peer_Score');
    }
}
