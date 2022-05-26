<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * ClientsProjects seed.
 */
class ClientsProjectsSeed extends AbstractSeed
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
            ], [
                'client_id' => 2,
                'project_id' => 2,
            ], [
                'client_id' => 3,
                'project_id' => 3,
            ], [
                'client_id' => 4,
                'project_id' => 5,
            ], [
                'client_id' => 5,
                'project_id' => 4,
            ], [
                'client_id' => 1,
                'project_id' => 3,
            ], [
                'client_id' => 6,
                'project_id' => 1,
            ], [
                'client_id' => 8,
                'project_id' => 2,
            ], [
                'client_id' => 9,
                'project_id' => 7,
            ], [
                'client_id' => 7,
                'project_id' => 5,
            ], [
                'client_id' => 3,
                'project_id' => 4,
            ], [
                'client_id' => 9,
                'project_id' => 1,
            ], [
                'client_id' => 10,
                'project_id' => 10,
            ], [
                'client_id' => 10,
                'project_id' => 9,
            ], [
                'client_id' => 10,
                'project_id' => 6,
            ], [
                'client_id' => 10,
                'project_id' => 3,
            ], [
                'client_id' => 2,
                'project_id' => 9,
            ], [
                'client_id' => 5,
                'project_id' => 1,
            ], [
                'client_id' => 8,
                'project_id' => 5,
            ], [
                'client_id' => 3,
                'project_id' => 7,
            ], [
                'client_id' => 7,
                'project_id' => 1,
            ], [
                'client_id' => 4,
                'project_id' => 10,
            ], [
                'client_id' => 6,
                'project_id' => 10,
            ], [
                'client_id' => 6,
                'project_id' => 5,
            ], [
                'client_id' => 4,
                'project_id' => 2,
            ], [
                'client_id' => 1,
                'project_id' => 10,
            ],
        ];

        $table = $this->table('clients_projects');

        $this->execute('SET FOREIGN_KEY_CHECKS = 0');
        $table->truncate();
        $table->insert($data)->save();
        $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }
}
