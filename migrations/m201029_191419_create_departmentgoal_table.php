<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%departmentgoal}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%department}}`
 * - `{{%organizationalgoal}}`
 * - `{{%appraisalcalendar}}`
 */
class m201029_191419_create_departmentgoal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%departmentgoal}}', [
            'id' => $this->primaryKey(),
            'departmentgoal' => $this->text()->notNUll(),
            'departmentid' => $this->integer()->notNull(),
            'organization_goal_id' => $this->integer(),
            'calendarid' => $this->integer()->notNull(),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `departmentid`
        $this->createIndex(
            '{{%idx-departmentgoal-departmentid}}',
            '{{%departmentgoal}}',
            'departmentid'
        );

        // add foreign key for table `{{%department}}`
        $this->addForeignKey(
            '{{%fk-departmentgoal-departmentid}}',
            '{{%departmentgoal}}',
            'departmentid',
            '{{%department}}',
            'id',
            'CASCADE'
        );

        // creates index for column `organization_goal_id`
        $this->createIndex(
            '{{%idx-departmentgoal-organization_goal_id}}',
            '{{%departmentgoal}}',
            'organization_goal_id'
        );

        // add foreign key for table `{{%organizationalgoal}}`
        $this->addForeignKey(
            '{{%fk-departmentgoal-organization_goal_id}}',
            '{{%departmentgoal}}',
            'organization_goal_id',
            '{{%organizationalgoal}}',
            'id',
            'CASCADE'
        );

        // creates index for column `calendarid`
        $this->createIndex(
            '{{%idx-departmentgoal-calendarid}}',
            '{{%departmentgoal}}',
            'calendarid'
        );

        // add foreign key for table `{{%appraisalcalendar}}`
        $this->addForeignKey(
            '{{%fk-departmentgoal-calendarid}}',
            '{{%departmentgoal}}',
            'calendarid',
            '{{%appraisalcalendar}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%department}}`
        $this->dropForeignKey(
            '{{%fk-departmentgoal-departmentid}}',
            '{{%departmentgoal}}'
        );

        // drops index for column `departmentid`
        $this->dropIndex(
            '{{%idx-departmentgoal-departmentid}}',
            '{{%departmentgoal}}'
        );

        // drops foreign key for table `{{%organizationalgoal}}`
        $this->dropForeignKey(
            '{{%fk-departmentgoal-organization_goal_id}}',
            '{{%departmentgoal}}'
        );

        // drops index for column `organization_goal_id`
        $this->dropIndex(
            '{{%idx-departmentgoal-organization_goal_id}}',
            '{{%departmentgoal}}'
        );

        // drops foreign key for table `{{%appraisalcalendar}}`
        $this->dropForeignKey(
            '{{%fk-departmentgoal-calendarid}}',
            '{{%departmentgoal}}'
        );

        // drops index for column `calendarid`
        $this->dropIndex(
            '{{%idx-departmentgoal-calendarid}}',
            '{{%departmentgoal}}'
        );

        $this->dropTable('{{%departmentgoal}}');
    }
}
