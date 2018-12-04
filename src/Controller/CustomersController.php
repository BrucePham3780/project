<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

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

        $this->loadComponent('Auth');
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


    public function Order()
    {

    }

    public function Cart(){
        $this->viewBuilder()->setLayout('customers');
    }
    
    
}
