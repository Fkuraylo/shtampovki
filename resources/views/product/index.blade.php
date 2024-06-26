@extends('layouts.main')
@section('content')

        <div class="mt-2 mb-2">
            <h2>Все товары</h2>
            <div>
                <a class="btn bg-warning mt-3" href="/">На главную</a>
                <a class="btn btn-info mt-3 text-white" href="{{ route('product.create') }}">Добавить товар</a>
            </div>
        </div>

        <div>
            @foreach($products as $product)
                <div>{{ $product->id }}. <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></div>
            @endforeach
        </div>



@endsection
