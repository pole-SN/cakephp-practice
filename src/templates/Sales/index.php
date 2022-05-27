<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale[]|\Cake\Collection\CollectionInterface $sales
 */
?>
<div class="column-responsive column-80">
    <div class="sales index content">
        <div class="float-right">
            売上合計額：<?= $this->Number->currency($totalProfit, 'JPY') ?>
        </div>
        <h3><?= __('売上管理') ?></h3>
        <?= $this->Form->create($sales, [
            'type' => 'get',
            'url' => [
                'controller' => 'Sales',
                'action' => 'index'
            ]
        ]) ?>

        <div class="extract-form">
            <label>検索・抽出</label>
            <div>
                <div>
                    <?= $this->Form->select('client', $clients, ['empty' => 'クライアント指定なし', 'value' => $clientId]) ?>
                </div>
                <div>
                    <?= $this->Form->select('project', $projects, ['empty' => 'プロジェクト指定なし', 'value' => $projectId]) ?>
                </div>
            </div>
            <?= $this->Form->submit('抽出') ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('クライアント') ?></th>
                        <th><?= $this->Paginator->sort('プロジェクト') ?></th>
                        <th><?= $this->Paginator->sort('見積もり') ?></th>
                        <th><?= $this->Paginator->sort('売上') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sales as $sale) : ?>
                        <tr>
                            <td><?= $sale->has('client') ? $this->Html->link($sale->client->sei . " " . $sale->client->mei, ['controller' => 'Clients', 'action' => 'view', $sale->client->id]) : '' ?> 様</td>
                            <td><?= $sale->has('project') ? $this->Html->link($sale->project->project_name, ['controller' => 'Projects', 'action' => 'view', $sale->project->id]) : '' ?></td>
                            <td><?= $this->Number->currency($sale->quote, 'JPY') ?></td>
                            <td><?= $this->Number->currency($sale->profit, 'JPY') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</div>