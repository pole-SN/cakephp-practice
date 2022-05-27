<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Sales Controller
 *
 * @property \App\Model\Table\SalesTable $Sales
 * @method \App\Model\Entity\Sale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // フロントエンドの抽出条件を維持するためのset
        $clientId = $this->request->getQuery('client');
        $this->set(compact('clientId'));
        $projectId = $this->request->getQuery('project');
        $this->set(compact('projectId'));

        // select boxによる抽出の実施と結果のset
        $this->paginate = [
            'contain' => ['Clients', 'Projects'],
            'limit' => 10,
        ];
        $query = $this->Sales->find('all');
        if ($clientId != null) {
            $query = $query->where(['client_id' => $clientId]);
        }
        if ($projectId != null) {
            $query = $query->where(['project_id' => $projectId]);
        }
        $sales = $this->paginate($query);
        $this->set(compact('sales'));

        // 合計金額をset
        $totalProfit = $this->getTotal($sales);
        $this->set(compact('totalProfit'));

        // 抽出用select boxの表示名用set
        $this->set('clients', $this->Sales->Clients->find(
            'list',
            [
                'keyField' => 'id',
                'valueField' => function ($entity) {
                    return $entity['sei'] . " " . $entity['mei'];
                }
            ]
        ));

        $this->set('projects', $this->Sales->Projects->find(
            'list',
            [
                'keyField' => 'id',
                'valueField' => function ($entity) {
                    return $entity['project_name'];
                }
            ]
        ));
    }

    private function getTotal($sales)
    {
        $totalProfit = 0;
        foreach ($sales as $sale) {
            $totalProfit = $totalProfit + $sale->profit;
        }
        return $totalProfit;
    }

    /**
     * View method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => ['Clients', 'Projects'],
        ]);

        $this->set(compact('sale'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sale = $this->Sales->newEmptyEntity();
        if ($this->request->is('post')) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        $clients = $this->Sales->Clients->find('list', ['limit' => 200])->all();
        $projects = $this->Sales->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('sale', 'clients', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        $clients = $this->Sales->Clients->find('list', ['limit' => 200])->all();
        $projects = $this->Sales->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('sale', 'clients', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sale = $this->Sales->get($id);
        if ($this->Sales->delete($sale)) {
            $this->Flash->success(__('The sale has been deleted.'));
        } else {
            $this->Flash->error(__('The sale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
