<?php

use yii\db\Migration;

class m161011_054339_lookup extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lookup}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'code' => $this->integer()->notNull(),
            'type' => $this->string()->notNull(),
            'position' => $this->integer()->notNull(),


        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%lookup}}');
    }
}
