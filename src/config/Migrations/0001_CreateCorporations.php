<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCorporations extends AbstractMigration
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
        $table = $this->table('corporations');
        $table
            ->addColumn('name', 'string', [
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('name_kana', 'string', [
                'limit' => 50,
                'null' => true
            ])
            ->addColumn('postal_code', 'string', [
                'limit' => 10,
                'null' => true
            ])
            ->addColumn('address1', 'string', [
                'limit' => 100,
                'null' => true
            ])
            ->addColumn('address2', 'string', [
                'limit' => 100,
                'null' => true
            ])
            ->addColumn('phone', 'string', [
                'limit' => 20,
                'null' => true
            ])
            ->addColumn('fax', 'string', [
                'limit' => 20,
                'null' => true
            ])
            ->addColumn('email1', 'string', [
                'limit' => 100,
                'null' => true
            ])
            ->addColumn('email2', 'string', [
                'limit' => 100,
                'null' => true
            ])
            ->addColumn('url', 'string', [
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
