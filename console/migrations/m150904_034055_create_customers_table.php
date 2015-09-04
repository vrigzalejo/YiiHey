<?php

use yii\db\Migration;

class m150904_034055_create_customers_table extends Migration
{
    public function up()
    {
        // customer_id: int(11)
        // customer_name: varchar(100)
        // zip_code: varchar(20)
        // city: varchar(100)
        // province: varchar(100)

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%customers}}', [
            'customer_id'   => $this->primaryKey(),
            'customer_name' => $this->string( 100 )->notNull(),
            'zip_code'      => $this->string( 20 )->notNull(),
            'city'          => $this->string( 100 )->notNull(),
            'province'      => $this->string( 100 )->notNull(),
        ], $tableOptions );
    }

    public function down()
    {
        $this->dropTable( '{{%customers}}' );
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
