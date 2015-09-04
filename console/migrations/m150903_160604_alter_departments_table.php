<?php

use yii\db\Migration;

class m150903_160604_alter_departments_table extends Migration
{
    public function up()
    {

//        $this->createIndex('branches_branch_id', '{{%departments}}', 'branches_branch_id');
//        $this->createIndex('company_company_id', '{{%departments}}', 'company_company_id');

        $this->addForeignKey( 'departments_ibfk_1'
            , '{{%departments}}'
            , 'branches_branch_id'
            , 'branches'
            , 'branch_id'
            , 'cascade'
            , 'cascade' );
        $this->addForeignKey( 'departments_ibfk_2'
            , '{{%departments}}'
            , 'company_company_id'
            , 'companies'
            , 'company_id'
            , 'cascade'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'departments_ibfk_1', '{{%departments}}' );
        $this->dropForeignKey( 'departments_ibfk_2', '{{%departments}}' );
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
