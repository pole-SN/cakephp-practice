<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Projects seed.
 */
class ProjectsSeed extends AbstractSeed
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
                'project_name' => 'XXXシステム販売',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'YYYシステム販売',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'ZZZシステム販売',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => '動画制作',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'test1',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'test2',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'test3',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'test4',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'test5',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'test6',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ], [
                'project_name' => 'test7',
                'concept' => 'テストテストテストテストテストテストテストテスト',
                'plan' => 'テストテストテストテストテストテストテストテストテストテストテスト',
            ],
        ];

        $table = $this->table('projects');
        $this->execute('SET FOREIGN_KEY_CHECKS = 0');
        $table->truncate();
        $table->insert($data)->save();
        $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }
}
