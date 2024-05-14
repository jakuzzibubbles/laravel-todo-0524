<?php

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DbTest extends TestCase
{
    public function testDatabaseConnection()
    {
        $this->assertTrue(DB::connection()->getPdo() instanceof \PDO);
    }
}