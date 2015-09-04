<?php

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

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%auth_item_child}}', [
            'parent' => $this->string( 64 )->notNull(),
            'child'  => $this->string( 64 )->notNull(),
        ], $tableOptions );

        $this->addPrimaryKey( 'PK_auth_item_child', '{{%auth_item_child}}', [ 'parent', 'child' ] );
    }

    public function down()
    {
        $this->dropTable( '{{%auth_item_child}}' );
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
