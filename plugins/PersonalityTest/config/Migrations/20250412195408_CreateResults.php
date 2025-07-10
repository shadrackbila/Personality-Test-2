<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateResults extends BaseMigration
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
        $table = $this->table('results');
        $table
        ->addColumn('user_id','integer',['null' => false])
        ->addColumn('score_summary','text',['null' => false])
        ->addColumn('results_on','datetime',['default' => 'CURRENT_TIMESTAMP'])

        ->addPrimaryKey('id')
        ->addForeignKey('user_id','users','id',['delete' => 'CASCADE','update' => 'CASCADE'])

        ->create();
    }
}
