<?php

use yii\db\Migration;

/**
 * Class m201031_221409_drop_foreignKey_on_table_initializedappraisals
 */
class m201031_221409_drop_foreignKey_on_table_initializedappraisals extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('{{%fk-initializedappraisals-supervisor_no}}','{{%initializedappraisals}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201031_221409_drop_foreignKey_on_table_initializedappraisals cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201031_221409_drop_foreignKey_on_table_initializedappraisals cannot be reverted.\n";

        return false;
    }
    */
}
