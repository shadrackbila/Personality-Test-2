<?php
declare(strict_types=1);

namespace PersonalityTest\Controller;

use PersonalityTest\Controller\AppController;

/**
 * Questions Controller
 *
 * @property \PersonalityTest\Model\Table\QuestionsTable $Questions
 */
class QuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($input = null)
    {

        $session = $this->getRequest()->getSession();

        if (!$session->check('current_question_id'))
           {
            $session->write('current_question_id', 1);
           }

        if($input == -100)
        {
            $idCounter = 1;
            $session->destroy();     
        }
        else
        {
            $idCounter = $session->read('current_question_id');
        
        //Checks if user chose next , which returns 1 using $input and ensures 
        //$input is not null for the first value
        //Incrments the id of the question if $input = 1
        if ($input == 1 || $input == null)
        {
            if($session->read('current_question_id') < 30)
            $session->write('current_question_id',$idCounter + 1);
            else 
            $this->Flash->success(__('You have reached the last question.'));

        }

        if($input == 0 && $input != null)
        {
            if($session->read('current_question_id') > 1 )
            $session->write('current_question_id',$idCounter - 1);
            else
            $this->Flash->error(__('Please start from Question 1.'));

        }

         $idCounter = $session->read('current_question_id');
    }

        $query = $this->Questions->find();
        $questions = $this->paginate($query);

        $singleQuestion = $this->Questions->get($idCounter);
        $this->set(compact('singleQuestion','questions'));

    }

    /**
     * View method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $question = $this->Questions->get($id, contain: []);
        $this->set(compact('question'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $question = $this->Questions->newEmptyEntity();
        if ($this->request->is('post')) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $this->set(compact('question'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $question = $this->Questions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $this->set(compact('question'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $question = $this->Questions->get($id);
        if ($this->Questions->delete($question)) {
            $this->Flash->success(__('The question has been deleted.'));
        } else {
            $this->Flash->error(__('The question could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
