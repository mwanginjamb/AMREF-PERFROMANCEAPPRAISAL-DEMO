<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appraisalheader}}`.
 */
class m201101_151515_create_appraisalheader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%appraisalheader}}', [
            'id' => $this->primaryKey(),
            'employee_no' => $this->string()->notNull(),
            'objective_setting_status_id' => $this->integer(),
            'ey_status_id' => $this->integer(),
            'supervisor_no' => $this->string(),
            'initialization_id' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%appraisalheader}}');
    }
}
