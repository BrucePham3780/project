<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Catedetail Controller
 *
 * @property \App\Model\Table\CatedetailTable $Catedetail
 *
 * @method \App\Model\Entity\Catedetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatedetailController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $catedetail = $this->paginate($this->Catedetail);

        $this->set(compact('catedetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Catedetail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catedetail = $this->Catedetail->get($id, [
            'contain' => ['Category']
        ]);

        $this->set('catedetail', $catedetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catedetail = $this->Catedetail->newEntity();
        if ($this->request->is('post')) {
            $catedetail = $this->Catedetail->patchEntity($catedetail, $this->request->getData());
            if ($this->Catedetail->save($catedetail)) {
                $this->Flash->success(__('The catedetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catedetail could not be saved. Please, try again.'));
        }

        $category = $this->Catedetail->Category->find('list', ['limit' => 200]);
        $this->set(compact('catedetail', 'category'));
        $this->set('_serialize',['catedetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Catedetail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catedetail = $this->Catedetail->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catedetail = $this->Catedetail->patchEntity($catedetail, $this->request->getData());
            if ($this->Catedetail->save($catedetail)) {
                $this->Flash->success(__('The catedetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catedetail could not be saved. Please, try again.'));
        }
        

        $category = $this->Products->Category->find('list', ['limit' => 200]);
        $this->set(compact('catedetail', 'category'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Catedetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catedetail = $this->Catedetail->get($id);
        if ($this->Catedetail->delete($catedetail)) {
            $this->Flash->success(__('The catedetail has been deleted.'));
        } else {
            $this->Flash->error(__('The catedetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
