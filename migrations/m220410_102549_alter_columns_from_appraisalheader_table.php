<?php

use yii\db\Migration;

/**
 * Class m220410_102549_alter_columns_from_appraisalheader_table
 */
class m220410_102549_alter_columns_from_appraisalheader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%appraisalheader}}','employee_id',$this->string());
        $this->alterColumn('{{%appraisalheader}}','supervisor_id',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220410_102549_alter_columns_from_appraisalheader_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220410_102549_alter_columns_from_appraisalheader_table cannot be reverted.\n";

        return false;
    }
    */
}
