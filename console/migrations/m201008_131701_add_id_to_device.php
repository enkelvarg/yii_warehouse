<?php

use yii\db\Migration;

/**
 * Class m201008_131701_add_id_to_device
 */
class m201008_131701_add_id_to_device extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('device', 'id', $this->primaryKey());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('device', 'id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201008_131701_add_id_to_device cannot be reverted.\n";

        return false;
    }
    */
}
