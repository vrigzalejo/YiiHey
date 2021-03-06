<?php

use yii\db\Migration;

class m150902_031326_create_locations_table extends Migration
{
    public function up()
    {
        // location_id: int(11)
        // zip_code: varchar(20)
        // city: varchar(100)
        // province: varchar(100)

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%locations}}', [
            'location_id' => $this->primaryKey(),
            'zip_code'    => $this->string( 20 )->notNull(),
            'city'        => $this->string( 100 )->notNull(),
            'province'    => $this->string( 100 )->notNull(),
        ], $tableOptions );
    }

    public function down()
    {
        $this->dropTable( '{{%locations}}' );
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
