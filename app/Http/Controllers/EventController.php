<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\SaveEventsRequest;

class EventController extends Controller
{
    
    public function index()
    {
        $events = Event::get();

        return view('events.index', ['event' => $events]); 
    }

    public function show(Event $events)
    {
         // events seria el id 
        return view('events.show', ['event'=> $events]);
    }
    
    public function create()
    {
        return view('events.create',['event'=> new Event]);
    }
    

    public function store(SaveEventsRequest $request){
        // (inyectamos la clase SaveReques como parametro,importado arriba cuando creamos con las validaciones )

        Event::create($request->validated());
        
        session()->flash('status', 'Event created!');
        return redirect()->route('events.index');  
        
    }


    public function edit(Event $events)
    {
        return view('events.edit',['event'=>$events]);
    }


    public function update(SaveEventsRequest $request, Event $events)
    {
        $events->update($request->validated());        
        session()->flash('status', 'Event update!');
        return redirect()->route('events.show', $events);  
        
    }

    public function destroy(Event $events)
    {
       
        $events->delete();
       
        return to_route('events.index')->with('status','Event deleted');

    }
}
