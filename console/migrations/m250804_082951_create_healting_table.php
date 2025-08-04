<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%healting}}`.
 */
class m250804_082951_create_healting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%healting}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'comment' => $this->text(),
            'sort' => $this->integer(),
            'status' => $this->smallInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
        $this->createIndex('idx-healting-id', '{{%healting}}', 'id');
        $this->createIndex('idx-healting-name', '{{%healting}}', 'name');
        $this->createIndex('idx-healting-sort', '{{%healting}}', 'sort');
        $this->createIndex('idx-healting-status', '{{%healting}}', 'status');
        $this->createIndex('idx-healting-created_at', '{{%healting}}', 'created_at');
        $this->createIndex('idx-healting-updated_at', '{{%healting}}', 'updated_at');
        $this->createIndex('idx-healting-created_by', '{{%healting}}', 'created_by');
        $this->createIndex('idx-healting-updated_by', '{{%healting}}', 'updated_by');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%healting}}');
    }
}
