# dydx-analysis-api

# set up(初回)
```
docker-compose build
docker-compose up -d
docker exec -it app sh
sh bin/setup.sh

DB関連の環境変数を↓のように書き換えた後、以下を実行。
php artisan migrate
```

# .env設定値(ローカル環境)
```
# DB関連環境変数設定値
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=db_local
DB_USERNAME=db_local
DB_PASSWORD=db_local
```

# ブラウザからのアクセス方法
`0.0.0.0:80` をブラウザから叩くと、画面表示されます。
apiアクセスの場合は`0.0.0.0:80/api/---`みたいな感じでアクセス可能。

# DB操作方法
コンテナが立ち上がっている状態で、以下を実行。
```
docker exec -it db sh
mysql -h 127.0.0.1 -u db_local -p'db_local' db_local
```
※ DBに対し破壊的変更を加えたい場合は、rootユーザでアクセスしてください。(ユーザ名・パスワード共に`root`)
