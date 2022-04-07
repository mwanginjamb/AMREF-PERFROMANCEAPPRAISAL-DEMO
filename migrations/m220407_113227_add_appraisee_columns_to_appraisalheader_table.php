<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%appraisalheader}}`.
 */
class m220407_113227_add_appraisee_columns_to_appraisalheader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%appraisalheader}}', 'initialization_id', $this->integer());
        $this->addColumn('{{%appraisalheader}}', 'created_at', $this->integer(15));
        $this->addColumn('{{%appraisalheader}}', 'updated_at', $this->integer(15));
        $this->addColumn('{{%appraisalheader}}', 'created_by', $this->integer(15));
        $this->addColumn('{{%appraisalheader}}', 'updated_by', $this->integer(15));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%appraisalheader}}', 'appraisee_department');
        $this->dropColumn('{{%appraisalheader}}', 'initialization_id');
        $this->dropColumn('{{%appraisalheader}}', 'created_at');
        $this->dropColumn('{{%appraisalheader}}', 'updated_at');
        $this->dropColumn('{{%appraisalheader}}', 'created_by');
        $this->dropColumn('{{%appraisalheader}}', 'updated_by');
    }
}
