<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%organizationalgoal}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%strategicplan}}`
 */
class m201029_183354_create_organizationalgoal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%organizationalgoal}}', [
            'id' => $this->primaryKey(),
            'goal' => $this->text()->notNull(),
            'strategicplanid' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `strategicplanid`
        $this->createIndex(
            '{{%idx-organizationalgoal-strategicplanid}}',
            '{{%organizationalgoal}}',
            'strategicplanid'
        );

        // add foreign key for table `{{%strategicplan}}`
        $this->addForeignKey(
            '{{%fk-organizationalgoal-strategicplanid}}',
            '{{%organizationalgoal}}',
            'strategicplanid',
            '{{%strategicplan}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%strategicplan}}`
        $this->dropForeignKey(
            '{{%fk-organizationalgoal-strategicplanid}}',
            '{{%organizationalgoal}}'
        );

        // drops index for column `strategicplanid`
        $this->dropIndex(
            '{{%idx-organizationalgoal-strategicplanid}}',
            '{{%organizationalgoal}}'
        );

        $this->dropTable('{{%organizationalgoal}}');
    }
}
