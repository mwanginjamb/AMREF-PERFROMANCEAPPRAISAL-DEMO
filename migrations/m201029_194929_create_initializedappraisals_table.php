<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%initializedappraisals}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%appraisalcalendar}}`
 * - `{{%department}}`
 */
class m201029_194929_create_initializedappraisals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%initializedappraisals}}', [
            'id' => $this->primaryKey(),
            'appraisalcalendarid' => $this->integer()->notNull(),
            'departmentid' => $this->integer()->notNull(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `appraisalcalendarid`
        $this->createIndex(
            '{{%idx-initializedappraisals-appraisalcalendarid}}',
            '{{%initializedappraisals}}',
            'appraisalcalendarid'
        );

        // add foreign key for table `{{%appraisalcalendar}}`
        $this->addForeignKey(
            '{{%fk-initializedappraisals-appraisalcalendarid}}',
            '{{%initializedappraisals}}',
            'appraisalcalendarid',
            '{{%appraisalcalendar}}',
            'id',
            'CASCADE'
        );

        // creates index for column `departmentid`
        $this->createIndex(
            '{{%idx-initializedappraisals-departmentid}}',
            '{{%initializedappraisals}}',
            'departmentid'
        );

        // add foreign key for table `{{%department}}`
        $this->addForeignKey(
            '{{%fk-initializedappraisals-departmentid}}',
            '{{%initializedappraisals}}',
            'departmentid',
            '{{%department}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%appraisalcalendar}}`
        $this->dropForeignKey(
            '{{%fk-initializedappraisals-appraisalcalendarid}}',
            '{{%initializedappraisals}}'
        );

        // drops index for column `appraisalcalendarid`
        $this->dropIndex(
            '{{%idx-initializedappraisals-appraisalcalendarid}}',
            '{{%initializedappraisals}}'
        );

        // drops foreign key for table `{{%department}}`
        $this->dropForeignKey(
            '{{%fk-initializedappraisals-departmentid}}',
            '{{%initializedappraisals}}'
        );

        // drops index for column `departmentid`
        $this->dropIndex(
            '{{%idx-initializedappraisals-departmentid}}',
            '{{%initializedappraisals}}'
        );

        $this->dropTable('{{%initializedappraisals}}');
    }
}
