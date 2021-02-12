<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%example}}`.
 */
class m210211_113705_create_example_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%example}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->defaultValue('')->comment('标题'),
            'content' => $this->text()->comment('内容'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%example}}');
    }
}
