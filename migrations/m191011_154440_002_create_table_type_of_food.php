<?php

use yii\db\Migration;

class m191011_154440_002_create_table_type_of_food extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%type_of_food}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%type_of_food}}');
    }
}
