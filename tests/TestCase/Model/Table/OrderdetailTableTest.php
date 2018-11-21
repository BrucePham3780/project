<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderdetailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderdetailTable Test Case
 */
class OrderdetailTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderdetailTable
     */
    public $Orderdetail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Orderdetail',
        'app.Procs',
        'app.Order'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Orderdetail') ? [] : ['className' => OrderdetailTable::class];
        $this->Orderdetail = TableRegistry::getTableLocator()->get('Orderdetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Orderdetail);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
