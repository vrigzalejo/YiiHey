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
    }

    public function down()
    {
//        echo "m150903_012149_create_po_item_table cannot be reverted.\n";
//
//        return false;
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
