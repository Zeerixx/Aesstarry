@extends('layouts.main')

@section('container-main')
<link rel="stylesheet" href="css/home.css">

<div class="container mt-4" id="home">
    <h2 class="card-title text-center fw-bold text-secondary text-white">AESSTARRY | COFFEE & TEA</h2>
    <hr>
    <div class="row" style="margin-top: 1rem">
        <div class="col-3">
            <div class="mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <img src="img/latte.jpg" alt="" class="card-img-top">
                    <h3 class="card-title">Coffee Latte</h3>
                    <p class="card-text">Rp.30.000</p>
                    <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
                </div>
            </div>
        </div>
    </div>

<div class="col-3">
    <div class="card shadow">
        <div class="card-body">
            <img src="img/expresso.jpg" alt="" class="card-img-top">
            <h3 class="card-title">Expresso</h3>
            <p class="card-text">Rp.15.000</p>
            <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
        </div>
    </div>
</div>

<div class="col-3">
    <div class="card shadow">
        <div class="card-body">
            <img src="img/cappucino.jpg" alt="" class="card-img-top">
            <h3 class="card-title">Cappucino</h3>
            <p class="card-text">Rp.20.000</p>
            <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
        </div>
    </div>
</div>

<div class="col-3">
    <div class="card shadow">
        <div class="card-body">
            <img src="img/americano.jpg" alt="" class="card-img-top">
            <h3 class="card-title">Americano</h3>
            <p class="card-text">Rp.17.000</p>
            <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
        </div>
    </div>
</div>

<div class="col-3">
    <div class="card shadow">
        <div class="card-body">
            <img src="img/thaitea.png" alt="" class="card-img-top">
            <h3 class="card-title">Thai Tea</h3>
            <p class="card-text">Rp.18.000</p>
            <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
        </div>
    </div>
</div>
<div class="col-3">
    <div class="card shadow">
        <div class="card-body">
            <img src="img/greentea.png" alt="" class="card-img-top">
            <h3 class="card-title">Green Tea Latte</h3>
            <p class="card-text">Rp.20.000</p>
            <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
        </div>
    </div>
</div>

<div class="col-3">
    <div class="card shadow">
        <div class="card-body">
            <img src="img/lemontea.jpg" alt="" class="card-img-top">
            <h3 class="card-title">Lemon tea</h3>
            <p class="card-text">Rp.24.000</p>
            <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
        </div>
    </div>
</div>

<div class="col-3">
    <div class="card shadow">
        <div class="card-body">
            <img src="img/lecitea.jpg" alt="" class="card-img-top" style="height: 140px; object-fit: cover">
            <h3 class="card-title">Lychee Tea</h3>
            <p class="card-text">Rp.22.000</p>
            <a href="{{ route('detail') }}" class="btn btn-secondary d-block">Detail</a>
        </div>
    </div>
</div>
</div>

    <div class="wm"><p>AESSTARRY Coffee & Tea | Copyright by Ziikry ©️2024-2026</p></div>

</div>

@endsection