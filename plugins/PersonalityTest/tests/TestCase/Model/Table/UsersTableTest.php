<?php
declare(strict_types=1);

namespace PersonalityTest\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PersonalityTest\Model\Table\UsersTable;

/**
 * PersonalityTest\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PersonalityTest\Model\Table\UsersTable
     */
    protected $Users;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PersonalityTest.Users',
        'plugin.PersonalityTest.Responses',
        'plugin.PersonalityTest.Results',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Users') ? [] : ['className' => UsersTable::class];
        $this->Users = $this->getTableLocator()->get('Users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PersonalityTest\Model\Table\UsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
