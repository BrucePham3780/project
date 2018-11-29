<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class CustomersController extends AppController
{


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

    public function login(){

        $this->viewBuilder()->setLayout('customers');
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

    }


    public function Order()
    {

    }

    public function Cart(){
        $this->viewBuilder()->setLayout('customers');
    }
    
    
}
