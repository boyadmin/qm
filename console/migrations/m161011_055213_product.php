<?php

use yii\db\Migration;

class m161011_055213_product extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'keyword' => $this->string(),
            'pic' => $this->string(),
            'description' => $this->string(),
            'cid'=>$this->integer(),
            'hits' =>$this->integer()->defaultValue(0),


            'status' => $this->smallInteger()->defaultValue(10),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');
    }
}
