@extends('layout.app')
@section('content')
    <div class = "col-md-8 my-5">
        <div class="card" style="width:400px">
            <div class = "card-header">Edit the task</div>
            <div class="card-body">
                @if($errors->any())
                    <div classs ="alert alert-danger">
                        <ul class ="list-group">
                            @foreach($errors->all() as $error)
                                <li class ="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>

                    </div>
                @endif

                <form action="/todosapps/public/updatetodos/{{$todos->id}}" method="post">
                    @csrf
                    <div class ="form-group">
                        <input name = "name" type = "text" placeholder="name"  value = "{{ $todos->name }}"class = "form-control my-2" >
                        <textarea name = "textarea" cols="30" rows="10" class ="form-control"> {{ $todos->content }} </textarea>
                        <button type = "submit" class = "btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()