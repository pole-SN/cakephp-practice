<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateHistories extends AbstractMigration
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
        $table = $this->table('histories');
        $table
            ->addColumn('sales_id', 'integer', [
                'null' => false
            ])
            ->addColumn('user_id', 'integer', [
                'null' => false
            ])
            ->addColumn('action', 'string', [
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('response', 'string', [
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('status_id', 'integer', [
                'null' => false
            ])
            ->addForeignKey('sales_id', 'sales', 'id', [
                'delete'=> 'NO_ACTION',
                'update'=> 'NO_ACTION',
            ])
            ->addForeignKey('user_id', 'users', 'id', [
                'delete'=> 'NO_ACTION',
                'update'=> 'NO_ACTION',
            ])
            ->addForeignKey('status_id', 'sales_status', 'id', [
                'delete'=> 'NO_ACTION',
                'update'=> 'NO_ACTION',
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
