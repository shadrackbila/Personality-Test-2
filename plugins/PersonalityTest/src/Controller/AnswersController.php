<?php
declare(strict_types=1);

namespace PersonalityTest\Controller;

use PersonalityTest\Controller\AppController;
use PersonalityTest\Controller\Component\ResponsesComponent;

/**
 * Answers Controller
 *
 * @property \PersonalityTest\Model\Table\AnswersTable $Answers
 */
class AnswersController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('PersonalityTest.Responses');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Answers->find();
        $answers = $this->paginate($query);

        $this->set(compact('answers'));
    }

    /**
     * View method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $answer = $this->Answers->get($id, contain: ['Responses']);
        $this->set(compact('answer'));
    }


    public function assignValues()
    {
        if($this->request->is('post'))
        {
            $questionId = $this->request->getData('question_id');
            $data = $this->request->getData();
            $text = $data['text'] ?? null;
            $answersTable = $this->fetchTable('PersonalityTest.Answers');
            $session = $this->getRequest()->getSession();

            if ($questionId !== null) {
                $session->write('temp_question_id', $questionId);
            }
             //Traits that one might have ,they are mapped with the actual questions
            $questionTraitMap = [
              1 => 'Extraversion',
              2 => 'Discipline',
              3 => 'Agreeableness',
              4 => 'Discipline',
              5 => 'Extraversion',
              6 => 'Emotional Stability',
              7 => 'Discipline',
              8 => 'Extraversion',
              9 => 'Emotional Stability',
              10 => 'Agreeableness',
              11 => 'Openness to Experience',
              12 => 'Discipline',
              13 => 'Emotional Stability',
              14 => 'Agreeableness',
              15 => 'Extraversion',
              16 => 'Agreeableness',
              17 => 'Extraversion',
              18 => 'Agreeableness',
              19 => 'Discipline',
              20 => 'Discipline',
              21 => 'Discipline',
              22 => 'Discipline',
              23 => 'Emotional Stability',
              24 => 'Emotional Stability',
              25 => 'Discipline',
              26 => 'Extraversion',
              27 => 'Emotional Stability',
              28 => 'Openness to Experience',
              29 => 'Agreeableness',
              30 => 'Openness to Experience',
              -1 => 'No Answer',
           ];


            switch ($text)
            {
                case 'Strongly Disagree':
                    $points = 1;

                    break;

                case 'Disagree':
                    $points = 2;

                        break;

                case 'Neutral':
                    $points = 3;

                    break;   
                    
                case 'Agree':
                    $points = 4;

                    break;
                   
                case 'Strongly Agree':
                    $points = 5;

                    break;
                    
                    default:
                    $points = 0;
                    $data['text'] = 'No Answer';
                    $questionId = -1;

                    break;

            }

            $data['points'] = $points;
            $data['traits'] = $questionTraitMap[$questionId] ?? 'Unknown';

           $existingAnswer = $answersTable->find()
           ->where(['id' => $questionId])
           ->first();

           if ($existingAnswer) {

            $existingAnswer->trait = $data['traits'];
            $existingAnswer->points = $data['points'] ;
            $existingAnswer->text = $data['text'] ;

            $answerId = $existingAnswer->id;


            if (!$answersTable->save($existingAnswer)) 
             {
                $this->Flash->error('Failed to update answer');
            }

         
        }

        else
        {
            $this->redirect(['action' => 'add','?' => $data]);
            
        }          
          return $this->redirect(['controller' => 'Questions','action' => 'index' , 1]);
            
        }
    } 

    public function clearResponses()
    {
        $connection = $this->fetchTable('PersonalityTest.Answers')->getConnection();

        $connection->execute('SET FOREIGN_KEY_CHECKS = 0');

        $connection->execute('TRUNCATE TABLE answers');
        $connection->execute('TRUNCATE TABLE responses');

        $connection->execute('SET FOREIGN_KEY_CHECKS = 1');
    
        $this->Flash->success(__('All answers and responses have been reset.'));
       return $this->redirect(['controller' => 'Users','action' => 'index']);

    }
    


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */

    public function add()
   {
    $answer = $this->Answers->newEmptyEntity();
    $session = $this->getRequest()->getSession();

    $data = $this->request->is('post') ? $this->request->getData() : $this->request->getQuery();

    if (!empty($data)) {
        $answer = $this->Answers->patchEntity($answer, $data);
        if ($this->Answers->save($answer)) {

           //For test purposes $userId will always be = 1
            $userId = 1;
            $answerId = $answer->id;
            if ($session->check('temp_question_id')) {
                $questionId = $session->read('temp_question_id');
                $session->delete('temp_question_id'); 
            }
            $this->Responses->saveResponse( $userId, $questionId, $answerId);
            return $this->redirect(['controller' => 'Questions','action' => 'index' , 1]);
        }

        $this->Flash->error('Failed to save answer.');
    }

    $this->set(compact('answer'));
      }


    /**
     * Edit method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $answer = $this->Answers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $answer = $this->Answers->patchEntity($answer, $this->request->getData());
            if ($this->Answers->save($answer)) {
                $this->Flash->success(__('The answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answer could not be saved. Please, try again.'));
        }
        $this->set(compact('answer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $answer = $this->Answers->get($id);
        if ($this->Answers->delete($answer)) {
            $this->Flash->success(__('The answer has been deleted.'));
        } else {
            $this->Flash->error(__('The answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
