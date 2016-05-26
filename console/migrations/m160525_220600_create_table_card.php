<?php

use yii\db\Migration;

class m160525_220600_create_table_card extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%card}}', [
            'id' => $this->primaryKey(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            
            'triggeringRollMin' => $this->integer()->notNull(),
            'triggeringRollMax' => $this->integer()->notNull(),
            'triggersOn' => $this->string()->notNull(),
            
            'name' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
            'background' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            
            'category' => $this->integer(),
            'cost' => $this->integer()->notNull(),
            
            'effect' => $this->string()->notNull(),
            'effectFrom' => $this->string()->notNull(),
            'effectValue' => $this->integer()->notNull(),
            'effectMultiplier' => $this->string()->notNull(),
            'effectMultiplierCategory' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%card}}');
    }
}
