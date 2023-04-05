@extends('layouts.app')

@section('title', 'List Product')

@section('content')
    <div class="products my-5">
        <div class="text-center my-5">
            <h3>
                List Product
            </h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{ '/product/add' }}" class="btn btn-primary my-4" type="butoon">+ Tambah Produk</a>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                @foreach ($products as $item)
                    <div class="col">
                        <div class="card">
                            <img src="{{ Storage::url($item->avatar) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-between align-items-center">
                                    <h5>{{ $item->name }}</h5>
                                    <h6>IDR {{ $item->price }}</h6>
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name }}</h6>
                                <p class="card-text">{{ $item->description }}</p>
                                <a href="/product/{{ $item->id }}/edit" class="card-link text-warning">Ubah</a>
                                <a href="/product/{{ $item->id }}/delete" class="card-link text-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
