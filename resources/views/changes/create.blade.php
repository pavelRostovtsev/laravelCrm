@extends('layouts.layout', ["title" => "Создать новый пост"])

@section('content')    
<form action="{{ route('changes.store') }}" method="POST"">
        @csrf
        <h3>Создать смену</h3>
        @include('changes.parts.form')

        <input type="submit" value="Создать смену" class="btn btn-outline-success">
    </form>
@endsection