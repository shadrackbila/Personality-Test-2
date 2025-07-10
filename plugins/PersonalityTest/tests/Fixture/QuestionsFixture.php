<?php
declare(strict_types=1);

namespace PersonalityTest\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 */
class QuestionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'Question_Text' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
