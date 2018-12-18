<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
/**
 * Order Controller
 *
 * @property \App\Model\Table\OrderTable $Order
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $orders = $this->paginate($this->Orders);
        // pr($orders);die;
        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Users', 'Orderdetail', 'Shipping']
        ]);
        $this->set('order', $order);
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
        $orderTbl = TableRegistry::get("Orders");
        $order = $orderTbl->newEntity();
        $orderDetailTbl = TableRegistry::get("Orderdetail");
        $orderDetail = $orderDetailTbl->newEntity();
        if ($this->request->is('post')) {
            // pr($this->request->getData('OrderDetail'));die;
            $od = $this->request->getData('OrderDetail');
            $order = $orderTbl->patchEntity($order,$od);
            $orderDetail = $orderDetailTbl->patchEntities($orderDetail,$od);

            if ($orderTbl->save($order)) {
                $cartTbl = TableRegistry::get("Cart");
                $cartList = $cartTbl->find('all', [
                    'condition' => ['Cart.user_id' => $user1['id'] ]
            
                ]);
               
                // Can do 2 way to delete all entities in cart when send order 
                // foreach ($cartList as $row1) {
                //     $cartTbl->delete($row1);
                // }
 
                foreach($orderDetail as $row){
                    $row['order_id'] = $order->id;
                }
                if ($orderDetailTbl->saveMany($orderDetail)) {
                    $cartTbl->deleteAll(['Cart.user_id' => $user1['id']]);
                    $this->Flash->success(__('The order has been saved.'));
                    return $this->redirect(['controller'=>'customers','action' => 'manyProduct']);
                }   
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));

        }
        $this->set(compact('order'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        $status = [
            'Done' => 'Done',
            'Cancel' => 'Cancel'
        ];

        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $this->set(compact('order', 'users','status'));

    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
