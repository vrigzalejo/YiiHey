<?php

use yii\db\Migration;

class m150904_011005_alter_auth_assignment_table extends Migration
{
    public function up()
    {
        $this->addForeignKey( 'auth_assignment_ibfk_1'
            , '{{%auth_assignment}}'
            , 'item_name'
            , 'auth_item'
            , 'name'
            , 'cascade'
            , 'cascade' );
        $this->addForeignKey( 'auth_assignment_ibfk_2'
            , '{{%auth_assignment}}'
            , 'user_id'
            , 'user'
            , 'id'
            , 'cascade'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'auth_assignment_ibfk_1', '{{%auth_assignment}}' );
        $this->dropForeignKey( 'auth_assignment_ibfk_2', '{{%auth_assignment}}' );
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
