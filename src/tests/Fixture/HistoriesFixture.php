<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoriesFixture
 */
class HistoriesFixture extends TestFixture
{
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
                'sales_id' => 1,
                'user_id' => 1,
                'action' => 'Lorem ipsum dolor sit amet',
                'response' => 'Lorem ipsum dolor sit amet',
                'status_id' => 1,
                'created' => '2022-05-26 04:40:20',
                'modified' => '2022-05-26 04:40:20',
            ],
        ];
        parent::init();
    }
}
