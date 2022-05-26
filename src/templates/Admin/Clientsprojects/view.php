<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientsproject $clientsproject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Clientsproject'), ['action' => 'edit', $clientsproject->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clientsproject'), ['action' => 'delete', $clientsproject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientsproject->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientsprojects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clientsproject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientsprojects view content">
            <h3><?= h($clientsproject->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $clientsproject->has('client') ? $this->Html->link($clientsproject->client->id, ['controller' => 'Clients', 'action' => 'view', $clientsproject->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $clientsproject->has('project') ? $this->Html->link($clientsproject->project->id, ['controller' => 'Projects', 'action' => 'view', $clientsproject->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($clientsproject->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create') ?></th>
                    <td><?= h($clientsproject->create) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($clientsproject->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
