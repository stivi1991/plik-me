<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HashedData Controller
 *
 * @property \App\Model\Table\HashedDataTable $HashedData
 *
 * @method \App\Model\Entity\HashedData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HashedDataController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hashedData = $this->paginate($this->HashedData);

        $this->set(compact('hashedData'));
    }

    /**
     * View method
     *
     * @param string|null $id Hashed Data id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hashedData = $this->HashedData->get($id, [
            'contain' => []
        ]);

        $this->set('hashedData', $hashedData);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hashedData = $this->HashedData->newEntity();
        if ($this->request->is('post')) {
            $hashedData = $this->HashedData->patchEntity($hashedData, $this->request->getData());
            if ($this->HashedData->save($hashedData)) {
                $this->Flash->success(__('The hashed data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hashed data could not be saved. Please, try again.'));
        }
        $this->set(compact('hashedData'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hashed Data id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hashedData = $this->HashedData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hashedData = $this->HashedData->patchEntity($hashedData, $this->request->getData());
            if ($this->HashedData->save($hashedData)) {
                $this->Flash->success(__('The hashed data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hashed data could not be saved. Please, try again.'));
        }
        $this->set(compact('hashedData'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hashed Data id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hashedData = $this->HashedData->get($id);
        if ($this->HashedData->delete($hashedData)) {
            $this->Flash->success(__('The hashed data has been deleted.'));
        } else {
            $this->Flash->error(__('The hashed data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
