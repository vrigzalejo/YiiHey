<?php

use yii\db\Schema;
use yii\db\Migration;

class m150828_073217_create_auth_item_child_table extends Migration
{
    public function up()
    {
     /*
        create table `auth_item_child`
        (
        `parent` varchar(64) not null,
        `child` varchar(64) not null,
        primary key (`parent`, `child`),
        foreign key (`parent`) references `auth_item` (`name`) on delete cascade on update cascade,
        foreign key (`child`) references `auth_item` (`name`) on delete cascade on update cascade
        ) engine InnoDB;
      */
    }

    public function down()
    {
        echo "m150828_073217_create_auth_item_child_table cannot be reverted.\n";

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
