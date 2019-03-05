<?php

use devskyfly\yiiModuleAdminPanel\migrations\helpers\contentPanel\UnnamedEntityMigrationHelper;

/**
 * Class m190305_100801_init_feedback_table
 */
class m190305_100801_init_feedback_table extends UnnamedEntityMigrationHelper
{
    public $table="module_feedback";
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $fields=$this->getFieldsDefinition();
        $fields['url']='TEXT';
        $fields['vote']='INT';
        $fields['comment']='TEXT';
        $this->createTable($this->table, $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190305_100801_init_feedback_table cannot be reverted.\n";

        return false;
    }
    */
}
