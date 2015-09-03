<?php

use yii\db\Schema;
use yii\db\Migration;

class m150903_160535_alter_branches_table extends Migration
{
    public function up()
    {
        $this->createIndex( 'companies_company_id', '{{%branches}}', 'companies_company_id' );

        $this->addForeignKey( 'FK_companies_company_id'
            , '{{%branches}}'
            , 'companies_company_id'
            , 'companies'
            , 'company_id'
            , 'set null'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'FK_companies_company_id', '{{%branches}}' );
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
