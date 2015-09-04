<?php

use yii\db\Migration;

class m150903_160535_alter_branches_table extends Migration
{
    public function up()
    {
//        $this->createIndex( 'companies_company_id', '{{%branches}}', 'companies_company_id' );

        $this->addForeignKey( 'branches_ibfk_1'
            , '{{%branches}}'
            , 'companies_company_id'
            , 'companies'
            , 'company_id'
            , 'cascade'
            , 'cascade' );
    }

    public function down()
    {
        $this->dropForeignKey( 'branches_ibfk_1', '{{%branches}}' );
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
