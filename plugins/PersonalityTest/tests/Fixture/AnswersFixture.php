<?php
declare(strict_types=1);

namespace PersonalityTest\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnswersFixture
 */
class AnswersFixture extends TestFixture
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
                'text' => 'Lorem ipsum dolor sit amet',
                'points' => 1,
                'traits' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
