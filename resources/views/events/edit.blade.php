<x-layouts.app title="Edit">

    <h1> Edit form</h1>
    <form action='{{ route ('events.update', $event) }}' method="POST">
            
        @csrf  @method('PATCH')
        @include('events.form-fields')
        <button type="submit">Submit</button>
        <br>
    </form>
    <a href="{{ route('events.index') }}">Return</a>
    
    </x-layouts.app>