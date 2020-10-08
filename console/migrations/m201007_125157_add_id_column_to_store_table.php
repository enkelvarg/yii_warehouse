<?php

use yii\db\Migration;

/**
 * Class m201007_125157_add_id_column_to_store_table
 */
class m201007_125157_add_id_column_to_store_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('store', 'id', $this->primaryKey());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('store', 'id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201007_125157_add_id_column_to_storetable cannot be reverted.\n";

        return false;
    }
    */
}
