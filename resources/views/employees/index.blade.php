@extends('layouts.layout', ['title' => 'Сотрудники'])

@section('content')

    <div class="col-12 ">
    <div class="d-flex justify-content-center mt-5"><h2>Список сотрудников:</h2></div>
      <div class="d-flex justify-content-center mt-5">
        @foreach ($employees as $employee)                      
            <div class="card m-5">
            <div class="card-header"><p class="text-center">{{ $employee->name_employee }}</p></div>            
              <div class="card-body">
                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-outline-primary">Узнать больше</a>
              </div>
            </div>                           
        @endforeach  
      </div>
      <div class="d-flex justify-content-center mt-5"><a href="{{ route('employees.create') }}" class="btn btn-outline-success">Добавить</a></div>
    </div>       
    
@endsection        
