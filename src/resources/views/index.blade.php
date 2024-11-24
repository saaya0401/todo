@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="alert">
    @if(session('message'))
    <div class="alert__success">
        {{session('message')}}
    </div>
    @endif
    @if($errors->any())
    <div class="alert__danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="todo-content">
    <form class="todo-create" action="/todos" method="post">
        @csrf
        <div class="todo-create__text">
            <input class="todo-create__input" type="text" name="content" value="{{old('content')}}">
        </div>
        <div class="todo-create__button">
            <button class="todo-create__button-submit" type="submit">作成</button>
        </div>
    </form>
    <table class="todo-table">
        <tr class="todo-table__row">
            <th class="todo-table__header">Todo</th>
        </tr>
        @foreach($todos as $todo)
        <tr class="todo-table__row">
            <td class="todo-table__update">
                <form class="update-form" action="/todos/update" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="update-form__content">
                        <input class="update-form__input" type="text" name="content" value="{{$todo['content']}}">
                        <input type="hidden" name="id" value="{{$todo['id']}}">
                    </div>
                    <div class="update-form__button">
                        <button class="update-form__button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="todo-table__delete">
                <form class="delete-form" action="/todos/delete" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="delete-form__button">
                        <input type="hidden" name="id" value="{{$todo['id']}}">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection