<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sale'), ['action' => 'edit', $sale->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sale'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sale'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sales view content">
            <h3><?= h($sale->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $sale->has('client') ? $this->Html->link($sale->client->id, ['controller' => 'Clients', 'action' => 'view', $sale->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $sale->has('project') ? $this->Html->link($sale->project->id, ['controller' => 'Projects', 'action' => 'view', $sale->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sale->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quote') ?></th>
                    <td><?= $this->Number->format($sale->quote) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profit') ?></th>
                    <td><?= $this->Number->format($sale->profit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sale->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sale->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
