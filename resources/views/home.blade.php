@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    @auth
        {{-- <p>{{ Auth::user()->name }}</p> --}}
        <h1 class="text-center my-5">Selamat Datang di Wars</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category</h5>
                        <p class="card-text">Atur kategori-kategori produkmu</p>
                        <a href="{{ '/category' }}" class="btn btn-primary">Go to Category</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product</h5>
                        <p class="card-text">Atur produk-produk di tokomu</p>
                        <a href="{{ '/product' }}" class="btn btn-primary">Go to Product</a>
                    </div>
                </div>
            </div>
        </div>
    @endauth
    @guest
        <h1>Homepage</h1>
        <p>Login dulsss</p>
    @endguest
@endsection
