<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class CustomersController extends AppController
{


    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow();
        //$this->Auth->allow(['index','manyProduct','cart','product','register']);

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('customers');

        $result = $this->loadModel('products');
        $data= $result->find();
        $this->set('product',$data);
        $result1 =$this->loadModel('category');
        $data1 = $result1->find();
        $this->set('category',$data1);

    }


    public function register(){
        $this->viewBuilder()->setLayout('customers');
        $userTbl = TableRegistry::get("Users");
        $user2 = $userTbl->newEntity();   
        $rs = $this->request->getData('Register');
        if ($this->request->is('post')) {
            // pr($rs);die;
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
            $user2->role_id = 3;
            $user2->$password = $hasher; 
            $user2 = $userTbl->patchEntity($user2,$rs);
            pr($user2);die;
            if ($userTbl->save($user2)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['controller'=>'customers','action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('user2'));
        $this->set('_serialize',['user2']);

        
    }

    //login
    public function login(){
        $this->autoRender = false;
        if($this->request->is('post')){

            $user1 = $this->Auth->identify();
            $perm = $user1['role_id'];
            if($perm == '1' || $perm == '2'){
                if($user1){
                $this->Auth->setUser($user1);
                return $this->redirect(['controller' => 'products', 'action'=>'index' ]);
                }
            }
            else{
                if($user1){
                $this->Auth->setUser($user1);
                return $this->redirect(['controller' => 'customers', 'action'=>'index' ]);
                }
            }

            // Bad Login
            $this->Flash->error('Incorrect Login');
            return $this->redirect(['controller'=> 'customers','action'=>'index']);

        }
    }


    //Logout
      public function logout() {

        
        $this->Auth->logout();
        $this->redirect(array('controller' => 'customers', 'action' => 'index'));
    }
    
    public function product($id = null)
    {
        $this->viewBuilder()->setLayout('customers');

        $result = $this->loadModel('products');

        $product = $result->get($id, [
            'contain' => ['Category']
        ]);
        $this->set('product', $product);

        $data= $result->find();
        $this->set('product2',$data);
    }

    public function manyProduct(){

        $this->viewBuilder()->setLayout('customers');

        $result = $this->loadModel('products');
        $product= $result->find();
        $this->set('product',$product);

        $result1 =$this->loadModel('category');
        $data1 = $result1->find();
        $this->set('category',$data1);
    }

    public function Cart(){
        $this->viewBuilder()->setLayout('customers');

        $user1 = $this->Auth->user();
        $cartTbl = TableRegistry::get("Cart");
        $cartList = $cartTbl->find('all', [
            'condition' => ['Cart.user_id' => $user1['id']],
            'contain' => ['Products','Users']
            
        ]);
        $this->set('cartList',$cartList);
        
    }

    public function Order()
    {
        $this->viewBuilder()->setLayout('customers');

        $user1 = $this->Auth->user();
        $orderTbl = TableRegistry::get("Order");
        $orderList = $orderTble->find('all', 
            ['condition' => ['Order.user_id' => $user1['id']],
             'contain' => ['Users']
            ]);        
        $this->set('orderList',$orderList);
    }  
    
    
}
