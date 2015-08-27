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
    }

    public function down()
    {
        echo "m150827_073327_create_departments_table cannot be reverted.\n";

        return false;
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
