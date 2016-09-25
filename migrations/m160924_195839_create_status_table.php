<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `status`.
 */
class m160924_195839_create_status_table extends Migration
{
    public function up()
    {
          $tableOptions = null;
          if ($this->db->driverName === 'mysql') {
              $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
          }
 
          $this->createTable('{{%status}}', [
              'id' => Schema::TYPE_PK,
              'message' => Schema::TYPE_TEXT.' NOT NULL',
              'permissions' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0',
              'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
              'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
          ], $tableOptions);
      }
 
 
    public function down()
    {
      $this->dropTable('{{%status}}');
    }
}
