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
            <h2 class="mb-2" style="font-weight: bold; color: #FA723D;">Welcome to Payroll</h2>
            <p class="mb-4 text-color">Get started with smarter, simpler payroll.</p>
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div class="mb-3">
                    <input placeholder="name" class="form-control custom-input" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
    
                <div class="mb-3">
                    <input placeholder="email" class="form-control custom-input" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" 
                        class="form-control custom-input @error('password') is-invalid @enderror" 
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>

                    @enderror
                </div>

                <div class="mb-3">
                    <input placeholder="confirm password" class="form-control custom-input" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
    
                <div class="d-grid">
                    <button type="submit" class="btn custom-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
   </div>
   
</div>


<style>


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

    .custom-btn {
        background-color: #FA723D;
        color: white;
        border: none;
        padding: 10px 30px;
        border-radius: 6px;
        transition: background-color 0.3s;
    }

    .custom-btn:hover {
        background-color: #FA723D;
    }

    .login-box {
        width: 100%;
        max-width: 400px;
    }
</style>


@endsection
