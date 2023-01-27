
    <x-layouts.app title="Crear nuevo post">

        <h2> Create new event </h2>
    
        {{-- action para que cuando se de click se envian datos a la ruta con el boton de abajo --}}
        <form action='{{ route ('events.store') }}' method="POST">
            {{-- siempre que uses POST, va @csrf LARAVEL nos protege de esos ataques , imprime un token en un campo oculto dentro del formulario
                que sirve para verificar el origen del formulario(automaticamente se hace) ,--}}
            @csrf
            @include('events.form-fields')
            
            <button type="submit" class="btn btn-success">Create</button>
            
        </form>

        <a class="btn btn-light" href="{{ route('events.index') }}">Return</a>
            
        </x-layouts.app>
