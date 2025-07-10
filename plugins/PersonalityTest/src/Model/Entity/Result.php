<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $score_summary
 * @property \Cake\I18n\DateTime $results_on
 *
 * @property \PersonalityTest\Model\Entity\User $user
 */
class Result extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'score_summary' => true,
        'results_on' => true,
        'user' => true,
    ];
}
