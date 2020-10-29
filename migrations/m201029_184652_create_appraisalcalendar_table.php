<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appraisalcalendar}}`.
 */
class m201029_184652_create_appraisalcalendar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%appraisalcalendar}}', [
            'id' => $this->primaryKey(),
            'yearstart' => $this->integer()->notNull(),
            'yearend' => $this->integer()->notNull(),
            'calendar_year_description' => $this->text()->notNull(),
            'mid_year_start' => $this->integer(),
            'mid_year_end' => $this->integer(),
            'end_year_start' => $this->integer(),
            'end_year_end' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%appraisalcalendar}}');
    }
}
