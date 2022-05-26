<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Clients seed.
 */
class ClientsSeed extends AbstractSeed
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
                'sei' => '田中',
                'mei' => '太郎',
                'sei_kana' => 'たなか',
                'mei_kana' => 'たろう',
                'phone' => '000-0000-0000',
                'email' => 'tanaka@mail.com',
                'corporation_id' => 1,
            ], [
                'sei' => '鈴木',
                'mei' => '一郎',
                'sei_kana' => 'すずき',
                'mei_kana' => 'いちろう',
                'phone' => '111-1111-1111',
                'email' => 'suzuki@mail.com',
                'corporation_id' => 1,
            ], [
                'sei' => '山田',
                'mei' => '次郎',
                'sei_kana' => 'やまだ',
                'mei_kana' => 'じろう',
                'phone' => '222-2222-2222',
                'email' => 'yamada@mail.com',
                'corporation_id' => 2,
            ], [
                'sei' => '山本',
                'mei' => '三郎',
                'sei_kana' => 'やまもと',
                'mei_kana' => 'さぶろう',
                'phone' => '333-3333-3333',
                'email' => 'yamamoto@mail.com',
                'corporation_id' => 2,
            ], [
                'sei' => '高橋',
                'mei' => '四郎',
                'sei_kana' => 'たかはし',
                'mei_kana' => 'しろう',
                'phone' => '444-4444-4444',
                'email' => 'takahashi@mail.com',
                'corporation_id' => 2,
            ], [
                'sei' => '松本',
                'mei' => '五郎',
                'sei_kana' => 'まつもと',
                'mei_kana' => 'ごろう',
                'phone' => '555-5555-5555',
                'email' => 'matsumoto@mail.com',
                'corporation_id' => 3,
            ], [
                'sei' => '伊藤',
                'mei' => '六郎',
                'sei_kana' => 'いとう',
                'mei_kana' => 'ろくろう',
                'phone' => '666-6666-6666',
                'email' => 'ito@mail.com',
                'corporation_id' => 4,
            ], [
                'sei' => '中村',
                'mei' => '七郎',
                'sei_kana' => 'なかむら',
                'mei_kana' => 'しちろう',
                'phone' => '777-7777-7777',
                'email' => 'nakamura@mail.com',
                'corporation_id' => 5,
            ], [
                'sei' => '小林',
                'mei' => '八郎',
                'sei_kana' => 'こばやし',
                'mei_kana' => 'はちろう',
                'phone' => '888-8888-8888',
                'email' => 'kobayashi@mail.com',
                'corporation_id' => 5,
            ], [
                'sei' => '吉田',
                'mei' => '九郎',
                'sei_kana' => '吉田',
                'mei_kana' => '九郎',
                'phone' => '999-9999-9999',
                'email' => 'yoshida@mail.com',
                'corporation_id' => 5,
            ]
        ];

        $table = $this->table('clients');
        $this->execute('SET FOREIGN_KEY_CHECKS = 0');
        $table->truncate();
        $table->insert($data)->save();
        $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }
}
