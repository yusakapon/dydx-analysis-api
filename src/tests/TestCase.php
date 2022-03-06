<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected static $databaseSetup = false;

    /**
     * base setup
     */
    protected function setUp(): void
    {
        parent::setUp();
        if (!static::$databaseSetup) {
            $this->setUpDatabase();
        }
        static::$databaseSetup = true;
    }

    /**
     * setup database
     * @return void
     */
    protected function setUpDatabase(): void
    {
        Artisan::call('migrate:refresh', ['--force' => true]);
    }
}
