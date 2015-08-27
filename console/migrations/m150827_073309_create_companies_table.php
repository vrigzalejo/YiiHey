<?php

use yii\db\Schema;
use yii\db\Migration;

class m150827_073309_create_companies_table extends Migration
{
    public function up()
    {
        // company_id: int(11)
        // company_name: varchar(100)
        // company_email: varchar(100)
        // company_address: varchar(255)
        // company_created_date: datetime
        // company_status: enum('active, inactive')
    }

    public function down()
    {
        echo "m150827_073309_create_companies_table cannot be reverted.\n";

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
