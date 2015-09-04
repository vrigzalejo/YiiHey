<?php

use yii\db\Migration;

class m150903_012128_create_po_table extends Migration
{
    public function up()
    {
        // id: int(11)
        // po_no: varchar(10)
        // description: text

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%po}}', [
            'id'          => $this->primaryKey(),
            'po_no'       => $this->string( 10 )->notNull(),
            'description' => $this->text()->notNull(),
        ], $tableOptions );
    }

    public function down()
    {
        $this->dropTable( '{{%po}}' );
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
