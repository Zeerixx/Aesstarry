@extends('layouts.main')

@section('container-main') 
    <link rel="stylesheet" href="css/cart.css">
    <div class="container mt-5" id="keranjang">
        <h2 class="card-title text-center fw-bold text-secondary text-white">AESSTARRY CART</h2>
        <hr>
        <div class="card shadow">
            <div class="row">
                <div class="col-2">
                    <div class="card-body">
                        <img src="img/latte.jpg" alt="" class="card-img-top">
                    </div>
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Coffee Latte</h3>
                        <p class="card-text">Harga: Rp. 30.000</p>
                        <p class="card-text">Jumlah: 2</p>
                        <p class="card-text"> Total Harga: Rp. 60.000</p>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center">
                <div class="card-body">
                    <a href="{{ route('summary') }}" class="btn btn-secondary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wm"><p>AESSTARRY Coffee & Tea | Copyright by Ziikry ©️2024-2026</p></div>
@endsection