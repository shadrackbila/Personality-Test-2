<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PersonalityTest\Model\Table\QuestionsTable;

/**
 * PersonalityTest\Model\Table\QuestionsTable Test Case
 */
class QuestionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PersonalityTest\Model\Table\QuestionsTable
     */
    protected $Questions;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Questions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Questions') ? [] : ['className' => QuestionsTable::class];
        $this->Questions = $this->getTableLocator()->get('Questions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Questions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PersonalityTest\Model\Table\QuestionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
