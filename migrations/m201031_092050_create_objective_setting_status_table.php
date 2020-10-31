<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%objective_setting_status}}`.
 */
class m201031_092050_create_objective_setting_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%objective_setting_status}}', [
            'id' => $this->primaryKey(),
            'status' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%objective_setting_status}}');
    }
}
