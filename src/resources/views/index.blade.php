@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="todo__alert">
    <div class="todo__alert--inner">
        <p class="todo__alert--text">Todoを作成しました</p>
    </div>
</div>
<div class="todo__content">
    <form class="todo__form" action="" method="post">
        <div class="todo__form--create">
            <input class="todo__form--create-input" type="text" name="content">
        </div>
        <div class="todo__form--button">
            <button class="todo__form--button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo__created">
        <ul class="todo__list">
            <li class="list__title">Todo</li>
            <li class="todo__list--item">
                <form class="update__item" action="" method="post">
                    <input class="update__content" type="text" name="content" value="test">
                    <button class="update__button" type="submit">更新</button>
                </form>
                <form class="delete__item" action="" method="post">
                    <button class="delete__button" type="submit">削除</button>
                </form>
            </li>
        </ul>
    </div>
</div>

@endsection