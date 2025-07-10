<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PersonalityTest\Model\Table\PersonalityTypeTable;

/**
 * PersonalityTest\Model\Table\PersonalityTypeTable Test Case
 */
class PersonalityTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PersonalityTest\Model\Table\PersonalityTypeTable
     */
    protected $PersonalityType;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.PersonalityType',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PersonalityType') ? [] : ['className' => PersonalityTypeTable::class];
        $this->PersonalityType = $this->getTableLocator()->get('PersonalityType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PersonalityType);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PersonalityTest\Model\Table\PersonalityTypeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
