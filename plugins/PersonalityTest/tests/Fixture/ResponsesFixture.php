<?php
declare(strict_types=1);

namespace PersonalityTest\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResponsesFixture
 */
class ResponsesFixture extends TestFixture
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
                'user_id' => 1,
                'question_id' => 1,
                'answer_id' => 1,
                'answered_on' => '2025-04-18 12:08:08',
            ],
        ];
        parent::init();
    }
}
