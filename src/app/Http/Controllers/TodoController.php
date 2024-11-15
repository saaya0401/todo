<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos=Todo::all();
        return view('index', compact('todos'));
    }
    public function store(TodoRequest $request){
        $todo=$request->only(['content']);
        Todo::create($todo);
        return redirect('/')->with('message', 'Todoを作成しました');
    }
    public function update(TodoRequest $request, $id){
        $todo=$request->only(['content']);
        Todo::find($id)->update($todo);
        return redirect('/')->with('message', 'Todoを更新しました');
    }
    public function destroy($id){
        Todo::find($id)->delete();
        return redirect('/')->with('message', 'Todoを削除しました');
    }
}
