@extends('layouts.layout', ['title' => 'Главная страница'])

@section('content')

    
    <div class="col-12 ">
     
      <div class="d-flex justify-content-center mt-5">
        @foreach ($сhanges as $сhange)                      
            <div class="card m-5">
            <div class="card-header"><h2>{{ $сhange->name_change }}</h2></div>
              <div class="card-body">
                <a href="{{ route('changes.show', $сhange->id) }}" class="btn btn-outline-primary">Посмотреть смену</a>
              </div>
            </div>                           
        @endforeach  
      </div>
      <div class="d-flex justify-content-center mt-5"><a href="{{ route('changes.create') }}" class="btn btn-outline-success">Добавить смену</a></div>
    </div>       
@endsection        
