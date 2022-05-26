<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="column-responsive column-80">
    <div class="projects index content">
        <!-- <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
        <h3><?= __('プロジェクト') ?></h3>
        <div class="table-responsive">
            <table id="table">
                <thead>
                    <tr>
                        <th></th>
                        <th><?= $this->Paginator->sort('登録日') ?></th>
                        <th><?= $this->Paginator->sort('プロジェクト名') ?></th>
                        <th><?= $this->Paginator->sort('コンセプト') ?></th>
                        <th><?= $this->Paginator->sort('計画') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $project) : ?>
                        <tr class="table-data-row">
			                <td class="rowlink"><a href="/projects/view/<?= $project->id ?>"></a></td>
                            <td><?= h($project->created->i18nFormat("yyyy/MM/dd HH:mm")) ?></td>
                            <td><?= h($project->project_name) ?></td>
                            <td><?= h($project->concept) ?></td>
                            <td><?= h($project->plan) ?></td>
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