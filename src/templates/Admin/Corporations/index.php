<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Corporation[]|\Cake\Collection\CollectionInterface $corporations
 */
?>
<div class="corporations index content">
    <?= $this->Html->link(__('New Corporation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Corporations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('name_kana') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('address1') ?></th>
                    <th><?= $this->Paginator->sort('address2') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('fax') ?></th>
                    <th><?= $this->Paginator->sort('email1') ?></th>
                    <th><?= $this->Paginator->sort('email2') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($corporations as $corporation): ?>
                <tr>
                    <td><?= $this->Number->format($corporation->id) ?></td>
                    <td><?= h($corporation->name) ?></td>
                    <td><?= h($corporation->name_kana) ?></td>
                    <td><?= h($corporation->postal_code) ?></td>
                    <td><?= h($corporation->address1) ?></td>
                    <td><?= h($corporation->address2) ?></td>
                    <td><?= h($corporation->phone) ?></td>
                    <td><?= h($corporation->fax) ?></td>
                    <td><?= h($corporation->email1) ?></td>
                    <td><?= h($corporation->email2) ?></td>
                    <td><?= h($corporation->url) ?></td>
                    <td><?= h($corporation->created) ?></td>
                    <td><?= h($corporation->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $corporation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $corporation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $corporation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $corporation->id)]) ?>
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
