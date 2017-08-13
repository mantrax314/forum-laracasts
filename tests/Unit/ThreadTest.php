<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    //Sample to run whole test file    phpunit tests/Unit/ThreadTest.php

    /** @test */
    public function a_thread_has_replies()
    {
        $thread = factory('App\Thread')->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }

    //Sample to run whole this test only phpunit --filter a_thread_has_a_creator

    /** @test */
    public function a_thread_has_a_creator()
    {
        $thread = factory('App\Thread')->create();

        $this->assertInstanceOf('App\User', $thread->creator);
    }
}
