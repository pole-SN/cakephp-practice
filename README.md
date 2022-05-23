CakePHP学習用Dockerパッケージ  

参考：  
https://peblo.gs/cakephp-env-with-docker/  

環境のビルド  
```
docker-compose build
または
docker-compose build --no-cache
```

起動  
```
docker-compose up -d
```

停止  
```
docker-compose down
```

sh  
```
docker-sompose exec cake sh
docker-sompose exec nginx sh
docker-sompose exec mysql sh
```