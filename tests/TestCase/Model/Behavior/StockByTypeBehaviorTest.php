<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\StockByTypeBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\StockByTypeBehavior Test Case
 */
class StockByTypeBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Behavior\StockByTypeBehavior
     */
    public $StockByType;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->StockByType = new StockByTypeBehavior();
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
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
