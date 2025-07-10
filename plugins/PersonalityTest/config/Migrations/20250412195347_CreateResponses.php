<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateResponses extends BaseMigration
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
        $table = $this->table('responses');
        $table
        ->addColumn('user_id','integer',['null' => false])
        ->addColumn('question_id','integer',['null' => false])
        ->addColumn('answer_id','integer',['null' => false])
        ->addColumn('answered_on','datetime',['default' => 'CURRENT_TIMESTAMP'])

        ->addPrimaryKey('id')
        ->addForeignKey('user_id','users','id',['delete' => 'CASCADE','update' => 'CASCADE'])
        ->addForeignKey('question_id','questions','id',['delete' => 'CASCADE','update' => 'CASCADE'])
        ->addForeignKey('answer_id','answers','id',['delete' => 'CASCADE','update' => 'CASCADE'])
        
        ->create();
    }
}
