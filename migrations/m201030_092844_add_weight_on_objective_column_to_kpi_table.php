<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%kpi}}`.
 */
class m201030_092844_add_weight_on_objective_column_to_kpi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%kpi}}', 'weight_on_objective', $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%kpi}}', 'weight_on_objective');
    }
}
