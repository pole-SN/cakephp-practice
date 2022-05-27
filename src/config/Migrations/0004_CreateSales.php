<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateSales extends AbstractMigration
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
        $table = $this->table('sales');
        $table
            ->addColumn('client_id', 'integer', [
                'null' => false
            ])
            ->addColumn('project_id', 'integer', [
                'null' => false
            ])
            ->addColumn('quote', 'biginteger', [
                'default' => 0,
                'null' => false
            ])
            ->addColumn('profit', 'biginteger', [
                'default' => 0,
                'null' => false
            ])
            ->addForeignKey('client_id', 'clients', 'id', [
                'delete' => 'NO_ACTION',
                'update' => 'NO_ACTION',
            ])
            ->addForeignKey('project_id', 'projects', 'id', [
                'delete' => 'NO_ACTION',
                'update' => 'NO_ACTION',
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
