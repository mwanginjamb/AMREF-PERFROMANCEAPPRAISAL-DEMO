<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%objective}}`.
 */
class m220411_203458_add_objective_measure_column_to_objective_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%objective}}', 'performance_level', $this->string());
        $this->addColumn('{{%objective}}', 'performance_comment', $this->text());
        $this->addColumn('{{%objective}}', 'appraisee_self_rating', $this->integer());
        $this->addColumn('{{%objective}}', 'appraiser_rating', $this->integer());
        $this->addColumn('{{%objective}}', 'agreed_rating', $this->integer());
        $this->addColumn('{{%objective}}', 'rating_comments', $this->text());
        $this->addColumn('{{%objective}}', 'employee_comments', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%objective}}', 'performance_level');
        $this->dropColumn('{{%objective}}', 'performance_comment');
        $this->dropColumn('{{%objective}}', 'appraisee_self_rating');
        $this->dropColumn('{{%objective}}', 'appraiser_rating');
        $this->dropColumn('{{%objective}}', 'agreed_rating');
        $this->dropColumn('{{%objective}}', 'rating_comments');
        $this->dropColumn('{{%objective}}', 'employee_comments');
    }
}
