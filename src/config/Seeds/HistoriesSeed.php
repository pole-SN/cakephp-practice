<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Histories seed.
 */
class HistoriesSeed extends AbstractSeed
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
                'cp_id' => 1,
                'user_id' => 1,
                'action' => '営業初回。商品説明およびシステムのトライアルを実施。',
                'response' => '提案したシステムに関し、上々の反応を頂けた。次回お見積もり提出予定。',
                'status_id' => 1
            ],
            [
                'cp_id' => 1,
                'user_id' => 1,
                'action' => 'お見積もりの提供およびシステムQAの対応を行なった。',
                'response' => 'お客様の不明点は一通り解消することができた。社内稟議の上、正式な回答をいただける見込み。',
                'status_id' => 1
            ],
            [
                'cp_id' => 1,
                'user_id' => 1,
                'action' => 'お客様より発注あり。請求書の作成および導入準備。',
                'response' => 'お客様より正式に発注いただいた。xx/xxまでに各書類提出予定。',
                'status_id' => 2
            ],
            [
                'cp_id' => 2,
                'user_id' => 1,
                'action' => '営業初回。商品説明およびシステムのトライアルを実施。',
                'response' => '提案したシステムに関し、上々の反応を頂けた。次回お見積もり提出予定。',
                'status_id' => 1
            ],
            [
                'cp_id' => 1,
                'user_id' => 2,
                'action' => '発注作業完了のため引き継ぎ。開発開始',
                'response' => '',
                'status_id' => 3
            ],
            [
                'cp_id' => 2,
                'user_id' => 2,
                'action' => 'お見積もりの提供およびシステムQAの対応を行なった。',
                'response' => 'しばし検討中。XX日頃に回答をいただける見込み。',
                'status_id' => 1
            ],
            [
                'cp_id' => 2,
                'user_id' => 1,
                'action' => 'システムQAに関し詳細な説明を実施。',
                'response' => 'しばし検討中。改めてXX日頃に回答をいただける見込み。',
                'status_id' => 1
            ],
            [
                'cp_id' => 1,
                'user_id' => 1,
                'action' => '開発完了。受け入れテスト実施。',
                'response' => 'XX日に受け入れテスト完了見込み',
                'status_id' => 4
            ],
            [
                'cp_id' => 2,
                'user_id' => 1,
                'action' => 'お客様要件につき失注。',
                'response' => 'XXXに関する機能が不足しており、導入は見送りとなりました。',
                'status_id' => 6
            ],
            [
                'cp_id' => 1,
                'user_id' => 1,
                'action' => '受け入れテスト完了。請求書および納品書の送付。',
                'response' => 'クライアント様より：受け入れテストおよび部分的な修正などにも真摯に対応いただけ、満足しております。',
                'status_id' => 5
            ],
            [
                'cp_id' => 3,
                'user_id' => 2,
                'action' => '営業初回。商品説明およびシステムのトライアルを実施。',
                'response' => '提案したシステムに関し、上々の反応を頂けた。次回お見積もり提出予定。',
                'status_id' => 1
            ],
            [
                'cp_id' => 3,
                'user_id' => 2,
                'action' => 'お見積もりの提供およびシステムQAの対応を行なった。',
                'response' => 'お客様の不明点は一通り解消することができた。社内稟議の上、正式な回答をいただける見込み。',
                'status_id' => 1
            ],
            [
                'cp_id' => 4,
                'user_id' => 1,
                'action' => '営業初回。商品説明およびシステムのトライアルを実施。',
                'response' => '提案したシステムに関し、上々の反応を頂けた。次回お見積もり提出予定。',
                'status_id' => 1
            ],
        ];

        $table = $this->table('histories');
        $this->execute('SET FOREIGN_KEY_CHECKS = 0');
        $table->truncate();
        $table->insert($data)->save();
        $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }
}
