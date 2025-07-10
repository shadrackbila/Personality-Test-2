<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateAnswers extends BaseMigration
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
        $table = $this->table('answers');
        $table
        ->addColumn('text','string',['limit' => 500,'null' => false])
        ->addColumn('points','integer',['null' => false])
        ->addColumn('traits','string',['limit' => 255,'null' => false])

        ->addPrimaryKey('id')

        ->create();
    }
}
