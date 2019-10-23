@extends('layout.app')
@section('content')
    @csrf
<h2 class ='text-center '>Todos page </h2>
@foreach($todos as $todo)
<li class ="list-group-item pd-30">
    {{ $todo->name  }}
    <a href="/todosapps/public/todos/{{ $todo->id }}" class = "btn btn-primary ml-5">view</a>
</li>
@endforeach
@endsection