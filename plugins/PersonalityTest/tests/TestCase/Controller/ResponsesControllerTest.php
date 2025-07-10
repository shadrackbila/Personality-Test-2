<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use PersonalityTest\Controller\ResponsesController;

/**
 * PersonalityTest\Controller\ResponsesController Test Case
 *
 * @uses \PersonalityTest\Controller\ResponsesController
 */
class ResponsesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Responses',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResponsesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResponsesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResponsesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResponsesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \PersonalityTest\Controller\ResponsesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
