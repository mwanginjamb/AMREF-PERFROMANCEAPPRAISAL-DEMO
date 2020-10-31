<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%objective}}`.
 */
class m201030_103712_add_weighted_objective_score_column_to_objective_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%objective}}', 'weighted_objective_score', $this->float()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%objective}}', 'weighted_objective_score');
    }
}
