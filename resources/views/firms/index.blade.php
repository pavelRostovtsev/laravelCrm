@extends('layouts.layout', ['title' => 'Компании'])

@section('content')

    <div class="col-12 ">
    <div class="d-flex justify-content-center mt-5"><h2>Список компаний:</h2></div>
      <div class="d-flex justify-content-center mt-5">
        @foreach ($firms as $firm)                      
            <div class="card m-5">
            <div class="card-header"><p class="text-center">{{ $firm->name }}</p></div>            
              <div class="card-body">
                <a href="{{ route('firms.show', $firm->id) }}" class="btn btn-outline-primary">Узнать больше</a>
              </div>
            </div>                           
        @endforeach  
      </div>
      <div class="d-flex justify-content-center mt-5"><a href="{{ route('firms.create') }}" class="btn btn-outline-success">Добавить</a></div>
    </div>       
    
@endsection        
