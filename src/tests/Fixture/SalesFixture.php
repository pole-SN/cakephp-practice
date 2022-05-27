<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesFixture
 */
class SalesFixture extends TestFixture
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
                'client_id' => 1,
                'project_id' => 1,
                'quote' => 1,
                'profit' => 1,
                'created' => '2022-05-27 01:35:15',
                'modified' => '2022-05-27 01:35:15',
            ],
        ];
        parent::init();
    }
}
