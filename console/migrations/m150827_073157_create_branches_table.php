<?php

use yii\db\Schema;
use yii\db\Migration;

class m150827_073157_create_branches_table extends Migration
{
    public function up()
    {
        // branch_id: int(11)
        // companies_company_id: int(11)
        // branch_name: varchar(100)
        // branch_address: varchar(255)
        // branch_created_date: datetime
        // branch_status: enum('active, inactive')

    }

    public function down()
    {
        echo "m150827_073157_create_branches_table cannot be reverted.\n";

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
