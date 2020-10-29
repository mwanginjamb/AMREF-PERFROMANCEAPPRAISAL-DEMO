<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%department}}`
 * - `{{%user}}`
 */
class m201029_193315_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee}}', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string()->notNUll(),
            'middlename' => $this->string()->notNull(),
            'lastname' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'cell' => $this->string()->notNull(),
            'employee_no' => $this->string(),
            'departmentid' => $this->integer(),
            'nhif' => $this->string(),
            'nssf' => $this->string(),
            'id' => $this->string(),
            'passportno' => $this->string(),
            'krapin' => $this->string(),
            'userid' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `departmentid`
        $this->createIndex(
            '{{%idx-employee-departmentid}}',
            '{{%employee}}',
            'departmentid'
        );

        // add foreign key for table `{{%department}}`
        $this->addForeignKey(
            '{{%fk-employee-departmentid}}',
            '{{%employee}}',
            'departmentid',
            '{{%department}}',
            'id',
            'CASCADE'
        );

        // creates index for column `userid`
        $this->createIndex(
            '{{%idx-employee-userid}}',
            '{{%employee}}',
            'userid'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-employee-userid}}',
            '{{%employee}}',
            'userid',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%department}}`
        $this->dropForeignKey(
            '{{%fk-employee-departmentid}}',
            '{{%employee}}'
        );

        // drops index for column `departmentid`
        $this->dropIndex(
            '{{%idx-employee-departmentid}}',
            '{{%employee}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-employee-userid}}',
            '{{%employee}}'
        );

        // drops index for column `userid`
        $this->dropIndex(
            '{{%idx-employee-userid}}',
            '{{%employee}}'
        );

        $this->dropTable('{{%employee}}');
    }
}
