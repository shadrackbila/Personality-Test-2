<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use PersonalityTest\Controller\QuestionsController;

/**
 * PersonalityTest\Controller\QuestionsController Test Case
 *
 * @uses \PersonalityTest\Controller\QuestionsController
 */
class QuestionsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Questions',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \PersonalityTest\Controller\QuestionsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \PersonalityTest\Controller\QuestionsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \PersonalityTest\Controller\QuestionsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \PersonalityTest\Controller\QuestionsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \PersonalityTest\Controller\QuestionsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
