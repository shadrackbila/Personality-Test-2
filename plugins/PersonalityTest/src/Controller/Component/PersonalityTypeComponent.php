<?php
declare(strict_types=1);

namespace PersonalityTest\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class PersonalityTypeComponent extends Component
{
    public function getByName(string $name)
    {
        $personalityTypeTable = TableRegistry::getTableLocator()->get('PersonalityTest.PersonalityType');
        return $personalityTypeTable->find()->where(['name' => $name])->first();
    }
}
