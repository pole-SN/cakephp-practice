<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="column-responsive column-80">
    <div class="clients view content">
        <h3><?= h($client->sei) ?> <?= h($client->mei) ?> 様</h3>
        <table>
            <tr>
                <th><?= __('名前') ?></th>
                <td><?= h($client->sei) ?> <?= h($client->mei) ?></td>
            </tr>
            <tr>
                <th><?= __('かな') ?></th>
                <td><?= h($client->sei_kana) ?> <?= h($client->mei_kana) ?></td>
            <tr>
            <tr>
                <th><?= __('電話番号') ?></th>
                <td><?= h($client->phone) ?></td>
            </tr>
            <tr>
                <th><?= __('メールアドレス') ?></th>
                <td><?= h($client->email) ?></td>
            </tr>
            <tr>
                <th><?= __('所属企業') ?></th>
                <td><?= $client->has('corporation') ? $this->Html->link($client->corporation->name, ['controller' => 'Corporations', 'action' => 'view', $client->corporation->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('登録日') ?></th>
                <td><?= h($client->created) ?></td>
            </tr>
            <tr>
                <th><?= __('変更日') ?></th>
                <td><?= h($client->modified) ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('取引履歴') ?></h4>
            <?php if (!empty($client->projects)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('プロジェクト名') ?></th>
                            <th><?= __('登録日') ?></th>
                            <th><?= __('変更日') ?></th>
                        </tr>
                        <?php foreach ($client->projects as $projects) : ?>
                            <tr>
                                <td><?= h($projects->project_name) ?></td>
                                <td><?= h($projects->created->i18nFormat("yyyy/MM/dd HH:mm")) ?></td>
                                <td><?= h($projects->modified->i18nFormat("yyyy/MM/dd HH:mm")) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>