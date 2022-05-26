<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientsproject $clientsproject
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientsproject->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientsproject->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clientsprojects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientsprojects form content">
            <?= $this->Form->create($clientsproject) ?>
            <fieldset>
                <legend><?= __('Edit Clientsproject') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('project_id', ['options' => $projects]);
                    echo $this->Form->control('create');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
