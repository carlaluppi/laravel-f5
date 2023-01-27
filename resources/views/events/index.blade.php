<x-layouts.app 

   title="Events">

      <a href="{{ route('events.create') }}">Create new event</a>
      @foreach($event as $event)
          <div style='display:flex; align-items:baseline'>
            <h2> 
              <div class="card" style="width: 18rem;">
                <h3 
                </h3>

                <img src="https://lh3.googleusercontent.com/p/AF1QipOlio7EzORM54mAMXOpfeGe33uSv2guys-lzO0z=s1360-w1360-h1020" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title" href="{{ route('events.show', $event->id) }}">
                    {{ $event->title }} </h4>
                  <p class="card-text">Example text  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                
            </h2>  &nbsp;

            <a class="btn btn-primary" href="{{ route('events.edit', $event->id)}}">Edit</a>

            <form action="{{ route('events.destroy', $event)}}" method="POST"> 
            @csrf 
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            
          </div>
      @endforeach

 

</x-layouts.app>
