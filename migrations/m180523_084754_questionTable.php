<?php

use yii\db\Migration;

/**
 * Class m180523_084754_questionTable
 */
class m180523_084754_questionTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('questionTable',[

            'id'=>$this->primaryKey(),

            'question'=>$this-> string(255)->notNull(),

            'created_at'=>$this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),

            'created_by'=>$this-> string(255)->notNull(),
          ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('poll');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180523_084754_questionTable cannot be reverted.\n";

        return false;
    }
    */
}
