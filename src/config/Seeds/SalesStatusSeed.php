<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * SalesStatus seed.
 */
class SalesStatusSeed extends AbstractSeed
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
                'state_str' => '仕掛中',
            ],
            [
                'state_str' => '契約中',
            ],
            [
                'state_str' => '開発中',
            ],
            [
                'state_str' => '納品中',
            ],
            [
                'state_str' => 'クロージング',
            ],
            [
                'state_str' => '失注',
            ],
        ];

        $table = $this->table('sales_status');
        $table->insert($data)->save();
    }
}
