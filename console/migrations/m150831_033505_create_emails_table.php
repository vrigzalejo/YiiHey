<?php

use yii\db\Migration;

class m150831_033505_create_emails_table extends Migration
{
    public function up()
    {
        // id: int(11)
        // receiver_name: varchar(50)
        // receiver_email: varchar(200)
        // subject: varchar(255)
        // content: text
        // attachment: varchar(255)

        $tableOptions = null;
        if( $this->db->driverName === 'mysql' ) {
            $tableOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        }

        $this->createTable( '{{%emails}}', [
            'id'             => $this->primaryKey(),
            'receiver_name'  => $this->string( 50 )->notNull(),
            'receiver_email' => $this->string( 200 )->notNull(),
            'subject'        => $this->string()->notNull(),
            'content'        => $this->text()->notNull(),
            'attachment'     => $this->string(),
        ], $tableOptions );

    }

    public function down()
    {
        $this->dropTable( '{{%emails}}' );
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
