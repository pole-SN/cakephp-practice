<?php

/**
 * @var \App\View\AppView $this
 */
?>
<div class="column-responsive column-50">
    <div class="users form content">
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('ユーザーログイン') ?></legend>
            <?= $this->Form->control('email', ['required' => true]) ?>
            <?= $this->Form->control('password', ['required' => true]) ?>
        </fieldset>
        <?= $this->Form->button(__('ログイン')); ?>
        <?= $this->Form->end() ?>
    </div>
</div>