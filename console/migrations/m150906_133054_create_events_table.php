<?php

use yii\db\Schema;
use yii\db\Migration;

class m150906_133054_create_events_table extends Migration
{
    public function up()
    {
        // id: int(11)
        // title: varchar(100)
        // description: text
        // created_date: datetime

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%events}}', [
            'id'           => $this->primaryKey(),
            'title'        => $this->string( 100 )->notNull(),
            'text'         => $this->text()->notNull(),
            'created_date' => $this->date(),
        ], $tableOptions );
    }

    public function down()
    {
        $this->dropTable( '{{%events}}' );
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
