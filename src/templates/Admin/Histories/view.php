<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit History'), ['action' => 'edit', $history->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete History'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Histories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New History'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="histories view content">
            <h3><?= h($history->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Clients Project') ?></th>
                    <td><?= $history->has('sales') ? $this->Html->link($history->sales->id, ['controller' => 'Sales', 'action' => 'view', $history->sales->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $history->has('user') ? $this->Html->link($history->user->id, ['controller' => 'Users', 'action' => 'view', $history->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Action') ?></th>
                    <td><?= h($history->action) ?></td>
                </tr>
                <tr>
                    <th><?= __('Response') ?></th>
                    <td><?= h($history->response) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($history->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($history->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create') ?></th>
                    <td><?= h($history->create) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($history->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
