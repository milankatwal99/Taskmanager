<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index',compact('todos'));

    }

    public function show($todoId)
    {
        //dd($todoId);
        $todos =Todo::find($todoId);
        return view('todo.show',compact('todos'));
        //return view('layout.app',compact('todos'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),
            ['name'=>'required|min:6|max:9',
                'textarea'=>'required'
                ]);


        $output=$request->all();
        $todo = new Todo();
        $todo->name = $output['name'];
        $todo->content = $output['textarea'];

        $todo->save();

        session()->flash('success','Todo created successfully');

        return redirect('/todos');
    }

    public function edit($todosid)
    {   $todos=Todo::find($todosid);
        return view("todo.edit",compact('todos'));
    }

    public function update($todosid)
    {
        //$todos = new Todo();
        //$todos->save();
        $output = request()->all();
        $todos = Todo::find($todosid);
        $todos->name=$output['name'];
        $todos->content=$output['textarea'];
        $todos->save();
        return redirect('/todos');
        //dd($output);
    }
    public function delete($todosid)
    {
        $todos = Todo::find($todosid);
        $todos->delete();
        return redirect('/todos');
    }
}
