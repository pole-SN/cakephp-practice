<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 */
class ProjectsFixture extends TestFixture
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
                'project_name' => 'Lorem ipsum dolor sit amet',
                'concept' => 'Lorem ipsum dolor sit amet',
                'plan' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-05-26 04:39:44',
                'modified' => '2022-05-26 04:39:44',
            ],
        ];
        parent::init();
    }
}
