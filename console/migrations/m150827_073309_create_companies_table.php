<?php

use yii\db\Migration;

class m150827_073309_create_companies_table extends Migration
{
    public function up()
    {
        // company_id: int(11)
        // company_name: varchar(100)
        // company_email: varchar(100)
        // company_address: varchar(255)
        // company_created_date: datetime
        // company_status: enum('active, inactive')

        /**
         * Added at Lesson 13
         */
        // company_start_date: date

        /**
         * Added at Lesson 17
         */
        // logo: varchar(200)

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%companies}}', [
            'company_id'           => $this->primaryKey(),
            'company_name'         => $this->string( 100 )->notNull(),
            'company_email'        => $this->string( 100 )->notNull(),
            'company_address'      => $this->string()->notNull(),
            'logo'                 => $this->string( 200 ),
            'company_start_date'   => $this->date()->notNull(),
            'company_created_date' => $this->dateTime()->notNull(),
            'company_status'       => 'enum(\'active\', \'inactive\') NOT NULL',
        ], $tableOptions );

    }

    public function down()
    {
        $this->dropTable( '{{%companies}}' );
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
