<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

  var $name = 'Users';
  var $helpers = array('Html', 'Form');
  var $scaffold;


public function initialize() {

  parent::initialize();
  $this->loadModel('PersonalInfo');
}
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $this->loadModel('HashedData');
      $pass = $this->HashedData->newEntity();
      $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $pass = $this->HashedData->patchEntity($pass, $this->request->getData());
            if ($this->Users->save($user) && $this->HashedData->save($pass)) {
                $this->Flash->success(__('The user has been saved.'));

              return $this->redirect($this->Auth->redirectUrl());  return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(Event $event){
        $this->Auth->allow('register');
    }




    // LOGIN
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl(['action' => 'index']));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }




    // LOGOUT
    public function logout(){
        $this->Auth->logout();
        $this->redirect('/');
    }

    // SIGN UP ACTION
    public function register() {
      $entity = $this->Users->newEntity();
      $this->loadModel('HashedData');
      $this->loadModel('PersonalInfo');
      $entity_info = $this->PersonalInfo->newEntity();
      $entity_pass = $this->HashedData->newEntity();
if ($this->request->is('post')) {
      $entity = $this->Users->patchEntity($entity, $this->request->getData());
      $entity_info = $this->PersonalInfo->patchEntity($entity_info, $this->request->getData());
      $entity_pass = $this->HashedData->patchEntity($entity_pass, $this->request->getData());
      var_dump($entity);
      var_dump($entity_info);
      var_dump($entity_pass);
      if (!empty($this->request->getData('email')) &&
          !empty($this->request->getData('password')) &&
          !empty($this->request->getData('password_confirm')) &&
          !empty($this->request->getData('name_first')) &&
          !empty($this->request->getData('name_last')))
          {
        if($this->request->getData(['password']) == $this->request->getData(['password_confirm']))
        {
          if(!$entity->getErrors() && !$entity_pass->getErrors() && !$entity_info->getErrors())
        {
          $this->Users->save($entity);
          $this->PersonalInfo->save($entity_info);
          $this->HashedData->save($entity_pass);
          $this->Auth->setUser($entity);
          return $this->redirect($this->Auth->redirectUrl(['action' => 'index']));
        } else {
          $this->Flash->error(__('Account with this data already exists.'));
        }
      }
      else {
        $this->Flash->error(__('Passwords must match.'));
      }
}
  else {
    $this->Flash->error(__('Please fill mandatory data.'));
  }
}
}

  // USER PANEL

  public function userpanel()
    {

    }


}
