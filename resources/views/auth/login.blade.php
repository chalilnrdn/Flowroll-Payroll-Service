@extends('layouts.app')

@section('content')


<div class="login-wrapper">
    <div class="left">
        <img src="{{ asset('assets/element-left.svg') }}" alt="">
        <img src="{{ asset('assets/element-right.svg') }}" alt="">
    </div>

   <div class="right">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="login-box text-center">
            <h2 class="mb-2" style="font-weight: bold; color: #FA723D;">Welcome Back</h2>
            <p class="mb-4 text-color">Managing payroll doesn’t have to be stressful.</p>
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div class="mb-3">
                    <input id="email" type="email" 
                        class="form-control custom-input @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                    @error('email')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <input id="password" type="password" 
                        class="form-control custom-input @error('password') is-invalid @enderror" 
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="d-grid">
                    <button type="submit" class="btn btn-outline-light btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
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

    .left {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }

    .right {
        flex: 2; /* ubah nilai ini untuk membuat bagian kanan lebih besar */
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }

        .login-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
            overflow: hidden;
        }

        .login-box {
            z-index: 2;
            width: 100%;
            max-width: 500px;
        }

        .element-left,
        .element-right {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            opacity: 0.9;
        }

        .element-left {
            left: 20px;
            width: 140px;
        }

        .element-right {
            right: 20px;
            width: 140px;
        }


    .custom-input {
        border: 2px solid #FA723D;
        padding: 10px 20px;
        font-size: 16px;
        outline: none;
        box-shadow: none;
    }

    .custom-input:focus {
        border-color: #FA723D;
        box-shadow: 0 0 0 0.2rem rgba(235, 109, 61, 0.25);
    }

    .login-box {
        width: 100%;
        max-width: 400px;
    }
</style>





@endsection
