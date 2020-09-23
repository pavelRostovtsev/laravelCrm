@extends('layouts.layout', ["title" => "Добавить событие"])

@section('content')
<div class="row justify-content-center mb-5">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-body">    
                <form action="{{ route('events.store') }}" method="POST"">
                    @csrf
                    <h3 class="text-center">Добавить событие</h3>
                    @include('events.parts.form')
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Добавить событие" class="btn btn-outline-success">    
                    </div>                    
                </form>
            </div>
        </div>        
    </div>            
@endsection