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
        $this->createTable('{{%store}}', [
            'name' => $this->string()->unique()->notNull(),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%store}}');
    }
}
