<?php

use yii\db\Migration;

class m231022_093934_create_content_tables extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%stage}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'image' => $this->string(),
            'text' => $this->text(),
            'comment' => $this->text(),
            'sort' => $this->integer(),
            'status' => $this->smallInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('idx-stage-id', '{{%stage}}', 'id');
        $this->createIndex('idx-stage-name', '{{%stage}}', 'name');
        $this->createIndex('idx-stage-image', '{{%stage}}', 'image');
        $this->createIndex('idx-stage-sort', '{{%stage}}', 'sort');
        $this->createIndex('idx-stage-status', '{{%stage}}', 'status');
        $this->createIndex('idx-stage-created_at', '{{%stage}}', 'created_at');
        $this->createIndex('idx-stage-updated_at', '{{%stage}}', 'updated_at');
        $this->createIndex('idx-stage-created_by', '{{%stage}}', 'created_by');
        $this->createIndex('idx-stage-updated_by', '{{%stage}}', 'updated_by');
        
        $this->createTable('{{%stage_item}}', [
            'id' => $this->primaryKey(),
            'stage_id' => $this->integer(),
            'name' => $this->string(),
            'comment' => $this->text(),
            'sort' => $this->integer(),
            'status' => $this->smallInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('idx-stage_item-id', '{{%stage_item}}', 'id');
        $this->createIndex('idx-stage_item-stage_id', '{{%stage_item}}', 'stage_id');
        $this->createIndex('idx-stage_item-name', '{{%stage_item}}', 'name');
        $this->createIndex('idx-stage_item-sort', '{{%stage_item}}', 'sort');
        $this->createIndex('idx-stage_item-status', '{{%stage_item}}', 'status');
        $this->createIndex('idx-stage_item-created_at', '{{%stage_item}}', 'created_at');
        $this->createIndex('idx-stage_item-updated_at', '{{%stage_item}}', 'updated_at');
        $this->createIndex('idx-stage_item-created_by', '{{%stage_item}}', 'created_by');
        $this->createIndex('idx-stage_item-updated_by', '{{%stage_item}}', 'updated_by');
        
        $this->addForeignKey('fk-stage_item-stage', '{{%stage_item}}', 'stage_id', '{{%stage}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%stage_item}}');  
        $this->dropTable('{{%stage}}');  
    }
}
