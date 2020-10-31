<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%initializedappraisals}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%appraisal_status}}`
 */
class m201031_093227_add_ey_status_id_column_to_initializedappraisals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%initializedappraisals}}', 'ey_status_id', $this->integer());

        // creates index for column `ey_status_id`
        $this->createIndex(
            '{{%idx-initializedappraisals-ey_status_id}}',
            '{{%initializedappraisals}}',
            'ey_status_id'
        );

        // add foreign key for table `{{%appraisal_status}}`
        $this->addForeignKey(
            '{{%fk-initializedappraisals-ey_status_id}}',
            '{{%initializedappraisals}}',
            'ey_status_id',
            '{{%appraisal_status}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%appraisal_status}}`
        $this->dropForeignKey(
            '{{%fk-initializedappraisals-ey_status_id}}',
            '{{%initializedappraisals}}'
        );

        // drops index for column `ey_status_id`
        $this->dropIndex(
            '{{%idx-initializedappraisals-ey_status_id}}',
            '{{%initializedappraisals}}'
        );

        $this->dropColumn('{{%initializedappraisals}}', 'ey_status_id');
    }
}
