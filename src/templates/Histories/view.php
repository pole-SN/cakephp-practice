<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<div class="column-responsive column-80">
    <div class="histories view content">
        <h3>取引No: <?= h($history->id) ?></h3>
        <table>
            <tr>
                <th><?= __('担当者') ?></th>
                <td><?= $history->has('user') ? $this->Html->link($history->user->name, ['controller' => 'Users', 'action' => 'view', $history->user->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('クライアント') ?></th>
                <td><?= $history->has('clients_project') ? $this->Html->link($history->clients_project->client->sei . " " . $history->clients_project->client->mei . " 様",  ['controller' => 'Clients', 'action' => 'view', $history->clients_project->client->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('プロジェクト') ?></th>
                <td><?= $history->has('clients_project') ? $this->Html->link($history->clients_project->project->project_name, ['controller' => 'Projects', 'action' => 'view', $history->clients_project->project->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('状態') ?></th>
                <td><?= $history->has('clients_project') ? $this->Html->link($history->sales_status->state_str, ['controller' => 'SalesStatus', 'action' => 'view', $history->status_id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('アクション') ?></th>
                <td><?= h($history->action) ?></td>
            </tr>
            <tr>
                <th><?= __('回答') ?></th>
                <td><?= h($history->response) ?></td>
            </tr>
            <tr>
                <th><?= __('登録日') ?></th>
                <td><?= h($history->created->i18nFormat("yyyy/MM/dd HH:mm")) ?></td>
            </tr>
            <tr>
                <th><?= __('更新日') ?></th>
                <td><?= h($history->modified->i18nFormat("yyyy/MM/dd HH:mm")) ?></td>
            </tr>
        </table>
    </div>
</div>