@extends('layouts.main')
@section('content')
    <div class="mt-3"><span class="fw-bold">(name) </span> Conti Viking 255/50 18</div>
    <div class=""><span class="fw-bold">(price) </span>1000</div>
    <div class=""><span class="fw-bold">(description) </span>lorem 20</div>
    <div class=""><span class="fw-bold">(category) </span>Колеса в сборе</div>
    <div class="mb-3"><span class="fw-bold">(tag) </span>Ранфлет, Шип</div>
    <hr>
    <div class=""><a href="{{ route('product.index') }}" class="btn btn-info text-white">Все товары</a>
        <a href="{{ route('product.edit', 1) }}" class="btn btn-info text-white">Редактировать</a>

        <form action="{{ route('product.destroy', 1) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mt-3">Удалить</button>
        </form>
    </div>

@endsection
