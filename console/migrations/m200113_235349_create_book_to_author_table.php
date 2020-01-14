<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_to_author}}`.
 */
class m200113_235349_create_book_to_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book_to_author}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer()->unsigned()->notNull(),
            'author_id' => $this->integer()->unsigned()->notNull()
        ]);

        $this->addForeignKey('idx-book_id-foreign_key', '{{%book_to_author}}', 'book_id', 'book', 'id');
        $this->addForeignKey('idx-author_id-foreign_key', '{{%book_to_author}}', 'author_id', 'author', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book_to_author}}');
    }
}
