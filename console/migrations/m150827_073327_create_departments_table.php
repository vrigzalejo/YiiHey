<?php

use yii\db\Schema;
use yii\db\Migration;

class m150827_073327_create_departments_table extends Migration
{
    public function up()
    {
        // department_id: int(11)
        // branches_branch_id: int(11)
        // department_name: varchar(100)
        // company_company_id: int(11)
        // department_created_date: datetime
        // department_status: enum('active, inactive')

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable('{{%departments}}', [
            'department_id' => $this->primaryKey(),
            'branches_branch_id' => $this->integer(),
            'department_name' => $this->string(100)->notNull(),
            'company_company_id' => $this->integer(),
            'department_created_date' => $this->dateTime()->notNull(),
            'department_status' => 'enum(\'active\', \'inactive\') NOT NULL',
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable( '{{%departments}}' );
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
