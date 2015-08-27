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
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%branches}}', [
            'id' => $this->primaryKey(),
            'companies_company_id' => $this->integer(11),
            'branch_name' => $this->string(100)->notNull(),
            'branch_address' => $this->string(255)->notNull(),
            'branch_created_date' => $this->integer()->notNull(),

        ], $tableOptions);
    }

    public function down()
    {
        echo "m150827_073157_create_branches_table cannot be reverted.\n";

        return false;
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
