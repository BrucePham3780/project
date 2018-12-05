<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Cart Controller
 *
 * @property \App\Model\Table\CartTable $Cart
 *
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Users']
        ];
        $cart = $this->paginate($this->Cart);

        $this->set(compact('cart'));
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cart = $this->Cart->get($id, [
            'contain' => ['Products', 'Users']
        ]);

        $this->set('cart', $cart);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user1 = $this->Auth->user();
        // $this->set('user1',$user1);
        // $user_id = $user1['id']; 
 
        $cart = $this->Cart->newEntity();
        $cart->user_id = $user1['id'];
        pr($cart);die;
        if ($this->request->is('post')) {
            $cart = $this->Cart->patchEntity($cart, $this->request->getData());
            


            if ($this->Cart->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));
                pr($cart);die;
                return $this->redirect(['controller'=>'customers','action' => 'manyProduct']);
            }
            $this->Flash->error(__('The cart could not be saved. Please, try again.'));
        }
        //$products = $this->Cart->Products->find('list', ['limit' => 200]);
        $this->set(compact('cart'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cart = $this->Cart->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cart = $this->Cart->patchEntity($cart, $this->request->getData());
            if ($this->Cart->save($cart)) {
                $this->Flash->success(__('The cart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cart could not be saved. Please, try again.'));
        }
        $products = $this->Cart->Products->find('list', ['limit' => 200]);
        $users = $this->Cart->Users->find('list', ['limit' => 200]);
        $this->set(compact('cart', 'products', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Cart->get($id);
        if ($this->Cart->delete($cart)) {
            $this->Flash->success(__('The cart has been deleted.'));
        } else {
            $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
