<?php

use yii\db\Migration;

class m150903_012149_create_po_item_table extends Migration
{
    public function up()
    {
        // id: int(11)
        // po_item_no: varchar(10)
        // quantity: double
        // po_id: int(11)

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%po_item}}', [
            'id'         => $this->primaryKey(),
            'po_item_no' => $this->string( 10 )->notNull(),
            'quantity'   => $this->double()->notNull(),
            'po_id'      => $this->integer()->notNull(),
        ], $tableOptions );
    }

    public function down()
    {
        $this->dropTable( '{{%po_item}}' );
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
