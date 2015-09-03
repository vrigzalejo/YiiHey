<?php

use yii\db\Schema;
use yii\db\Migration;

class m150903_160646_alter_auth_item_child_table extends Migration
{
    public function up()
    {
        $this->addForeignKey( 'FK_parent'
            , '{{%auth_item_child}}'
            , 'parent'
            , 'auth_item'
            , 'name'
            , 'cascade'
            , 'cascade' );
        $this->addForeignKey( 'FK_child'
            , '{{%auth_item_child}}'
            , 'child'
            , 'auth_item'
            , 'name'
            , 'cascade'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'FK_parent', '{{%auth_item_child}}' );
        $this->dropForeignKey( 'FK_child', '{{%auth_item_child}}' );
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
