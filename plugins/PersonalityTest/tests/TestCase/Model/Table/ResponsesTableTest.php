<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PersonalityTest\Model\Table\ResponsesTable;

/**
 * PersonalityTest\Model\Table\ResponsesTable Test Case
 */
class ResponsesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PersonalityTest\Model\Table\ResponsesTable
     */
    protected $Responses;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Responses',
        'plugin.PersonalityTest.Users',
        'plugin.PersonalityTest.Questions',
        'plugin.PersonalityTest.Answers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Responses') ? [] : ['className' => ResponsesTable::class];
        $this->Responses = $this->getTableLocator()->get('Responses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Responses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PersonalityTest\Model\Table\ResponsesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \PersonalityTest\Model\Table\ResponsesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
