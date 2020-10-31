<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appraisal_status}}`.
 */
class m201031_092131_create_appraisal_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%appraisal_status}}', [
            'id' => $this->primaryKey(),
            'status' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%appraisal_status}}');
    }
}
