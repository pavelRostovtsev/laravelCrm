@extends('layouts.layout',['title' => "Событие"])

@section('content')
        <div class="row mt-5">
          <div class="col-12">
            <div class="card">
            <div class="card-header text-center">
              <h3>Название события: {{ $event->name_event }}</h3>
              <p>Прайс: {{ $event->price }}</p>
              <hr>
              <p>Тип работ: {{ $event->type_work }}</p>
              <hr>
              <p>Фирма: {{ $firmName }}</p>
              <hr>
              <p>Ответственный сотрудник: {{ $employeeName }}</p>
              <hr>
              <p>Дата: {{ $event->date }}</p>
              <hr>
              <p>Смена: {{ $changeName }}</p>
            </div>
              <div class="card-body">
                <div class="card-btn d-flex justify-content-center">
                  <div class="m-2"><a href="{{ route('events.index') }}" class="btn btn-outline-primary">На главную</a></div>
                      <div class="m-2"><a href="{{ route('events.edit', $event->id) }}" class="btn btn-outline-success">Редактировать</a></div>
                      <div class="m-2">
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
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
        