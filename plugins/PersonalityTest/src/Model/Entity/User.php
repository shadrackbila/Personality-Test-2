<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $Username
 *
 * @property \PersonalityTest\Model\Entity\Response[] $responses
 * @property \PersonalityTest\Model\Entity\Result[] $results
 */
class User extends Entity
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
        'Username' => true,
        'responses' => true,
        'results' => true,
    ];
}
