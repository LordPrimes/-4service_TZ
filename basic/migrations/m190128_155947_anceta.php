<?php

use yii\db\Migration;

/**
 * Class m190128_155947_anceta
 */
class m190128_155947_anceta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('anceta', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->Null(),
            'email' => $this->string(),
            'questions' => $this->string(),
            'rating' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190128_155947_anceta cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190128_155947_anceta cannot be reverted.\n";

        return false;
    }
    */
}
