@extends('layouts.main')

@section('container.main')
<div class="container mt-5" id="bayar">
    <h2 class="card-title text-center fw-bold text-secondary text-white" > CHECKOUT PAY! | AESTARRY </h2>
    <hr>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <img src="img/narrow spoon.jpg" alt="" class="card-img-top">
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"> Coffee Latte </h2>
                    <hr>
                    <p class="card-text"> Harga : Rp.30.000</p>
                    <p class="card-text"> Jumlah : 2</p>
                    <p class="card-text"> Total Harga : Rp.60.000</p>
                    <p style="border: 1px solid gray ; padding: 5px ; border-radius: 5px" >Bukti Pembayaran</p>
                    <input type="file" name="bukti" id="" class="form-control">
                    <hr>
                    <h1 class="card-title">Deskripsi</h1>
                    <p class="card-text">Espresso dengan tambahan susu kukus dan sedikit busa susu di atasnya.</p>
                    <a href="{{ route('summary') }}" class="btn btn-secondary">submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="akhir"><p>AESTARRY Coffee & Tea | Copyright by Ziikry ©️2024-2069</p></div>
    

<script src="/js/bootstap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection