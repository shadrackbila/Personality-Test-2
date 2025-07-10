<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use PersonalityTest\Controller\ResultsController;

/**
 * PersonalityTest\Controller\ResultsController Test Case
 *
 * @uses \PersonalityTest\Controller\ResultsController
 */
class ResultsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Results',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResultsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResultsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResultsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResultsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResultsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
