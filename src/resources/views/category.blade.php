@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/category.css')}}">
@endsection

@section('content')
<div class="alert">

    <div class="alert__success">
        カテゴリを作成しました
    </div>

</div>

<div class="category-content">
    <form class="category-create" action="" method="post">
        @csrf
        <div class="category-create__text">
            <input class="category-create__input" type="text" name="name" value="">
        </div>
        <div class="category-create__button">
            <button class="category-create__button-submit" type="submit">作成</button>
        </div>
    </form>
    <table class="category-table">
        <tr class="category-table__row">
            <th class="category-table__header">category</th>
        </tr>

        <tr class="category-table__row">
            <td class="category-table__update">
                <form class="update-form" action="" method="post">
                    @csrf
                    <div class="update-form__content">
                        <input class="update-form__input" type="text" name="name" value="text">
                        <input type="hidden" name="id"value="">
                    </div>
                    <div class="update-form__button">
                        <button class="update-form__button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="category-table__delete">
                <form class="delete-form" action="" method="post">
                    @csrf
                    <div class="delete-form__button">
                        <input type="hidden" name="id" value="">
                        <button class="delete-form__button-submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</div>
@endsection