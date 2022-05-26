<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Corporation[]|\Cake\Collection\CollectionInterface $corporations
 */
?>
<div class="column-responsive column-80">
    <div class="corporations index content">
        <!-- <?= $this->Html->link(__('New Corporation'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
        <h3><?= __('企業情報') ?></h3>
        <div class="table-responsive">
            <table id="table">
                <thead>
                    <tr>
                        <th></th>
                        <th><?= $this->Paginator->sort('企業名') ?></th>
                        <th><?= $this->Paginator->sort('電話番号') ?></th>
                        <th><?= $this->Paginator->sort('メールアドレス') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($corporations as $corporation) : ?>
                        <tr class="table-data-row">
			                <td class="rowlink"><a href="/corporations/view/<?= $corporation->id ?>"></a></td>
                            <td>
                                <div><?= h($corporation->name) ?></div>
                                <div><?= h($corporation->name_kana) ?></div>
                            </td>
                            <td>
                                <div>代表：<?= h($corporation->phone) ?></div>
                                <div>FAX：<?= h($corporation->fax) ?></div>
                            </td>
                            <td>
                                <div><?= h($corporation->email1) ?></div>
                                <div> <?= h($corporation->email2) ?></div>
                            </td>
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