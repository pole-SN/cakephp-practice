<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientsproject[]|\Cake\Collection\CollectionInterface $clientsprojects
 */
?>
<div class="clientsprojects index content">
    <?= $this->Html->link(__('New Clientsproject'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientsprojects') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('create') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientsprojects as $clientsproject): ?>
                <tr>
                    <td><?= $this->Number->format($clientsproject->id) ?></td>
                    <td><?= $clientsproject->has('client') ? $this->Html->link($clientsproject->client->id, ['controller' => 'Clients', 'action' => 'view', $clientsproject->client->id]) : '' ?></td>
                    <td><?= $clientsproject->has('project') ? $this->Html->link($clientsproject->project->id, ['controller' => 'Projects', 'action' => 'view', $clientsproject->project->id]) : '' ?></td>
                    <td><?= h($clientsproject->create) ?></td>
                    <td><?= h($clientsproject->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clientsproject->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientsproject->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientsproject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientsproject->id)]) ?>
                    </td>
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
