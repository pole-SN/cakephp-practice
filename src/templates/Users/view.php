<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="column-responsive column-80">
    <div class="users view content">
        <h3><?= h($user->username) ?></h3>
        <table>
            <tr>
                <th><?= __('ユーザーID') ?></th>
                <td><?= h($user->id) ?></td>
            </tr>
            <tr>
                <th><?= __('メールアドレス') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th><?= __('所属部署') ?></th>
                <td><?= h($user->department) ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('営業履歴') ?></h4>
            <?php if (!empty($user->histories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('状態') ?></th>
                            <th><?= __('クライアント名') ?></th>
                            <th><?= __('プロジェクト名') ?></th>
                            <th><?= __('アクション') ?></th>
                        </tr>
                        <?php foreach ($user->histories as $histories) : ?>
                            <tr>
                                <td><?= h($histories->status) ?></td>
                                <td>
                                    <div>
                                        <?= h($histories->sales->client->corporation->name) ?>
                                    </div>
                                    <div>
                                        <?= h($histories->sales->client->sei) ?> <?= h($histories->sales->client->mei) ?> 様
                                    </div>
                                </td>
                                <td><?= h($histories->sales->project->project_name) ?></td>
                                <td><?= h($histories->action) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>