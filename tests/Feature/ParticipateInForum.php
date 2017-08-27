<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParticipateInForum extends TestCase
{
    function an_authenticated_user_may_participate_in_forum_threads()
    {
        // Given we have an authenticated user
        // And an existing Thread
        // When the user adds a reply to the thread
        // Then the reply should be visible on the page
    }
}
