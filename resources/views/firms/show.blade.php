@extends('layouts.layout',['title' => "Сотрудник $employees->name_emploee"])

@section('content')
        <div class="row mt-5">
          <div class="col-12">
            <div class="card">
            <div class="card-header text-center">
              <h3>Имя: {{ $employees->name_employee }}</h3>
              <h3>Email: {{ $employees->email }}</h3>
            </div>
              <div class="card-body">
                <div class="card-btn d-flex justify-content-center">
                  <div class="m-2"><a href="{{ route('employees.index') }}" class="btn btn-outline-primary">На главную</a></div>
                      <div class="m-2"><a href="{{ route('employees.edit', $employees->id_employee) }}" class="btn btn-outline-success">Редактировать</a></div>
                      <div class="m-2">
                        <form action="{{ route('employees.destroy', $employees->id_employee) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" class="btn btn-outline-danger" value="Удалить" >
                        </form>
                      </div> 
                  </div>                    
                </div>                
              </div>
            </div>
          </div>           
        </div>
@endsection        
        