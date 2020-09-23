@extends('layouts.layout', ["title" => "Добавить сотрудника"])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-body">    
                <form action="{{ route('employees.store') }}" method="POST"">
                    @csrf
                    <h3 class="text-center">Добавить сотрудника</h3>
                    @include('employees.parts.form')
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Добавить сотрудника" class="btn btn-outline-success">    
                    </div>                    
                </form>
            </div>
        </div>        
    </div>            
@endsection