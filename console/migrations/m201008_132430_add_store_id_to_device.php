<?php

use yii\db\Migration;

/**
 * Class m201008_132430_add_store_id_to_device
 */
class m201008_132430_add_store_id_to_device extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('device', 'store_id', $this->integer());
        $this->dropColumn('device', 'store');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201008_132430_add_store_id_to_device cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201008_132430_add_store_id_to_device cannot be reverted.\n";

        return false;
    }
    */
}
