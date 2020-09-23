@extends('layouts.layout', ["title" => "Добавить компанию"])

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mt-5">
        <div class="card">
            <div class="card-body">    
                <form action="{{ route('firms.store') }}" method="POST"">
                    @csrf
                    <h3 class="text-center mt-3 mb-5">Добавить компанию</h3>
                    @include('firms.parts.form')
                    <h4 class="text-center mt-3 mb-3">Выбрать сотрудника</h4>
                    <select name='employees[]' class="custom-select" multiple>
                        <option class="text-center" value="">без сотрудника</option>    
                        @foreach ($employees as $employee)                    
                        <option  class="text-center" value={{ $employee->id_employee }}>
                                {{ $employee->name_employee }}</option>                     
                        @endforeach
                    </select>
                    <div class="d-flex justify-content-center">
                        <input  type="submit" value="Добавить компанию" class="btn btn-outline-success">    
                    </div>                    
                </form>
            </div>
        </div>        
    </div>            
@endsection