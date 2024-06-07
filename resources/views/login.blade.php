@extends('layouts.main')

@section('container-main')
<link rel="stylesheet" href="css/stylelogin.css">
<h2 class="card-title text-center fw-bold text-secondary text-white">AESSTARRY | LOGIN</h2>
<hr>
<div class="containerr" id="login">
    <div class="login-container">
        <h3>AESSTARRY</h3>
    <form action="#">
        <div class="input-grup">
            <label for="email">Email :</label>
            <input type="email" id="email" placeholder="Your Email..." required>
        </div>
        <div class="input-grup">
            <label for="password">Password :</label>
            <input type="password" id="password" placeholder="Your Password..." required>
        </div>
        <a href="#" class="forgot-password">Lupa Password?</a>
        <div class="input-grup">
        <a href="{{ route('home') }}" class="submit" @required(true)>Login</a>
    </div>
    </form>
</div>
</div>

<div class="akhir"><p>AESSTARRY Coffee & Tea | Copyright by Ziikry ©️2024-2026</p></div>
@endsection