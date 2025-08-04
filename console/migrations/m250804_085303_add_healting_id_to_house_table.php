<?php

use yii\db\Migration;


class m250804_085303_add_healting_id_to_house_table extends Migration
{
    
    public function safeUp()
    {
        $this->addColumn('{{%house}}', 'healting_id', $this->integer());
        $this->createIndex('idx-house-healting_id', '{{%house}}', 'healting_id');
    }

    public function safeDown()
    {
        $this->dropColumn('{{%house}}', 'healting_id');
    }

}
