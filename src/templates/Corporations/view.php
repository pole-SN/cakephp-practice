<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Corporation $corporation
 */
?>
<div class="column-responsive column-80">
    <div class="corporations view content">
        <h3><?= h($corporation->name) ?></h3>
        <table>
            <tr>
                <th><?= __('企業名') ?></th>
                <td><?= h($corporation->name) ?></td>
            </tr>
            <tr>
                <th><?= __('企業名カナ') ?></th>
                <td><?= h($corporation->name_kana) ?></td>
            </tr>
            <tr>
                <th><?= __('郵便番号') ?></th>
                <td><?= h($corporation->postal_code) ?></td>
            </tr>
            <tr>
                <th><?= __('住所１') ?></th>
                <td><?= h($corporation->address1) ?></td>
            </tr>
            <tr>
                <th><?= __('住所２') ?></th>
                <td><?= h($corporation->address2) ?></td>
            </tr>
            <tr>
                <th><?= __('電話番号') ?></th>
                <td><?= h($corporation->phone) ?></td>
            </tr>
            <tr>
                <th><?= __('FAX') ?></th>
                <td><?= h($corporation->fax) ?></td>
            </tr>
            <tr>
                <th><?= __('メールアドレス１') ?></th>
                <td><?= h($corporation->email1) ?></td>
            </tr>
            <tr>
                <th><?= __('メールアドレス２') ?></th>
                <td><?= h($corporation->email2) ?></td>
            </tr>
            <tr>
                <th><?= __('ホームページ') ?></th>
                <td><?= h($corporation->url) ?></td>
            </tr>
            <tr>
                <th><?= __('登録日') ?></th>
                <td><?= h($corporation->created) ?></td>
            </tr>
            <tr>
                <th><?= __('変更日') ?></th>
                <td><?= h($corporation->modified) ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('所属者') ?></h4>
            <?php if (!empty($corporation->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('名前') ?></th>
                            <th><?= __('電話番号') ?></th>
                            <th><?= __('メールアドレス') ?></th>
                        </tr>
                        <?php foreach ($corporation->clients as $clients) : ?>
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