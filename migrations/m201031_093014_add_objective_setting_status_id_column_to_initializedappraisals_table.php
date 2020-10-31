<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%initializedappraisals}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%objective_setting_status}}`
 */
class m201031_093014_add_objective_setting_status_id_column_to_initializedappraisals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%initializedappraisals}}', 'objective_setting_status_id', $this->integer());

        // creates index for column `objective_setting_status_id`
        $this->createIndex(
            '{{%idx-initializedappraisals-objective_setting_status_id}}',
            '{{%initializedappraisals}}',
            'objective_setting_status_id'
        );

        // add foreign key for table `{{%objective_setting_status}}`
        $this->addForeignKey(
            '{{%fk-initializedappraisals-objective_setting_status_id}}',
            '{{%initializedappraisals}}',
            'objective_setting_status_id',
            '{{%objective_setting_status}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%objective_setting_status}}`
        $this->dropForeignKey(
            '{{%fk-initializedappraisals-objective_setting_status_id}}',
            '{{%initializedappraisals}}'
        );

        // drops index for column `objective_setting_status_id`
        $this->dropIndex(
            '{{%idx-initializedappraisals-objective_setting_status_id}}',
            '{{%initializedappraisals}}'
        );

        $this->dropColumn('{{%initializedappraisals}}', 'objective_setting_status_id');
    }
}
