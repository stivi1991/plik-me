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
  $user = $this->Auth->user();
}


public function beforeFilter(Event $event)
{
    parent::beforeFilter($event);
    $user = $this->Auth->user();
    $this->Auth->allow(['register']);
}

    // LOGIN
    public function login()
    {

      $uid = $this->Auth->user()['_matchingData']['Users']['id'];
      if($uid) {
        return $this->redirect($this->Auth->redirectUrl('/users/userpanel'));
      }

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if( $user['_matchingData']['Users']['role'] === 'ADMIN') {
                   return $this->redirect($this->Auth->redirectUrl('/admin'));
                } else {
                   return $this->redirect($this->Auth->redirectUrl('/users/userpanel'));
                }
            }
            $this->Flash->error(__('Niepoprawne hasło, lub email. Spróbuj ponownie.'));
        }
    }




    // LOGOUT
    public function logout(){
        $this->Auth->logout();
        $this->redirect('/');
    }

    // SIGN UP ACTION
    public function register() {

      $uid = $this->Auth->user()['_matchingData']['Users']['id'];
      if($uid) {
        $this->Flash->error(__('Posiadasz już konto i jesteś już zalogowany.'));
        return $this->redirect($this->Auth->redirectUrl('/users/userpanel'));
      }

      $entity = $this->Users->newEntity();
      $this->loadModel('HashedData');
      $this->loadModel('PersonalInfo');
      $entity_info = $this->PersonalInfo->newEntity();
      $entity_pass = $this->HashedData->newEntity();
if ($this->request->is('post')) {
      $entity = $this->Users->patchEntity($entity, $this->request->getData());
      $entity_info = $this->PersonalInfo->patchEntity($entity_info, $this->request->getData());
      $entity_pass = $this->HashedData->patchEntity($entity_pass, $this->request->getData());
      if (!empty($this->request->getData('email')) ||
          !empty($this->request->getData('password')) ||
          !empty($this->request->getData('password_confirm')) ||
          !empty($this->request->getData('name_first')) ||
          !empty($this->request->getData('name_last')))
          {
        if($this->request->getData(['password']) == $this->request->getData(['password_confirm']))
        {
          if(!$entity->getErrors() && !$entity_pass->getErrors() && !$entity_info->getErrors())
        {
          if($this->Users->save($entity)){
          $this->PersonalInfo->save($entity_info);
          $this->HashedData->save($entity_pass);
          $this->Flash->success(__('Rejestraca poprawna. Możesz się zalogować. Poczekaj na weryfikację Twoich danych, aby móc w pełni kożystać z serwisu.'));
          return $this->redirect($this->Auth->redirectUrl('/users/login'));
        } else {
          $this->Flash->error(__('Konto z podanym adresem email już istnieje. Zaloguj się.'));
          return $this->redirect($this->Auth->redirectUrl('/users/login'));
        }
      }
    }
      else {
        return $this->Flash->error(__('Podane hasła muszą być identyczne.'));
      }
}
  else {
    return $this->Flash->error(__('Uzupełnij wszystkie dane.'));
  }
}
}

  // USER PANEL

  public function userpanel()
    {
      $uid = $this->Auth->user()['_matchingData']['Users']['id'];
      if($uid) {
      $user = $this->Users->get($uid);
      $info = $this->PersonalInfo->get($uid);
      $this->set('user', $user);
      $this->set('info', $info);
    } else {
      $this->redirect($this->Auth->redirectUrl('/users/login'));
    }
  }


}
