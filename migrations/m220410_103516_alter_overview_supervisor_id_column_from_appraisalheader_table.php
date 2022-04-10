<?php

use yii\db\Migration;

/**
 * Class m220410_103516_alter_overview_supervisor_id_column_from_appraisalheader_table
 */
class m220410_103516_alter_overview_supervisor_id_column_from_appraisalheader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%appraisalheader}}','overview_supervisor_id',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220410_103516_alter_overview_supervisor_id_column_from_appraisalheader_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220410_103516_alter_overview_supervisor_id_column_from_appraisalheader_table cannot be reverted.\n";

        return false;
    }
    */
}
