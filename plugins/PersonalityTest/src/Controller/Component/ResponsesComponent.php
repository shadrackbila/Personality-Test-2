<?php
declare(strict_types=1);
namespace PersonalityTest\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;


class ResponsesComponent extends Component
{

    public function saveResponse($userId, $questionId, $answerId) : bool
    {
        $responsesTable = TableRegistry::getTableLocator()->get('PersonalityTest.Responses');
        $response = $responsesTable->newEmptyEntity();

        $response->user_id = $userId;
        $response->question_id = $questionId;
        $response->answer_id = $answerId;


        return(bool) $responsesTable->save($response);

 
    }
}
