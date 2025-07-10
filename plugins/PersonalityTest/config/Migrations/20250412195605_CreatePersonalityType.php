<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreatePersonalityType extends BaseMigration
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
        $table = $this->table('personality_type');
        $table
            ->addColumn('name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('description', 'text', ['null' => false])
    
            ->addPrimaryKey('id')
            ->create();
    }
}
