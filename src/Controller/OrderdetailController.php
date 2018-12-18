<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orderdetail Controller
 *
 * @property \App\Model\Table\OrderdetailTable $Orderdetail
 *
 * @method \App\Model\Entity\Orderdetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderdetailController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Orders']
        ];
        $orderdetail = $this->paginate($this->Orderdetail);

        $this->set(compact('orderdetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Orderdetail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderdetail = $this->Orderdetail->get($id, [
            'contain' => ['Products', 'Orders']
        ]);

        $this->set('orderdetail', $orderdetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderdetail = $this->Orderdetail->newEntity();
        if ($this->request->is('post')) {
            $orderdetail = $this->Orderdetail->patchEntity($orderdetail, $this->request->getData());
            if ($this->Orderdetail->save($orderdetail)) {
                $this->Flash->success(__('The orderdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orderdetail could not be saved. Please, try again.'));
        }
        $procs = $this->Orderdetail->Products->find('list', ['limit' => 200]);
        $order = $this->Orderdetail->Orders->find('list', ['limit' => 200]);
        $this->set(compact('orderdetail', 'product', 'order'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orderdetail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderdetail = $this->Orderdetail->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderdetail = $this->Orderdetail->patchEntity($orderdetail, $this->request->getData());
            if ($this->Orderdetail->save($orderdetail)) {
                $this->Flash->success(__('The orderdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orderdetail could not be saved. Please, try again.'));
        }
        $procs = $this->Orderdetail->Procs->find('list', ['limit' => 200]);
        $order = $this->Orderdetail->Order->find('list', ['limit' => 200]);
        $this->set(compact('orderdetail', 'procs', 'order'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orderdetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderdetail = $this->Orderdetail->get($id);
        if ($this->Orderdetail->delete($orderdetail)) {
            $this->Flash->success(__('The orderdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The orderdetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
