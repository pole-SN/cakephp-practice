# CakePHP学習用Dockerパッケージ  

## 注意
.envファイルはアップロードしていません。  

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

### 起動  
```
docker-compose up -d
```

### 停止  
```
docker-compose down
```

### DB初期設定
```
DBコンテナのシェルに入る
docker-compose exec cake sh

DB構築
bin/cake migrations migrate

初期（サンプル）データ投入
bin/cake migrations seed
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

### その他
```
# シェル
docker-sompose exec {コンテナ名} sh
# MySQL接続確認
docker-compose exec mysql bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
```
