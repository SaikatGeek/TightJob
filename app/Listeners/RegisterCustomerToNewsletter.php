<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterCustomerToNewsletter
{
    
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        dump('register to newsletter');
    }
}
