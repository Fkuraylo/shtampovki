@extends('layouts.main')
@section('content')
    <div class="mt-3"><span class="fw-bold">(name) id {{ $product->id }} </span> {{ $product->name }}</div>
    <div class=""><span class="fw-bold">(category) </span> {{ $product->category->name }}</div>
    <div class=""><span class="fw-bold">(description) </span>{{ $product->description }}</div>
    <div class=""><span class="fw-bold">(price) </span>{{ $product->price }}</div>
    <div class="mb-3"><span class="fw-bold">(tag) </span>
        @if($product->image == null)
            {{ 'картинки нет' }}
        @endif
    </div>
    <hr>
    <div class=""><a href="{{ route('product.index') }}" class="btn btn-info text-white">Все товары</a>
        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info text-white">Редактировать</a>

        <form action="{{ route('product.destroy', $product->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mt-3">Удалить</button>
        </form>
    </div>

@endsection
