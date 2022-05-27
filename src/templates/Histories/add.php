<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 * @var \Cake\Collection\CollectionInterface|string[] $sales
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Histories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="histories form content">
            <?= $this->Form->create($history) ?>
            <fieldset>
                <legend><?= __('Add History') ?></legend>
                <?php
                    echo $this->Form->control('sales_id', ['options' => $sales]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('action');
                    echo $this->Form->control('response');
                    echo $this->Form->control('status');
                    echo $this->Form->control('create');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
