<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History[]|\Cake\Collection\CollectionInterface $histories
 */
?>
<div class="column-responsive column-80">
    <div class="histories index content">
        <!-- <?= $this->Html->link(__('New History'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
        <h3><?= __('行動履歴') ?></h3>
        <div class="table-responsive">
            <table id="table">
                <thead>
                    <tr>
                        <th></th>
                        <th><?= $this->Paginator->sort('担当者') ?></th>
                        <th><?= $this->Paginator->sort('クライアント') ?></th>
                        <th><?= $this->Paginator->sort('プロジェクト') ?></th>
                        <th><?= $this->Paginator->sort('状態') ?></th>
                        <th><?= $this->Paginator->sort('アクション') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($histories as $history) : ?>
                        <tr class="table-data-row">
                            <td class="rowlink"><a href="/histories/view/<?= $history->id ?>"></a></td>
                            <td><?= $history->has('user') ? $this->Html->link($history->user->username, ['controller' => 'Users', 'action' => 'view', $history->user->id]) : '' ?></td>
                            <td><?= $this->Html->link($history->sale->client->sei . " " . $history->sale->client->mei . " 様", ['controller' => 'Clients', 'action' => 'view', $history->sale->client->id]) ?></td>
                            <td><?= $this->Html->link($history->sale->project->project_name, ['controller' => 'Projects', 'action' => 'view', $history->sale->project->id]) ?></td>
                            <td><?= $this->Html->link($history->sales_status->state_str, ['controller' => 'Projects', 'action' => 'view', $history->status_id]) ?></td>
                            <td><?= h($history->action) ?></td>
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