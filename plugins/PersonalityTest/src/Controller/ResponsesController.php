<?php
declare(strict_types=1);

namespace PersonalityTest\Controller;

use PersonalityTest\Controller\AppController;

/**
 * Responses Controller
 *
 * @property \PersonalityTest\Model\Table\ResponsesTable $Responses
 */
class ResponsesController extends AppController
{

   /* public function saveResponse($userId, $questionId, $answerId)
{
    $response = $this->newEmptyEntity();
    $response->user_id = $userId;
    $response->question_id = $questionId;
    $response->answer_id = $answerId;

    return $this->save($response);
}*/

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Responses->find()
            ->contain(['Users', 'Questions', 'Answers']);
        $responses = $this->paginate($query);

        $this->set(compact('responses'));
    }

    /**
     * View method
     *
     * @param string|null $id Response id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $response = $this->Responses->get($id, contain: ['Users', 'Questions', 'Answers']);
        $this->set(compact('response'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $response = $this->Responses->newEmptyEntity();
        if ($this->request->is('post')) {
            $response = $this->Responses->patchEntity($response, $this->request->getData());
            if ($this->Responses->save($response)) {
                $this->Flash->success(__('The response has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The response could not be saved. Please, try again.'));
        }
        $users = $this->Responses->Users->find('list', limit: 200)->all();
        $questions = $this->Responses->Questions->find('list', limit: 200)->all();
        $answers = $this->Responses->Answers->find('list', limit: 200)->all();
        $this->set(compact('response', 'users', 'questions', 'answers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Response id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $response = $this->Responses->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $response = $this->Responses->patchEntity($response, $this->request->getData());
            if ($this->Responses->save($response)) {
                $this->Flash->success(__('The response has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The response could not be saved. Please, try again.'));
        }
        $users = $this->Responses->Users->find('list', limit: 200)->all();
        $questions = $this->Responses->Questions->find('list', limit: 200)->all();
        $answers = $this->Responses->Answers->find('list', limit: 200)->all();
        $this->set(compact('response', 'users', 'questions', 'answers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Response id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response = $this->Responses->get($id);
        if ($this->Responses->delete($response)) {
            $this->Flash->success(__('The response has been deleted.'));
        } else {
            $this->Flash->error(__('The response could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
