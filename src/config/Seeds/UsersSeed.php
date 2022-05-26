<?php

declare(strict_types=1);

use Migrations\AbstractSeed;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'root@root.com',
                'password' => $this->_setPassword('admin'),
                'username' => '管理者',
                'department' => 'システム管理部',
            ], [
                'email' => 'nara@test.com',
                'password' => $this->_setPassword('test1234'),
                'username' => '奈良 俊輔',
                'department' => 'システム開発部',
            ], [
                'email' => 'test1@test.com',
                'password' => $this->_setPassword('test1234'),
                'username' => 'テスト1',
                'department' => 'テスト開発部',
            ], [
                'email' => 'test2@test.com',
                'password' => $this->_setPassword('test1234'),
                'username' => 'テスト2',
                'department' => 'テスト開発部',
            ], [
                'email' => 'test3@test.com',
                'password' => $this->_setPassword('test1234'),
                'username' => 'テスト3',
                'department' => 'テスト開発部',
            ]
        ];

        $table = $this->table('users');
        $this->execute('SET FOREIGN_KEY_CHECKS = 0');
        $table->truncate();
        $table->insert($data)->save();
        $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
