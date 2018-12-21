<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shipping Controller
 *
 * @property \App\Model\Table\ShippingTable $Shipping
 *
 * @method \App\Model\Entity\Shipping[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShippingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Orders']
        ];
        $shipping = $this->paginate($this->Shipping);
        $this->set(compact('shipping'));
    }

    /**
     * View method
     *
     * @param string|null $id Shipping id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shipping = $this->Shipping->get($id, [
            'contain' => ['Users', 'Orders']
        ]);

        $this->set('shipping', $shipping);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shipping = $this->Shipping->newEntity();
        if ($this->request->is('post')) {
            $shipping = $this->Shipping->patchEntity($shipping, $this->request->getData());
            if ($this->Shipping->save($shipping)) {
                $this->Flash->success(__('The shipping has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipping could not be saved. Please, try again.'));
        }
        $users = $this->Shipping->Users->find('list', ['limit' => 200]);
        $order = $this->Shipping->Orders->find('list', ['limit' => 200]);
        $this->set(compact('shipping', 'users', 'order'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipping id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shipping = $this->Shipping->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shipping = $this->Shipping->patchEntity($shipping, $this->request->getData());
            if ($this->Shipping->save($shipping)) {
                $this->Flash->success(__('The shipping has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipping could not be saved. Please, try again.'));
        }
        $users = $this->Shipping->Users->find('list', ['limit' => 200]);
        $order = $this->Shipping->Orders->find('list', ['limit' => 200]);
        $this->set(compact('shipping', 'users', 'order'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipping id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shipping = $this->Shipping->get($id);
        if ($this->Shipping->delete($shipping)) {
            $this->Flash->success(__('The shipping has been deleted.'));
        } else {
            $this->Flash->error(__('The shipping could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
