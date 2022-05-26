<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProjects extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('projects');
        $table
            ->addColumn('project_name', 'string', [
                'limit' => 100,
                'null' => false
            ])
            ->addColumn('concept', 'string', [
                'limit' => 255,
                'null' => true
            ])
            ->addColumn('plan', 'string', [
                'limit' => 255,
                'null' => true
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'null' => false,
            ])
            ->create();
    }
}
