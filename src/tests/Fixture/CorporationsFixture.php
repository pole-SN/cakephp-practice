<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CorporationsFixture
 */
class CorporationsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'name_kana' => 'Lorem ipsum dolor sit amet',
                'postal_code' => 'Lorem ip',
                'address1' => 'Lorem ipsum dolor sit amet',
                'address2' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor ',
                'fax' => 'Lorem ipsum dolor ',
                'email1' => 'Lorem ipsum dolor sit amet',
                'email2' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-05-26 04:40:13',
                'modified' => '2022-05-26 04:40:13',
            ],
        ];
        parent::init();
    }
}
