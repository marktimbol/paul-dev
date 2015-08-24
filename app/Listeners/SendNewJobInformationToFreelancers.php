<?php

namespace App\Listeners;

use App\Events\UserHasPostedANewJob;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewJobInformationToFreelancers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHasPostedANewJob  $event
     * @return void
     */
    public function handle(UserHasPostedANewJob $event)
    {
        //
    }
}
