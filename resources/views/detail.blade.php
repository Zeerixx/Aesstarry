@extends('layouts.main')

@section('container-main')
    <link rel="stylesheet" href="css/detail.css">
    <div class="container mt-5" id="detail">
        <h2 class="card-title text-center fw-bold text-secondary text-white">  DETAIL PRODUCT | AESSTARRY </h2>
        <hr>
        <div class="row">
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <img src="img/latte.jpg" alt="" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title fw-bold"> Coffee Latte</h3>
                        <p class="card-text"> Rp. 30.000</p>
                        <input type="number" name="qty" required class="form-control">
                        <hr>
                        <h3 class="card-title fw-bold"> keterangan : </h3>
                        <p class="card-text"> Espresso dengan tambahan susu kukus dan sedikit busa susu di atasnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title fw-bold"> kategori : Coffee </h3>
                        <a href="{{ route('keranjang') }}" class="btn btn-secondary"> Buy </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wm"><p>AESSTARRY Coffee & Tea | Copyright by Ziikry ©️2024-2026</p></div>

    <script src="/js/bootstrap.bundle.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection