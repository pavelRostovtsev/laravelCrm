@extends('layouts.layout', ["title" => "Изменить данные о сотруднике"])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('employees.update', $employees->id_employee) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <h3 class="text-center mt-2 mb-5">Изменить данные о сотруднике</h3>
                    @include('employees.parts.form')
                    <div class="d-flex justify-content-center ml-5">
                        <input type="submit" value="Изменить данные о сотруднике" class="btn btn-outline-success ml-5">
                    </div> 
            </div>        
        </div>            
    </div>            
    </form>
@endsection