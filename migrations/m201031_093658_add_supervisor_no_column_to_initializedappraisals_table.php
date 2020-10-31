<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%initializedappraisals}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%employee}}`
 */
class m201031_093658_add_supervisor_no_column_to_initializedappraisals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%initializedappraisals}}', 'supervisor_no', $this->string());

        // creates index for column `supervisor_no`
        $this->createIndex(
            '{{%idx-initializedappraisals-supervisor_no}}',
            '{{%initializedappraisals}}',
            'supervisor_no'
        );

        // add foreign key for table `{{%employee}}`
        $this->addForeignKey(
            '{{%fk-initializedappraisals-supervisor_no}}',
            '{{%initializedappraisals}}',
            'supervisor_no',
            '{{%employee}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%employee}}`
        $this->dropForeignKey(
            '{{%fk-initializedappraisals-supervisor_no}}',
            '{{%initializedappraisals}}'
        );

        // drops index for column `supervisor_no`
        $this->dropIndex(
            '{{%idx-initializedappraisals-supervisor_no}}',
            '{{%initializedappraisals}}'
        );

        $this->dropColumn('{{%initializedappraisals}}', 'supervisor_no');
    }
}
