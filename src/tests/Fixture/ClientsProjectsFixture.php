<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientsProjectsFixture
 */
class ClientsProjectsFixture extends TestFixture
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
                'created' => '2022-05-26 04:40:04',
                'modified' => '2022-05-26 04:40:04',
            ],
        ];
        parent::init();
    }
}
