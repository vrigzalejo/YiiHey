<?php

use yii\db\Schema;
use yii\db\Migration;

class m150828_073230_create_auth_assignment_table extends Migration
{
    public function up()
    {
        /*
        create table `auth_assignment`
        (
        `item_name` varchar(64) not null,
        `user_id` varchar(64) not null,
        `created_at` integer,
        primary key (`item_name`, `user_id`),
        foreign key (`item_name`) references `auth_item` (`name`) on delete cascade on update cascade
        ) engine InnoDB;
        */
    }

    public function down()
    {
//        echo "m150828_073230_create_auth_assignment_table cannot be reverted.\n";
//
//        return false;
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
