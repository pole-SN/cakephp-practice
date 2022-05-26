<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="column-responsive column-80">
    <div class="clients index content">
        <!-- <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
        <h3><?= __('クライアント') ?></h3>
        <div class="table-responsive">
            <table id="table">
                <thead>
                    <tr>
                        <th></th>
                        <th><?= $this->Paginator->sort('お客様名') ?></th>
                        <th><?= $this->Paginator->sort('会社名') ?></th>
                        <th><?= $this->Paginator->sort('電話番号') ?></th>
                        <th><?= $this->Paginator->sort('メール') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) : ?>
                        <tr class="table-data-row">
			                <td class="rowlink"><a href="/clients/view/<?= $client->id ?>"></a></td>
                            <td>
                                <div><?= h($client->sei) ?> <?= h($client->mei) ?></div>
                                <div><?= h($client->sei_kana) ?> <?= h($client->mei_kana) ?></div>
                            </td>
                            <td><?= $client->has('corporation') ? $this->Html->link($client->corporation->name, ['controller' => 'Corporations', 'action' => 'view', $client->corporation->id]) : '' ?></td>
                            <td><?= h($client->phone) ?></td>
                            <td><?= h($client->email) ?></td>
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