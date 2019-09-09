<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminViaSlack
{
    
   
    
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        dump('Slack message here');
    }
}
