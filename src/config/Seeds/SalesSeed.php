<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Sales seed.
 */
class SalesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'client_id' => 1,
                'project_id' => 1,
                'quote' => 3000000,
                'profit' => 3000000,
            ], [
                'client_id' => 2,
                'project_id' => 2,
                'quote' => 1000000,
                'profit' => 800000,
            ], [
                'client_id' => 3,
                'project_id' => 3,
                'quote' => 10000000,
                'profit' => 9500000,
            ], [
                'client_id' => 4,
                'project_id' => 5,
                'quote' => 100000,
                'profit' => 120000,
            ], [
                'client_id' => 5,
                'project_id' => 4,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 1,
                'project_id' => 3,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 6,
                'project_id' => 1,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 8,
                'project_id' => 2,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 9,
                'project_id' => 7,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 7,
                'project_id' => 5,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 3,
                'project_id' => 4,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 9,
                'project_id' => 1,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 10,
                'project_id' => 10,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 10,
                'project_id' => 9,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 10,
                'project_id' => 6,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 10,
                'project_id' => 3,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 2,
                'project_id' => 9,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 5,
                'project_id' => 1,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 8,
                'project_id' => 5,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 3,
                'project_id' => 7,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 7,
                'project_id' => 1,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 4,
                'project_id' => 10,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 6,
                'project_id' => 10,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 6,
                'project_id' => 5,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 4,
                'project_id' => 2,
                'quote' => 0,
                'profit' => 0,
            ], [
                'client_id' => 1,
                'project_id' => 10,
                'quote' => 0,
                'profit' => 0,
            ],
        ];

        $table = $this->table('sales');

        $this->execute('SET FOREIGN_KEY_CHECKS = 0');
        $table->truncate();
        $table->insert($data)->save();
        $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }
}
