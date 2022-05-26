<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientsFixture
 */
class ClientsFixture extends TestFixture
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
                'sei' => 'Lorem ip',
                'mei' => 'Lorem ip',
                'sei_kana' => 'Lorem ip',
                'mei_kana' => 'Lorem ip',
                'phone' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor sit amet',
                'corporation_id' => 1,
                'created' => '2022-05-26 04:39:53',
                'modified' => '2022-05-26 04:39:53',
            ],
        ];
        parent::init();
    }
}
