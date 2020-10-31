<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%kpi}}`.
 */
class m201030_102101_add_evaluations_column_to_kpi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('kpi','achievement',$this->text());
        $this->addColumn('kpi','mid_year_status',$this->integer());
        $this->addColumn('kpi','appraisee_mid_year_performance_comment',$this->text());
        $this->addColumn('kpi','supervisor_mid_year_performance_comment',$this->text());
        $this->addColumn('kpi','self_rating',$this->integer());
        $this->addColumn('kpi','agreed_rating',$this->integer());
        $this->addColumn('kpi','appraisee_end_year_performance_comment',$this->text());
        $this->addColumn('kpi','supervisor_end_year_performance_comment',$this->text());
        $this->addColumn('kpi','weighted_score',$this->float());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('kpi','achievement');
        $this->dropColumn('kpi','mid_year_status');
        $this->dropColumn('kpi','appraisee_mid_year_performance_comment');
        $this->dropColumn('kpi','supervisor_mid_year_performance_comment');
        $this->dropColumn('kpi','self_rating');
        $this->dropColumn('kpi','agreed_rating');
        $this->dropColumn('kpi','appraisee_end_year_performance_comment');
        $this->dropColumn('kpi','supervisor_end_year_performance_comment');
        $this->dropColumn('kpi','weighted_score');
    }
}
