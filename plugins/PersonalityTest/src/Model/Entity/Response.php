<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Entity;

use Cake\ORM\Entity;

/**
 * Response Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $question_id
 * @property int $answer_id
 * @property \Cake\I18n\DateTime $answered_on
 *
 * @property \PersonalityTest\Model\Entity\User $user
 * @property \PersonalityTest\Model\Entity\Question $question
 * @property \PersonalityTest\Model\Entity\Answer $answer
 */
class Response extends Entity
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
        'question_id' => true,
        'answer_id' => true,
        'answered_on' => true,
        'user' => true,
        'question' => true,
        'answer' => true,
    ];
}
