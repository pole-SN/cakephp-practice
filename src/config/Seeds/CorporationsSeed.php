<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Corporations seed.
 */
class CorporationsSeed extends AbstractSeed
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
                'name' => '株式会社AAA',
                'name_kana' => 'カブシキガイシャエーエーエー',
                'postal_code' => '000-1111',
                'address1' => 'aaaaaaa',
                'address2' => 'aaaaaaaaaaaaaaaaaaaaaaaaaa',
                'phone' => '000-1111-2222',
                'fax' => '111-2222-3333',
                'email1' => 'aaa1@corp.com',
                'email2' => 'aaa2@corp.com',
                'url' => 'https://aaa.com',
            ], [
                'name' => '株式会社BBBB',
                'name_kana' => 'カブシキガイシャビービービービー',
                'postal_code' => '000-1111',
                'address1' => 'bbbbbbbbbbbbbbbbbbbbbb',
                'address2' => 'bbbbbbbBBBBBBBBBBBBBBB',
                'phone' => '000-1111-2222',
                'fax' => '111-2222-3333',
                'email1' => 'bbbb1@corp.com',
                'email2' => 'bbbb2@corp.com',
                'url' => 'https://bbbb.com',
            ], [
                'name' => '株式会社CCCCC',
                'name_kana' => 'カブシキガイシャシーシーシーシーシー',
                'postal_code' => '000-1111',
                'address1' => 'ccccccccccccccccccccccccccccccccc',
                'address2' => 'ccc',
                'phone' => '000-1111-2222',
                'fax' => '111-2222-3333',
                'email1' => 'ccccc1@corp.com',
                'email2' => 'ccccc2@corp.com',
                'url' => 'https://ccccc.com',
            ], [
                'name' => '株式会社DDD',
                'name_kana' => 'カブシキガイシャディーディーディー',
                'postal_code' => '000-1111',
                'address1' => 'ddd',
                'address2' => 'dd',
                'phone' => '000-1111-2222',
                'fax' => '111-2222-3333',
                'email1' => 'ddd1@corp.com',
                'email2' => 'ddd2@corp.com',
                'url' => 'https://ddd.com',
            ], [
                'name' => '株式会社EEEE',
                'name_kana' => 'カブシキガイシャイーイーイーイー',
                'postal_code' => '000-1111',
                'address1' => 'いいいいいいいいいいいいいいいいいい',
                'address2' => 'いいいいいいいいいいいいいいいいいいい',
                'phone' => '000-1111-2222',
                'fax' => '111-2222-3333',
                'email1' => 'eeee1@corp.com',
                'email2' => 'eeee2@corp.com',
                'url' => 'https://eeee.com',
            ]
        ];

        $table = $this->table('corporations');
        $this->execute('SET FOREIGN_KEY_CHECKS = 0');
        $table->truncate();
        $table->insert($data)->save();
        $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }
}
