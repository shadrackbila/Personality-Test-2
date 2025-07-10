<?php
declare(strict_types=1);

namespace PersonalityTest\Controller;

use PersonalityTest\Controller\AppController;

/**
 * PersonalityType Controller
 *
 * @property \PersonalityTest\Model\Table\PersonalityTypeTable $PersonalityType
 */
class PersonalityTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->PersonalityType->find();
        $personalityType = $this->paginate($query);

        $this->set(compact('personalityType'));
    }

    /**
     * View method
     *
     * @param string|null $id Personality Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personalityType = $this->PersonalityType->get($id, contain: []);
        $this->set(compact('personalityType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personalityType = $this->PersonalityType->newEmptyEntity();
        if ($this->request->is('post')) {
            $personalityType = $this->PersonalityType->patchEntity($personalityType, $this->request->getData());
            if ($this->PersonalityType->save($personalityType)) {
                $this->Flash->success(__('The personality type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personality type could not be saved. Please, try again.'));
        }
        $this->set(compact('personalityType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personality Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personalityType = $this->PersonalityType->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personalityType = $this->PersonalityType->patchEntity($personalityType, $this->request->getData());
            if ($this->PersonalityType->save($personalityType)) {
                $this->Flash->success(__('The personality type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personality type could not be saved. Please, try again.'));
        }
        $this->set(compact('personalityType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personality Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personalityType = $this->PersonalityType->get($id);
        if ($this->PersonalityType->delete($personalityType)) {
            $this->Flash->success(__('The personality type has been deleted.'));
        } else {
            $this->Flash->error(__('The personality type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
