<?php

use yii\db\Schema;
use yii\db\Migration;

class m150831_033505_create_emails_table extends Migration
{
    public function up()
    {
        // id: int(11)
        // receiver_name: varchar(50)
        // receiver_email: varchar(200)
        // subject: varchar(255)
        // content: text
        // attachment: varchar(255)
    }

    public function down()
    {
        echo "m150831_033505_create_emails_table cannot be reverted.\n";

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
