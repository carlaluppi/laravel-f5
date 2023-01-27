    <div class="d-justify-content-center mb-6">
        
    <label >{{-- el label para mejorar la accesibilidad --}}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Title </span>
            <input name='title' type="text"class="form-control" aria-describedby="basic-addon1" value={{old('title', $event->title)}}>
                @error('title')
                        <br>
                        <small style='color:red'> {{ $message }}</small>
                @enderror
        </div>

    {{-- </label><br>
    <label >
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Date </span>
            <input name='date' type="date"class="form-control" aria-describedby="basic-addon1" value={{old('date', $event->date)}}>

                @error('date')
                        <br>
                        <small style='color:red'> {{ $message }}</small>
                @enderror
        </div>
    </label><br> 
    <label >
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Participants </span>
            <input name='maxUser' type="text"class="form-control" aria-describedby="basic-addon1" value={{old('maxUser', $event->maxUser)}}>

                @error('maxUser')
                        <br>
                        <small style='color:red'> {{ $message }}</small>
                @enderror
        </div>
    </label><br>
    <label >
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Description </span>
            
            <textarea name='description' type="text"class="form-control" aria-describedby="basic-addon1" value={{old('description', $event->description)}}></textarea>

                @error('description')
                        <br>
                        <small style='color:red'> {{ $message }}</small>
                @enderror
        </div>
    </label><br>   
    <label >
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Image </span>
            
            <input name='image' type="image"class="form-control" aria-describedby="basic-addon1" value={{old('image', $event->image)}}>
                @error('description')
                        <br>
                        <small style='color:red'> {{ $message }}</small>
                @enderror
        </div>
    </label><br>   --}}
      
    </div>


