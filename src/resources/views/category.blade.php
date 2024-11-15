@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/category.css')}}">
@endsection

@section('content')
<div class="category-alert__success">
    <p class="category-alert__text">
        カテゴリを削除しました
    </p>
</div>

<div class="category__content">
    <div class="category__create">
        <div class="category__create-input">
            <input type="text" name="content" >
        </div>
        <div class="category__create--button">
            <button class="category__create--button-submit" type="submit">作成</button>
        </div>
    </div>
    <div class="category__edit">
        <table class="edit__table">
            <tr class="edit__table--row">
                <th class="edit__table--header">
                    category
                </th>
            </tr>
            
            <tr class="edit__table--row">
                <td class="edit__table--update">
                    <form class="edit__table--update-form" action="" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="form-category">
                            <p>category1</p>
                        </div>
                        <div class="form-update__button">
                            <button class="form-update__button-submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="edit__table--delete">
                    <form class="edit__table--delete-form" action="" method="post">
                        @method('delete')
                        @csrf
                        <div class="form-delete__button">
                            <button class="form-delete__button-submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection