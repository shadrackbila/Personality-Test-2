<?php

namespace PersonalityTest\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class UserComponent extends Component
{
    public function getUsername()
    {
        $usersTable = TableRegistry::getTableLocator()->get('PersonalityTest.Users');
        
        $userId = 1;

        $user = $usersTable->get($userId);
        
        return isset($user['Username']) ? $user['Username'] : null;
    }
}
