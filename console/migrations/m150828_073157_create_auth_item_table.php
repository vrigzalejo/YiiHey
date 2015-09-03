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
        `created_at` datetime,
        `updated_at` datetime,
        primary key (`name`),
        foreign key (`rule_name`) references `auth_rule` (`name`) on delete set null on update cascade,
        key `type` (`type`)
        ) engine InnoDB;
        */

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%auth_item}}', [
            'name'        => $this->string( 64 )->notNull(),
            'type'        => $this->integer()->notNull(),
            'description' => $this->text(),
            'rule_name'   => $this->string( 64 ),
            'data'        => $this->text(),
            'created_at'  => $this->dateTime(),
            'updated_at'  => $this->dateTime(),
        ], $tableOptions );

        $this->addPrimaryKey( 'name', '{{%auth_item}}', 'name' );

    }

    public function down()
    {
        $this->dropTable( '{{%auth_item}}' );
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
