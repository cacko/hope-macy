<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%application}}`.
 */
class m250613_120842_create_application_table extends Migration
{
    /**
     * {@inheritdoc}
     * first_name (Required, String)
     * last_name (Required, String)
     * date_of_birth (Required, Date)
     * description (Long text)
     * income (Decimal field)
     * number_of_dependants (Integer)
     * created_at (Timestamp, set to the current time by default)
     * updated_at (Timestamp, should update automatically)
     */
    public function safeUp(): void
    {
        $this->createTable('{{%application}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'date_of_birth' => $this->date()->notNull(),
            'description' => $this->text(),
            'income' => $this->decimal(),
            'number_of_dependants' =>  $this->integer(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable('{{%application}}');
    }
}
