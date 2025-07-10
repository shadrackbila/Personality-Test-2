<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use PersonalityTest\Controller\AnswersController;

/**
 * PersonalityTest\Controller\AnswersController Test Case
 *
 * @uses \PersonalityTest\Controller\AnswersController
 */
class AnswersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Answers',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \PersonalityTest\Controller\AnswersController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \PersonalityTest\Controller\AnswersController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \PersonalityTest\Controller\AnswersController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \PersonalityTest\Controller\AnswersController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \PersonalityTest\Controller\AnswersController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
