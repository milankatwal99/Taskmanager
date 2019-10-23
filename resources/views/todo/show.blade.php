@extends('layout.app')
@section('content')
{{ $todos->content}}<br>
<a href ="/todosapps/public/edit/{{ $todos->id }}" class ="btn btn-danger">Edit</a>
<a href = "/todosapps/public/delete/{{$todos->id}}" class = "btn btn-success">Delete</button>
@endsection
