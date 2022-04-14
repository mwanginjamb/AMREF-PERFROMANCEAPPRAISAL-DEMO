<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mid_year_goal_setting_status}}`.
 */
class m220414_154734_create_mid_year_goal_setting_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mid_year_appraisal_status}}', [
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
        $this->dropTable('{{%mid_year_appraisal_status}}');
    }
}
