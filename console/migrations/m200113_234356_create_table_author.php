<?php

use yii\db\Migration;

/**
 * Class m200113_234356_create_table_author
 */
class m200113_234356_create_table_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(11)->unsigned(),
            'first_name' => $this->string(56)->notNull(),
            'last_name' => $this->string(56)->notNull(),
            'birth_date' => $this->dateTime()->notNull(),
            'death_date' => $this->dateTime()->notNull(),
            'created_at' => $this->dateTime()->notNull()->defaultExpression('NOW()'),
            'updated_at' => $this->dateTime()->notNull()->defaultExpression('NOW()')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
}
