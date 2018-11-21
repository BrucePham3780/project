<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatedetailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatedetailTable Test Case
 */
class CatedetailTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatedetailTable
     */
    public $Catedetail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Catedetail',
        'app.Category'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Catedetail') ? [] : ['className' => CatedetailTable::class];
        $this->Catedetail = TableRegistry::getTableLocator()->get('Catedetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catedetail);

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
}
