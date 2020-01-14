<?php

use yii\db\Migration;

/**
 * Class m200113_234407_create_table_book
 */
class m200113_234407_create_table_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey()->unsigned(),
            'title' => $this->string(256)->notNull(),
            'description' => $this->text(),
            'genre' => $this->string(128),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('NOW()'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('NOW()')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
    }
}
