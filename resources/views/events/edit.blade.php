@extends('layouts.layout', ["title" => "Изменить данные о событие"])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('events.update', $event->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <h3 class="text-center mt-2 mb-5">Изменить данные о событие</h3>
                    @include('events.parts.form')
                    <div class="d-flex justify-content-center ml-5">
                        <input type="submit" value="Изменить данные о событие" class="btn btn-outline-success ml-5">
                    </div> 
            </div>        
        </div>            
    </div>            
    </form>
@endsection