<?php

use yii\db\Schema;
use yii\db\Migration;

class m150827_073157_create_branches_table extends Migration
{
    public function up()
    {
        // branch_id: int(11)
        // companies_company_id: int(11)
        // branch_name: varchar(100)
        // branch_address: varchar(255)
        // branch_created_date: datetime
        // branch_status: enum('active, inactive')

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%branches}}', [
            'branch_id'            => $this->primaryKey(),
            'companies_company_id' => $this->integer(),
            'branch_name'          => $this->string( 100 )->notNull(),
            'branch_address'       => $this->string()->notNull(),
            'branch_created_date'  => $this->dateTime()->notNull(),
            'branch_status'        => 'enum(\'active\', \'inactive\') NOT NULL',
        ], $tableOptions );

    }

    public function down()
    {
        $this->dropTable( '{{%branches}}' );
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
