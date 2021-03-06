<?php

use yii\db\Migration;

class m150903_160627_alter_auth_item_table extends Migration
{
    public function up()
    {
//        $this->createIndex( 'rule_name', '{{%auth_item}}', 'rule_name' );
//        $this->createIndex( 'type', '{{%auth_item}}', 'type' );

        $this->addForeignKey( 'auth_item_ibfk_1'
            , '{{%auth_item}}'
            , 'rule_name'
            , 'auth_rule'
            , 'name'
            , 'cascade'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'auth_item_ibfk_1', '{{%auth_item}}' );
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
