<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PersonalityTest\Model\Table\ResultsTable;

/**
 * PersonalityTest\Model\Table\ResultsTable Test Case
 */
class ResultsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PersonalityTest\Model\Table\ResultsTable
     */
    protected $Results;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Results',
        'plugin.PersonalityTest.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Results') ? [] : ['className' => ResultsTable::class];
        $this->Results = $this->getTableLocator()->get('Results', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Results);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PersonalityTest\Model\Table\ResultsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \PersonalityTest\Model\Table\ResultsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
