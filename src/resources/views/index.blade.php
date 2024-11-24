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
    <div class="todo-title">
        <h2>新規作成</h2>
    </div>
    <form class="todo-create" action="/todos" method="post">
        @csrf
        <div class="todo-create__text">
            <input class="todo-create__input" type="text" name="content" value="{{old('content')}}">
            <select class="todo-create__select" name="category_id">
                <option value="">カテゴリ未選択</option>
                @foreach($categories as $category)
                <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="todo-create__button">
            <button class="todo-create__button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-title">
        <h2>Todo検索</h2>
    </div>
    <form class="todo-create" action="/todos/search" method="get">
        @csrf
        <div class="todo-create__text">
            <input class="todo-create__input" type="text" name="keyword" value="{{old('keyword')}}">
            <select class="todo-create__select" name="category_id">
                <option value="">カテゴリ</option>
                @foreach($categories as $category)
                <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="todo-create__button">
            <button class="todo-create__button-submit" type="submit">検索</button>
        </div>
    </form>
    <table class="todo-table">
        <tr class="todo-table__row">
            <th class="todo-table__header">
                <div class="todo-table__title">Todo</div>
                <div class="todo-table__title">カテゴリ</div>
                <div class="todo-table__hidden"></div>
            </th>
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
                    <div class="update-form__category">
                        <select class="update-form__category-select" name="category_id" >
                            <option value="" disabled selected>{{$todo['category']['name']}}</option>
                            @foreach($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                            @endforeach
                        </select>
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