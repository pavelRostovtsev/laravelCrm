@extends('layouts.layout',['title' => "смена $сhanges->name_change"])

@section('content')
        <div class="row mt-5">
          <div class="col-12">
            <div class="card">
            <div class="card-header text-center"><h2>{{ $сhanges->name_change }}</h2></div>
              <div class="card-body">
                <div class="card-btn d-flex justify-content-center">
                  <div class="m-2"><a href="{{ route('changes.index') }}" class="btn btn-outline-primary">На главную</a></div>
                      <div class="m-2"><a href="{{ route('changes.edit',$сhanges->id) }}" class="btn btn-outline-success">Редактировать</a></div>
                      <div class="m-2">
                        <form action="{{ route('changes.destroy',$сhanges->id) }}" method="POST">
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
        