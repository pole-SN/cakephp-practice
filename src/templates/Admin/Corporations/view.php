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
            <?= $this->Html->link(__('Edit Corporation'), ['action' => 'edit', $corporation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Corporation'), ['action' => 'delete', $corporation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $corporation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Corporations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Corporation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="corporations view content">
            <h3><?= h($corporation->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($corporation->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Kana') ?></th>
                    <td><?= h($corporation->name_kana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= h($corporation->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address1') ?></th>
                    <td><?= h($corporation->address1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address2') ?></th>
                    <td><?= h($corporation->address2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($corporation->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fax') ?></th>
                    <td><?= h($corporation->fax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email1') ?></th>
                    <td><?= h($corporation->email1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email2') ?></th>
                    <td><?= h($corporation->email2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($corporation->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($corporation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($corporation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($corporation->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($corporation->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sei') ?></th>
                            <th><?= __('Mei') ?></th>
                            <th><?= __('Sei Kana') ?></th>
                            <th><?= __('Mei Kana') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Corporation Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($corporation->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->id) ?></td>
                            <td><?= h($clients->sei) ?></td>
                            <td><?= h($clients->mei) ?></td>
                            <td><?= h($clients->sei_kana) ?></td>
                            <td><?= h($clients->mei_kana) ?></td>
                            <td><?= h($clients->phone) ?></td>
                            <td><?= h($clients->email) ?></td>
                            <td><?= h($clients->corporation_id) ?></td>
                            <td><?= h($clients->created) ?></td>
                            <td><?= h($clients->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
