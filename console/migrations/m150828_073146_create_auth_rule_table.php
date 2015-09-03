<?php

use yii\db\Schema;
use yii\db\Migration;

class m150828_073146_create_auth_rule_table extends Migration
{
    public function up()
    {
        /*
        create table `auth_rule`
        (
        `name` varchar(64) not null,
        `data` text,
        `created_at` integer,
        `updated_at` integer, primary key (`name`)
        ) engine InnoDB;
        */
    }

    public function down()
    {
        echo "m150828_073146_create_auth_rule_table cannot be reverted.\n";

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
