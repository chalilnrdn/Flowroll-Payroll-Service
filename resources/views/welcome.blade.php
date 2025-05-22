@extends('base')

@section('content')
<div class="container text-start ms-4 mt-5">
    <img class="" src="{{ asset('assets/img-hero.svg') }}" alt="">
</div>
<div class="container text-center mt-5 " style="margin-bottom:8rem;">
    
    <p class="lead fw-medium text-color">Experience a faster, safer, and more efficient way to manage employee payments</p>
    <div class="mt-4">
        <a href="{{ route('login') }}" class="py-2 px-4 btn-primary btn btn-outline-light">Login</a>
    </div>
</div>

<style>
    .btn-primary{
        background-color: #FA723D;
        color: white;
        text-decoration: none;
        transition: 0.2s;
      }
    
      .btn-primary:hover{
        background-color: #2B2525;
        color: white;
        text-decoration: none;
      }

    .btn-secondary{
        background-color: #2B2525;
        color: white;
        text-decoration: none;
        transition: 0.2s;
      }
    
      .btn-secondary:hover{
        background-color: #FA723D;
        color: white;
        text-decoration: none;
      }

      .text-color{
        color: #2B2525;
      }
</style>

@endsection
   

