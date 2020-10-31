<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rating}}`.
 */
class m201030_093718_create_rating_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rating}}', [
            'id' => $this->primaryKey(),
            'rating' => $this->integer()->notNull(),
            'rating_description' => $this->string()->notNull(),
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
        $this->dropTable('{{%rating}}');
    }
}
