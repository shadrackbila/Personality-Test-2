<?php
declare(strict_types=1);

namespace PersonalityTest\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResultsFixture
 */
class ResultsFixture extends TestFixture
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
                'score_summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'results_on' => '2025-04-19 10:04:11',
            ],
        ];
        parent::init();
    }
}
