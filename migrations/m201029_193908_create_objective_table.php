<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%objective}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%departmentgoal}}`
 */
class m201029_193908_create_objective_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%objective}}', [
            'id' => $this->primaryKey(),
            'departmentgoalid' => $this->integer()->notNull(),
            'objective' => $this->text()->notNull(),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `departmentgoalid`
        $this->createIndex(
            '{{%idx-objective-departmentgoalid}}',
            '{{%objective}}',
            'departmentgoalid'
        );

        // add foreign key for table `{{%departmentgoal}}`
        $this->addForeignKey(
            '{{%fk-objective-departmentgoalid}}',
            '{{%objective}}',
            'departmentgoalid',
            '{{%departmentgoal}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%departmentgoal}}`
        $this->dropForeignKey(
            '{{%fk-objective-departmentgoalid}}',
            '{{%objective}}'
        );

        // drops index for column `departmentgoalid`
        $this->dropIndex(
            '{{%idx-objective-departmentgoalid}}',
            '{{%objective}}'
        );

        $this->dropTable('{{%objective}}');
    }
}
