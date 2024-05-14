<?php

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TodoTest extends TestCase
{
    public function testGetFirstTodo()
    {
        $this->assertTrue(DB::connection()->getPdo() instanceof \PDO);
    }
}