@extends('layouts.main')
@section('content')
    <!-- Edit
    * Форма редактирования какой-либо сущности, в целом не важно какой она будет
    - Cервер отдает эту форму в ответ на запрос. REQUEST->RESPONSE
    - В форму вносится информация от пользователя и передается на сервер
    - Ипнут: тайп, класс, имя, айди, вэлью
    - Выполни вот этот вот код пожалуйста компуктер

-->
    <div class=""><a href="{{ route('product.index') }}" class="btn btn-info text-white mt-3">Все товары</a></div>

    <form action="{{ route('product.update', 1) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group mt-3">
            <label for="product_name">Название</label>
            <input type="text" class="form-control" name="name" id="product_name"
                   value="{{ $product }}">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="product_price">Цена</label>
            <input type="text" class="form-control" name="price" id="product_price" value="100500 rub">
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="product_description">Описание</label>
            <input type="text" class="form-control" name="description" id="product_description" value="Descrptn">
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="product_category">Категория</label>
            <select multiple class="form-control" name="category" id="product_category">
{{--                @foreach($categories as $category)--}}
{{--                    <option--}}
{{--                        {{ $category->id == $product->category->id ? ' selected' : '' }}--}}
{{--                        value="{{ $category->id }}">{{ $category->name }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="product_tags">Тэги</label>
            <select multiple name="tags[]" id="product_tags">
{{--                @foreach($tags as $tag)--}}
{{--                    <option--}}
{{--                        @foreach($product->tags as $productTag)--}}
{{--                            {{ $tag->id == $productTag->id ? ' selected' : '' }}--}}
{{--                        @endforeach--}}
{{--                        value="{{ $tag->id }}">{{ $tag->name }}</option>--}}
{{--                @endforeach--}}
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Изменить</button>
    </form>
@endsection
