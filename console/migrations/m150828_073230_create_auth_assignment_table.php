<?php

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
        `created_at` datetime,
        primary key (`item_name`, `user_id`),
        foreign key (`item_name`) references `auth_item` (`name`) on delete cascade on update cascade
        ) engine InnoDB;
        */

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%auth_assignment}}', [
            'item_name'  => $this->string( 64 )->notNull(),
            'user_id'    => $this->integer()->notNull(),
            'created_at' => $this->dateTime(),
        ], $tableOptions );

    }

    public function down()
    {
        $this->dropTable( '{{%auth_assignment}}' );
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
