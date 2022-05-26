<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesStatusTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesStatusTable Test Case
 */
class SalesStatusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesStatusTable
     */
    protected $SalesStatus;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SalesStatus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SalesStatus') ? [] : ['className' => SalesStatusTable::class];
        $this->SalesStatus = $this->getTableLocator()->get('SalesStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SalesStatus);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SalesStatusTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
