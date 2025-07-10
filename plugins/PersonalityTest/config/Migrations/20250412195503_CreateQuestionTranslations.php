<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateQuestionTranslations extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('question_translations');
        $table
            ->addColumn('question_id', 'integer', ['null' => false])
            ->addColumn('language_code', 'string', ['limit' => 10, 'null' => false])
            ->addColumn('text', 'string', ['limit' => 500, 'null' => false])
    
            ->addPrimaryKey('id')
            ->addForeignKey('question_id', 'questions', 'id', [
                'delete' => 'CASCADE',
                'update' => 'CASCADE'
            ])
            
            ->create();
    }
}
