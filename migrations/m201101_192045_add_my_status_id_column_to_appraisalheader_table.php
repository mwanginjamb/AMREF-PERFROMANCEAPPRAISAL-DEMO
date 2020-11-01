<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%appraisalheader}}`.
 */
class m201101_192045_add_my_status_id_column_to_appraisalheader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%appraisalheader}}', 'my_status_id', $this->integer()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%appraisalheader}}', 'my_status_id');
    }
}
