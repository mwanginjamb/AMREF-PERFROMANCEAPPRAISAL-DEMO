<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kpi}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%objective}}`
 */
class m201029_194212_create_kpi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kpi}}', [
            'id' => $this->primaryKey(),
            'objectiveid' => $this->integer()->notNull(),
            'kpi' => $this->text()->notNUll(),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `objectiveid`
        $this->createIndex(
            '{{%idx-kpi-objectiveid}}',
            '{{%kpi}}',
            'objectiveid'
        );

        // add foreign key for table `{{%objective}}`
        $this->addForeignKey(
            '{{%fk-kpi-objectiveid}}',
            '{{%kpi}}',
            'objectiveid',
            '{{%objective}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%objective}}`
        $this->dropForeignKey(
            '{{%fk-kpi-objectiveid}}',
            '{{%kpi}}'
        );

        // drops index for column `objectiveid`
        $this->dropIndex(
            '{{%idx-kpi-objectiveid}}',
            '{{%kpi}}'
        );

        $this->dropTable('{{%kpi}}');
    }
}
