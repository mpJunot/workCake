<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Produits Controller
 *
 * @property \App\Model\Table\ProduitsTable $Produits
 * @method \App\Model\Entity\Produit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProduitsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $produits = $this->paginate($this->Produits);

        $this->set(compact('produits'));
    }

    /**
     * View method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produit = $this->Produits->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('produit'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produit = $this->Produits->newEmptyEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produit could not be saved. Please, try again.'));
        }
        $users = $this->Produits->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('produit', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produit = $this->Produits->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('The produit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produit could not be saved. Please, try again.'));
        }
        $users = $this->Produits->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('produit', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produit id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produit = $this->Produits->get($id);
        if ($this->Produits->delete($produit)) {
            $this->Flash->success(__('The produit has been deleted.'));
        } else {
            $this->Flash->error(__('The produit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
