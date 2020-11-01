<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%objective}}`.
 */
class m201101_201710_add_employee_no_column_appraisal_id_column_to_objective_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%objective}}', 'employee_no', $this->integer());
        $this->addColumn('{{%objective}}', 'appraisal_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%objective}}', 'employee_no');
        $this->dropColumn('{{%objective}}', 'appraisal_id');
    }
}
