<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appraisal_goal_setting_status}}`.
 */
class m220414_154705_create_appraisal_goal_setting_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%goal_setting_appraisal_status}}', [
            'id' => $this->primaryKey(),
            'status' => $this->string(100),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%goal_setting_appraisal_status}}');
    }
}
