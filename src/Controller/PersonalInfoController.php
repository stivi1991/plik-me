<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PersonalInfo Controller
 *
 * @property \App\Model\Table\PersonalInfoTable $PersonalInfo
 *
 * @method \App\Model\Entity\PersonalInfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonalInfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $personalInfo = $this->paginate($this->PersonalInfo);
        $this->set('personalInfo', $this->Name->find('all', $query_options));
    }

    /**
     * View method
     *
     * @param string|null $id Personal Info id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personalInfo = $this->PersonalInfo->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('personalInfo', $personalInfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personalInfo = $this->PersonalInfo->newEntity();
        if ($this->request->is('post')) {
            $personalInfo = $this->PersonalInfo->patchEntity($personalInfo, $this->request->getData());
            if ($this->PersonalInfo->save($personalInfo)) {
                $this->Flash->success(__('The personal info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personal info could not be saved. Please, try again.'));
        }
        $this->set(compact('personalInfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personal Info id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personalInfo = $this->PersonalInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personalInfo = $this->PersonalInfo->patchEntity($personalInfo, $this->request->getData());
            if ($this->PersonalInfo->save($personalInfo)) {
                $this->Flash->success(__('The personal info has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personal info could not be saved. Please, try again.'));
        }
        $this->set(compact('personalInfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personal Info id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personalInfo = $this->PersonalInfo->get($id);
        if ($this->PersonalInfo->delete($personalInfo)) {
            $this->Flash->success(__('The personal info has been deleted.'));
        } else {
            $this->Flash->error(__('The personal info could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
