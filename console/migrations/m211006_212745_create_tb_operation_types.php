<?php

use yii\db\Migration;

/**
 * Class m211006_212745_create_tb_operation_types
 */
class m211006_212745_create_tb_operation_types extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%operation_types}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('operation_types');
    }
}
