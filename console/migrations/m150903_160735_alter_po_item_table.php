<?php

use yii\db\Migration;

class m150903_160735_alter_po_item_table extends Migration
{
    public function up()
    {
        $this->addForeignKey( 'po_item_ibfk_1'
            , '{{%po_item}}'
            , 'po_id'
            , 'po'
            , 'id'
            , 'cascade'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'po_item_ibfk_1', '{{%po_item}}' );
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
