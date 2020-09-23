@extends('layouts.layout', ['title' => 'События'])

@section('content')

    <div class="col-12 ">
    <div class="d-flex justify-content-center mt-5"><h2>Список Событий:</h2></div>
      <div class="d-flex justify-content-center mt-5">
        @foreach ($events as $event)                      
            <div class="card m-5 p-3">
            <div>
              <p class="text-center">Название: {{ $event->name_event	}}</p>  
            </div>            
              <div class="card-body d-flex justify-content-center">
                <a href="{{ route('events.show', $event->id) }}" class="btn btn-outline-primary">Узнать больше</a>
              </div>
            </div>                           
        @endforeach  
      </div>
      <div class="d-flex justify-content-center mt-5"><a href="{{ route('events.create') }}" class="btn btn-outline-success">Добавить</a></div>
    </div>       
    
@endsection        
