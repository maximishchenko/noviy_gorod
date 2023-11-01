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

        $this->createTable('{{%lead}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'subject' => $this->string(),
            'body' => $this->text(),
            'created_at' => $this->integer(),
        ], $tableOptions);
        
        $this->createIndex('idx-lead-id', '{{%lead}}', 'id');
        $this->createIndex('idx-lead-name', '{{%lead}}', 'name');
        $this->createIndex('idx-lead-phone', '{{%lead}}', 'phone');
        $this->createIndex('idx-lead-email', '{{%lead}}', 'email');
        $this->createIndex('idx-lead-subject', '{{%lead}}', 'subject');
        $this->createIndex('idx-lead-created_at', '{{%lead}}', 'created_at');

        
        $this->createTable('{{%offer}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'slug' => $this->string(),
            'preview_text' => $this->text(),
            'description_text' => $this->text(),
            'preview_image' => $this->string(),
            'description_image' => $this->string(),
            'comment' => $this->text(),
            'sort' => $this->integer(),
            'status' => $this->smallInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ], $tableOptions);
        
        $this->createIndex('idx-offer-id', '{{%offer}}', 'id');
        $this->createIndex('idx-offer-name', '{{%offer}}', 'name');
        $this->createIndex('idx-offer-slug', '{{%offer}}', 'slug');
        $this->createIndex('idx-offer-preview_image', '{{%offer}}', 'preview_image');
        $this->createIndex('idx-offer-description_image', '{{%offer}}', 'description_image');
        $this->createIndex('idx-offer-sort', '{{%offer}}', 'sort');
        $this->createIndex('idx-offer-status', '{{%offer}}', 'status');
        $this->createIndex('idx-offer-created_at', '{{%offer}}', 'created_at');
        $this->createIndex('idx-offer-updated_at', '{{%offer}}', 'updated_at');
        $this->createIndex('idx-offer-created_by', '{{%offer}}', 'created_by');
        $this->createIndex('idx-offer-updated_by', '{{%offer}}', 'updated_by');
    }

    public function safeDown()
    {
        $this->dropTable('{{%offer}}');
        $this->dropTable('{{%lead}}');
        $this->dropTable('{{%stage_item}}');  
        $this->dropTable('{{%stage}}');  
    }
}
