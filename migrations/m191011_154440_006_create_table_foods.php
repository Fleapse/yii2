<?php

use yii\db\Migration;

class m191011_154440_006_create_table_foods extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%foods}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'type_of_food' => $this->integer()->notNull(),
            'recipe' => $this->text()->notNull(),
            'date_time' => $this->dateTime()->notNull(),
        ], $tableOptions);

        $this->createIndex('type_of_food', '{{%foods}}', 'type_of_food', true);
        $this->addForeignKey('foods_ibfk_1', '{{%foods}}', 'type_of_food', '{{%type_of_food}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%foods}}');
    }
}
