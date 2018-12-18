<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Role']
        ];
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
        $user2 = $this->Users->get($id, [
            'contain' => ['Role', 'Cart', 'Shipping']
        ]);

        $this->set('user2', $user2);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user2 = $this->Users->newEntity();
        if ($this->request->is('post')) {

            if(!empty($this->request->data['images']['name']))
                {

                    $filename = $this->request->data['images']['name'];
                    $uploadpath = 'img/';
                    $uploadfile =  $uploadpath.$filename;
                    if(move_uploaded_file($this->request->data['images']['tmp_name'], $uploadfile)){
                        
                        $this->request->data['images']= $filename;
                    }
                    
                }else{
                        $this->Flash->error(__('No file choosen'));
                    }

            $user2 = $this->Users->patchEntity($user2, $this->request->getData());

            if ($this->Users->save($user2)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $role = $this->Users->Role->find('list', ['limit' => 200]);

        $this->set(compact('user2', 'role'));
        $this->set('_serialize',['user2']);
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
        $user2 = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if(!empty($this->request->data['images']['name']))
                {
                    $filename = $this->request->data['images']['name'];
                    $uploadpath = 'img/';
                    $uploadfile =  $uploadpath.$filename;
                    if(move_uploaded_file($this->request->data['images']['tmp_name'], $uploadfile)){
                        
                        $this->request->data['images']= $filename;
                    }
                    
                }else{
                        $this->Flash->error(__('No file choosen'));
                    }
            $user2 = $this->Users->patchEntity($user2, $this->request->getData());
            if ($this->Users->save($user2)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $role = $this->Users->Role->find('list', ['limit' => 200]);
        $this->set(compact('user2', 'role'));
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
        $user2 = $this->Users->get($id);
        if ($this->Users->delete($user2)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



}
