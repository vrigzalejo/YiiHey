<?php

use yii\db\Schema;
use yii\db\Migration;

class m150828_073157_create_auth_item_table extends Migration
{
    public function up()
    {
        /*
        create table `auth_item`
        (
        `name` varchar(64) not null,
        `type` integer not null,
        `description` text,
        `rule_name` varchar(64),
        `data` text,
        `created_at` integer,
        `updated_at` integer,
        primary key (`name`),
        foreign key (`rule_name`) references `auth_rule` (`name`) on delete set null on update cascade,
        key `type` (`type`)
        ) engine InnoDB;
        */
    }

    public function down()
    {
        echo "m150828_073157_create_auth_item_table cannot be reverted.\n";

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
