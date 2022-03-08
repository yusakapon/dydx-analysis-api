<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class TestApiControllerTest extends TestCase
{
    /**
     * テスト実行のたびにDB状態を初期化するために利用。
     * 
     * FIXME:
     * DatabaseMigrations は低速なので、RefreshDatabaseを使いたい。
     * が、PHP8系以上? ではエラーが出て使えない状態のため、一旦DatabaseMigrationsを使っている。
     * 
     * https://readouble.com/laravel/9.x/ja/database-testing.html
     * https://github.com/laravel/framework/pull/35988
     */
    use DatabaseMigrations;

    /**
     * index test 200
     * @return void
     */
    public function testIndex200(): void
    {
        // Act
        $res = $this->getJson('/api/test');

        // Assert
        $res->assertStatus(200);
        $res->assertJson([
            [
                'key1' => 'hoge',
                'key2' => 'fuga',
            ],
            [
                'key1' => 'foo',
                'key2' => 'bar',
            ]
        ]);
    }
}
