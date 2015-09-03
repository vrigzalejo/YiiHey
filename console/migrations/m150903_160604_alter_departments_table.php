<?php

use yii\db\Schema;
use yii\db\Migration;

class m150903_160604_alter_departments_table extends Migration
{
    public function up()
    {

        $this->createIndex('branches_branch_id', '{{%departments}}', 'branches_branch_id');
        $this->createIndex('company_company_id', '{{%departments}}', 'company_company_id');

        $this->addForeignKey( 'FK_branches_branch_id'
            , '{{%departments}}'
            , 'branches_branch_id'
            , 'branches'
            , 'branch_id'
            , 'set null'
            , 'cascade' );
        $this->addForeignKey( 'FK_company_company_id'
            , '{{%departments}}'
            , 'company_company_id'
            , 'companies'
            , 'company_id'
            , 'set null'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'FK_branches_branch_id', '{{%departments}}' );
        $this->dropForeignKey( 'FK_company_company_id', '{{%departments}}' );
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
