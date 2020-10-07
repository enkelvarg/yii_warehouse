<?php

use yii\db\Migration;

/**
 * Class m201007_125157_add_id_columns_to_stores_and_device
 */
class m201007_125157_add_id_columns_to_stores_and_device extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('stores', 'id', $this->primaryKey());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('stores', 'id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201007_125157_add_id_columns_to_stores_and_device cannot be reverted.\n";

        return false;
    }
    */
}
