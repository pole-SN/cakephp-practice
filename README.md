# CakePHP学習用Dockerパッケージ  

## 主な参考  
https://peblo.gs/cakephp-env-with-docker/  
https://mag.nioufuku.net/2020/06/06/programming/00056-cakephp-docker-env/  
https://www.kamome-susume.com/docker-cakephp4/  
https://dev-dub.hatenablog.com/entry/2021/08/31/203058  

## 初期設定
### 環境のビルド  
```
docker-compose build
または
docker-compose build --no-cache
```

### コンテナ起動  
```
docker-compose up -d
```

### データ初期設定
```
DBコンテナのシェルに入る
docker-compose exec cake sh

composerをインストール ※初回のみ
composer install

DB構築
bin/cake migrations migrate

初期（サンプル）データ投入
bin/cake migrations seed
```

### ログイン
```
http://localhost:8030
上記にログインするとログイン画面へリダイレクトされます。

ログインユーザーについてはseedで以下を登録済み。
email:
root@root.com

password:
admin
```

### パス、ポートなど
```
localhost:8030
nginx(port:8030)経由でcakePHP(port:9000)にアクセス
Webアプリが表示されます。

localhost:8031
mysqlのコンテナ
外向きに8031番ポートは空いてないので、ブラウザで入力しても何も表示されません。

localhost:8032
phpmyadminのコンテナ。
myadmin用の初期ID、パスワードが設定されているため、
アクセスするだけでphpmyadminが表示されます。(.envファイル必須)

localhost:9000
cakePHPのコンテナ。
外向きに9000番ポートは空いてないので、ブラウザで入力しても何も表示されません。
```

## メモ
## bakeなど
```
マイグレーションファイルの作成（Xxxxsは任意の内容に書き換える）
bin/cake bake migration CreateXxxxs

シードファイルの作成（Xxxxsは任意の内容に書き換える）
bin/cake bake seed Xxxxs

モデルの生成
bin/cake bake model Xxxxs

コントローラーの生成
bin/cake bake controller Xxxxs

Viewテンプレートの生成
bin/cake bake template Xxxxs
```

### コンテナ停止  
```
docker-compose down
```

### その他
```
# シェル
docker-sompose exec {コンテナ名} sh
# MySQL接続確認
docker-compose exec mysql bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
```
envファイルなどは本来Gitに配置するべきではありませんが、  
便宜上今回のプロジェクトでは他ファイルと同様にアップロード済みとなります。