<?php

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
        `created_at` datetime,
        `updated_at` datetime, primary key (`name`)
        ) engine InnoDB;
        */

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%auth_rule}}', [
            'name'       => $this->string( 64 )->notNull(),
            'data'       => $this->text(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ], $tableOptions );

        $this->addPrimaryKey( 'PK_auth_rule', '{{%auth_rule}}', 'name' );
    }

    public function down()
    {
        $this->dropTable( '{{%auth_rule}}' );
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
