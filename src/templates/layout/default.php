<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'original']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>営業</span>管理</a>
        </div>
        <div class="top-nav-links">
            <a href="/users/logout">ログアウト</a>
        </div>
    </nav>
    <main class="main">
        <div class="row">
            <aside class="column">
                <div class="side-nav">
                    <h4 class="heading"><?= __('Menu') ?></h4>
                    <a class="side-nav-item" href="<?= $this->Url->build('/sales') ?>">売上管理</a>
                    <a class="side-nav-item" href="<?= $this->Url->build('/histories') ?>">行動履歴</a>
                    <a class="side-nav-item" href="<?= $this->Url->build('/projects') ?>">プロジェクト</a>
                    <a class="side-nav-item" href="<?= $this->Url->build('/clients') ?>">クライアント</a>
                    <a class="side-nav-item" href="<?= $this->Url->build('/corporations') ?>">取引先企業</a>
                    <a class="side-nav-item" href="<?= $this->Url->build('/users') ?>">ユーザー</a>
                </div>
            </aside>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>