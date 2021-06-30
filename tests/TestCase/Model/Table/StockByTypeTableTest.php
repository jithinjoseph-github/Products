<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StockByTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StockByTypeTable Test Case
 */
class StockByTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StockByTypeTable
     */
    public $StockByType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.StockByType',
        'app.ProductTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StockByType') ? [] : ['className' => StockByTypeTable::class];
        $this->StockByType = TableRegistry::getTableLocator()->get('StockByType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StockByType);

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
