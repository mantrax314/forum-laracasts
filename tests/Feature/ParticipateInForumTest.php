<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParticipateInForumTest extends TestCase
{
    function an_authenticated_user_may_participate_in_forum_threads()
    {
        // Given we have an authenticated user
        $user = factory('App/User')->create();
        $this->be($user);

        // And an existing Thread
        $thread = factory('App\Thread')->create();

        // When the user adds a reply to the thread
        $reply = factory('App\Reply')->make();
        $this->post('/threads/' . $thread->id . '/repies', $reply->toArray());

        // Then the reply should be visible on the page
        $this->get($thread->path())
            ->assertSee($reply->body);
    }
}
