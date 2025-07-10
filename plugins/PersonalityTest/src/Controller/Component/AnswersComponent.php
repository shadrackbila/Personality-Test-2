<?php
namespace PersonalityTest\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class AnswersComponent extends Component
{
    public function getAnswerById($answerId)
    {
        $answersTable = TableRegistry::getTableLocator()->get('PersonalityTest.Answers');
        return $answersTable->get($answerId);
    }

    public function getAnswerPoints($answerId)
    {
        $answer = $this->getAnswerById($answerId);
        return $answer->points ?? null;
    }

    public function getAnswerTraits($answerId)
    {
        $answer = $this->getAnswerById($answerId);
        return $answer->traits ?? null;
    }
}
