<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%midyearperformancelevels}}`.
 */
class m201030_104041_create_midyearperformancelevels_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%midyearperformancelevels}}', [
            'id' => $this->primaryKey(),
            'level' => $this->string()->notNull(),
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
        $this->dropTable('{{%midyearperformancelevels}}');
    }
}
