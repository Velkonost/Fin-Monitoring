<?php

use yii\db\Migration;

/**
 * Handles the creation of table `metals`.
 */
class m170714_095900_create_metals_table extends Migration
{
    public function up() { 
            $tableOptions = null; 
            if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
 
        $this->createTable('{{%metals}}', [
            'id' => $this->primaryKey(),
            'type_title' => $this->string(),
            'type_desc' => $this->string(),
            'img_type' => $this->string(),
            'img_name' => $this->string(),
            'massa' => $this->string(),
            'value' => $this->string(),
            'status' => $this->string(),
            'from' => $this->string(),
            'to' => $this->string(),
            'operation' => $this->string(),
            'name_title' => $this->string(),
            'name_desc' => $this->string(),
            'name_type' => $this->string(),
            'date' => $this->string(),
            'time' => $this->string()
        ], $tableOptions);
 
        // $this->createIndex('idx_org_name', '{{%organization}}', 'name');
        // $this->createIndex('idx_org_status', '{{%organization}}', 'status');
 
    }
 
    public function down()
    {
        // echo "m151231_064302_create_organization_table cannot be reverted.\n";
        //$this->dropTable('{{%organization}}');
        return false;
    }
 
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
 
    public function safeDown()
    {
    }
    */
}
