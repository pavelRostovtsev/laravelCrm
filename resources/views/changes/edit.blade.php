@extends('layouts.layout', ["title" => "Редактирование $сhanges->name_change смены"])

@section('content')    
<form action="{{ route('changes.update', $сhanges->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <h3>Редактировать пост</h3>
        @include('changes.parts.form')
        <input type="submit" value="Редактировать пост" class="btn btn-outline-success">
    </form>
@endsection