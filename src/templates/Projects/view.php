<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="column-responsive column-80">
    <div class="projects view content">
        <h3><?= h($project->id) ?></h3>
        <table>
            <tr>
                <th><?= __('プロジェクト名') ?></th>
                <td><?= h($project->project_name) ?></td>
            </tr>
            <tr>
                <th><?= __('コンセプト') ?></th>
                <td><?= h($project->concept) ?></td>
            </tr>
            <tr>
                <th><?= __('計画') ?></th>
                <td><?= h($project->plan) ?></td>
            </tr>
            <tr>
                <th><?= __('登録日') ?></th>
                <td><?= h($project->created) ?></td>
            </tr>
            <tr>
                <th><?= __('変更日') ?></th>
                <td><?= h($project->modified) ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('取引中のクライアント') ?></h4>
            <?php if (!empty($project->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('名前') ?></th>
                            <th><?= __('電話番号') ?></th>
                            <th><?= __('メールアドレス') ?></th>
                        </tr>
                        <?php foreach ($project->clients as $clients) : ?>
                            <tr>
                                <td>
                                    <div><?= h($clients->sei) ?> <?= h($clients->mei) ?></div>
                                    <div><?= h($clients->sei_kana) ?> <?= h($clients->mei_kana) ?></div>
                                </td>
                                <td><?= h($clients->phone) ?></td>
                                <td><?= h($clients->email) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>