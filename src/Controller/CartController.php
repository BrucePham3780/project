<?php
namespace App\Controller;


use App\Controller\AppController;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;


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
     * View metho
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
        $this->autoRender = false;
        $user1 = $this->Auth->user();
        $cartTbl = TableRegistry::get("Cart");
        $cart = $cartTbl->newEntity();// load cart model in cake 3
        $cartDt = $this->request->getData();
        if ($this->request->is('post')) {
            $cartList = $cartTbl->find('all', [
                'conditions' => ['Cart.user_id' => $user1['id'],
                                'Cart.proc_id' => $cartDt['proc_id']
                               ]
            ])->first();
            // pr($cartList);die;
            // pr($cartList); pr($cartDt); die;
            // pr(!empty($cartList=='1'));die;
            if(!empty($cartList)){
                $cart = $cartTbl->patchEntity($cartList, $cartDt); 
                $cart->num_product =  $cartList->num_product + $cartDt['num_product'];
                $cart->tt_price =  $cartList->tt_price + $cartDt['tt_price'] * $cartDt['num_product'];
                $cart->user_id = $user1['id'];
                $cart->id = $cartList->id;

                if ($cartTbl->save($cart)) {
                    $this->Flash->success(__('The cart has been saved.'));
                    return $this->redirect(['controller'=>'customers','action' => 'manyProduct']);
                }
                $this->Flash->error(__('The cart could not be saved. Please, try again.'));
            }else{  
                $cart = $cartTbl->patchEntity($cart, $cartDt); 
                $cart->user_id = $user1['id'];
                if ($this->Cart->save($cart)) {
                    $this->Flash->success(__('The cart has been saved.'));
                    return $this->redirect(['controller'=>'customers','action' => 'manyProduct']);
                }
                $this->Flash->error(__('The cart could not be saved. Please, try again.'));
            }
        
        $this->set(compact('cart'));
        } 
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found. 
     */
    public function update($id = null)
    {   
        $this->autoRender = false;
        $user1 = $this->Auth->user();
        $cartTbl = TableRegistry::get("Cart");
        $cartList = $cartTbl->find('all', [
            'condition' => ['Cart.user_id' => $user1['id'] ]
            
        ]);
        $cd = $this->request->getData('OrderDetail');
        if ($this->request->is('post')) {
            // pr($this->request->getData());die;
            $carts = $cartTbl->patchEntities($cartList,$cd);
                if ($cartTbl->saveMany($carts)) {
                    $this->Flash->success(__('The cart has been deleted.'));
                    return $this->redirect(['controller'=>'customers','action' => 'cart']);

                } else {
                    $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
                }
        }
        $this->set(compact('cart'));
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
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Cart->get($id);
        if ($this->Cart->delete($cart)) {
            $this->Flash->success(__('The cart has been deleted.'));
        } else {
            $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'customers','action' => 'cart']);
    }
}
