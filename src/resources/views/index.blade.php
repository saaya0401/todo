@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="alert">
    <div class="alert__success">
        Todoを作成しました
    </div>
</div>
<div class="todo-content">
    <div class="todo-create">
        <div class="todo-create__text">
            <input class="todo-create__input" type="text" name="content" value="">
        </div>
        <div class="todo-create__button">
            <button class="todo-create__button-submit" type="submit">作成</button>
        </div>
    </div>
    <table class="todo-table">
        <tr class="todo-table__row">
            <th class="todo-table__header">Todo</th>
        </tr>

        <tr class="todo-table__row">
            <td class="todo-table__update">
                <form class="update-form" action="" method="post">
                    <div class="update-form__content">
                        <input class="update-form__input" type="text" name="content" value="test">
                    </div>
                    <div class="update-form__button">
                        <button class="update-form__button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="todo-table__delete">
                <form class="delete-form" action="" method="post">
                    <div class="delete-form__button">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
    </table>

</div>
@endsection