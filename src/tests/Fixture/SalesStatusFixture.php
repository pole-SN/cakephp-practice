<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesStatusFixture
 */
class SalesStatusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sales_status';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'state_str' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-05-26 04:39:32',
                'modified' => '2022-05-26 04:39:32',
            ],
        ];
        parent::init();
    }
}
