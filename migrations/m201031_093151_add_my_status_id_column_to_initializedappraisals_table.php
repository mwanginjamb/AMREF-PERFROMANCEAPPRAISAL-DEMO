<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%initializedappraisals}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%appraisal_status}}`
 */
class m201031_093151_add_my_status_id_column_to_initializedappraisals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%initializedappraisals}}', 'my_status_id', $this->integer());

        // creates index for column `my_status_id`
        $this->createIndex(
            '{{%idx-initializedappraisals-my_status_id}}',
            '{{%initializedappraisals}}',
            'my_status_id'
        );

        // add foreign key for table `{{%appraisal_status}}`
        $this->addForeignKey(
            '{{%fk-initializedappraisals-my_status_id}}',
            '{{%initializedappraisals}}',
            'my_status_id',
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
            '{{%fk-initializedappraisals-my_status_id}}',
            '{{%initializedappraisals}}'
        );

        // drops index for column `my_status_id`
        $this->dropIndex(
            '{{%idx-initializedappraisals-my_status_id}}',
            '{{%initializedappraisals}}'
        );

        $this->dropColumn('{{%initializedappraisals}}', 'my_status_id');
    }
}
