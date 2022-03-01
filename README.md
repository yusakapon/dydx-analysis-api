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
