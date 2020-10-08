<?php

use yii\db\Migration;

/**
 * Class m201008_142511_foreign_keys
 */
class m201008_142511_foreign_keys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'store_id',
            'device',
            'store_id',
            'store',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201008_142511_foreign_keys cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201008_142511_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
