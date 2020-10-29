<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%strategicplan}}`.
 */
class m201029_182400_create_strategicplan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%strategicplan}}', [
            'id' => $this->primaryKey(),
            'start_year' => $this->integer()->notNull(),
            'end_year' => $this->integer()->notNull(),
            'strategicplan_description' => $this->text()->notNull(),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%strategicplan}}');
    }
}
