@extends('layouts.main')
@section('content')

    <div>
        <a class="btn btn-info mt-3 text-white" href="{{ route('product.index') }}">Назад</a>
    </div>

    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="form-group mt-3">
            <label for="name">Название</label>
            <input type="text" class="form-control" name="name" id="product_name" placeholder="Название"
                   value="{{ @old('name') }}">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="price">Цена товара</label>
            <input type="text" class="form-control" name="price" id="product_price" placeholder="В рублях"
                   value="{{ @old('price') }}">
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="description">Описание</label>
            <textarea class="form-control" name="description" id="product_description"
                      placeholder="Описание товара">{{ @old('description') }}</textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="category">Категория</label>
            <select class="form-control" name="category" id="category_id">
                <option value="">df</option>
                <option value="">ff</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="tags">Тэги(можно выбрать несколько)</label>
            <select multiple class="form-control" name="tags[]" id="tags_id">
                <option value="1">sdf</option>
                <option value="2">sddff</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Сохранить</button>
    </form>

@endsection
