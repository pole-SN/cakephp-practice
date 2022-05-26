<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateClients extends AbstractMigration
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
        $table = $this->table('clients');
        $table
            ->addColumn('sei', 'string', [
                'limit' => 10,
                'null' => false
            ])
            ->addColumn('mei', 'string', [
                'limit' => 10,
                'null' => false
            ])
            ->addColumn('sei_kana', 'string', [
                'limit' => 10,
                'null' => true
            ])
            ->addColumn('mei_kana', 'string', [
                'limit' => 10,
                'null' => true
            ])
            ->addColumn('phone', 'string', [
                'limit' => 20,
                'null' => true
            ])
            ->addColumn('email', 'string', [
                'limit' => 100,
                'null' => true
            ])
            ->addColumn('corporation_id', 'integer', [
                'null' => false
            ])
            ->addForeignKey('corporation_id', 'corporations', 'id', [
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
