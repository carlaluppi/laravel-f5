<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Event;

class ControllerEvent extends BaseController
{
    
    public function index(){

        $events = Event::get();
        return view(['events.index', 'events'=> $events]);

    }
}
