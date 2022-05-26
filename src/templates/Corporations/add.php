<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Corporation $corporation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Corporations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="corporations form content">
            <?= $this->Form->create($corporation) ?>
            <fieldset>
                <legend><?= __('Add Corporation') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('name_kana');
                    echo $this->Form->control('postal_code');
                    echo $this->Form->control('address1');
                    echo $this->Form->control('address2');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('fax');
                    echo $this->Form->control('email1');
                    echo $this->Form->control('email2');
                    echo $this->Form->control('url');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
