<?php

use yii\db\Migration;

/**
 * Handles the creation of table `organization`.
 */
class m170714_082718_create_organization_table extends Migration
{
    public function up() { 
            $tableOptions = null; 
            if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
 
        $this->createTable('{{%organization}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
        ], $tableOptions);
 
        $this->createIndex('idx_org_name', '{{%organization}}', 'name');
        $this->createIndex('idx_org_status', '{{%organization}}', 'status');
 
    }
 
    public function down()
    {
        echo "m151231_064302_create_organization_table cannot be reverted.\n";
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
