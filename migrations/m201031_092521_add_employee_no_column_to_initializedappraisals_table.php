<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%initializedappraisals}}`.
 */
class m201031_092521_add_employee_no_column_to_initializedappraisals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%initializedappraisals}}', 'employee_no', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%initializedappraisals}}', 'employee_no');
    }
}
