<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stores}}`.
 */
class m201007_110331_create_stores_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stores}}', [
            'name' => $this->string()->unique(),
            'created_at' => $this->date()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stores}}');
    }
}
