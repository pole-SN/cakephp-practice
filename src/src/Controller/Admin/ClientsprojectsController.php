<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Clientsprojects Controller
 *
 * @property \App\Model\Table\ClientsprojectsTable $Clientsprojects
 * @method \App\Model\Entity\Clientsproject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsprojectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Projects'],
        ];
        $clientsprojects = $this->paginate($this->Clientsprojects);

        $this->set(compact('clientsprojects'));
    }

    /**
     * View method
     *
     * @param string|null $id Clientsproject id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientsproject = $this->Clientsprojects->get($id, [
            'contain' => ['Clients', 'Projects'],
        ]);

        $this->set(compact('clientsproject'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientsproject = $this->Clientsprojects->newEmptyEntity();
        if ($this->request->is('post')) {
            $clientsproject = $this->Clientsprojects->patchEntity($clientsproject, $this->request->getData());
            if ($this->Clientsprojects->save($clientsproject)) {
                $this->Flash->success(__('The clientsproject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientsproject could not be saved. Please, try again.'));
        }
        $clients = $this->Clientsprojects->Clients->find('list', ['limit' => 200])->all();
        $projects = $this->Clientsprojects->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('clientsproject', 'clients', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientsproject id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientsproject = $this->Clientsprojects->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientsproject = $this->Clientsprojects->patchEntity($clientsproject, $this->request->getData());
            if ($this->Clientsprojects->save($clientsproject)) {
                $this->Flash->success(__('The clientsproject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientsproject could not be saved. Please, try again.'));
        }
        $clients = $this->Clientsprojects->Clients->find('list', ['limit' => 200])->all();
        $projects = $this->Clientsprojects->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('clientsproject', 'clients', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientsproject id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientsproject = $this->Clientsprojects->get($id);
        if ($this->Clientsprojects->delete($clientsproject)) {
            $this->Flash->success(__('The clientsproject has been deleted.'));
        } else {
            $this->Flash->error(__('The clientsproject could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
