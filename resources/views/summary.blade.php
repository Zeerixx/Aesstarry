@extends('layouts.main')

@section('container-main')
<link rel="stylesheet" href="css/summary.css">
<div class="container mt-5" id="summary">
    <h2 class="card-title text-center fw-bold text-secondary text-white"> SUMMARY | AESSTARRY</h2>
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
           <h3 class="card-title fw-bold">Invoice : </h3>
           <hr>
           <p class="card-text"> Price: Rp. 30.000</p>
           <p class="card-text"> Amount: 2</p>
           <p class="card-text"> Total Price: Rp. 60.000</p>
       </div>
   </div>
   </div>
</div>    
</div> 

<div class="wm"><p>AESTARRY Coffee & Tea | Copyright by Ziikry ©️2024-2069</p></div>

<script src="/js/bootstrap.bundle.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection