<?php

use yii\db\Migration;

/**
 * Class m180523_084809_answerTable
 */
class m180523_084809_answerTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        $this->createTable('answerTable',[


            'id'=>$this->primaryKey(),


            'answer_id'=>$this-> string()->notNull(),


            'answer_1'=>$this-> text(),


            'answer_2'=>$this-> text(),


            'answer_3'=>$this-> text(),


            'answer_4'=>$this-> text(),


          ]);
          
$this->addForeignKey('fk_answerTable_answer_id','answerTable','answer_id','questionTable','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_answerTable_answerTable_id','answerTable');

 
        $this->dropTable('answerTable');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180523_084809_answerTable cannot be reverted.\n";

        return false;
    }
    */
}
