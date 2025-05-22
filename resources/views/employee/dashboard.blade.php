@extends('base')

@section('content')

<div class="container text-start mt-5" style="margin-right: 2rem">
    <img src="{{ asset('assets/hero-karyawan.svg') }}" alt="">
</div>

<div class="container py-5">

    <section class="py-5">
            <div class="container">
            <h2 class="fw-bold mb-1">Hello, <em>{{ Auth::user()->name }}</em></h2>
            <p class="mb-4">Get started to your management</p>

            <div class="row g-3">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('assets/card-1-karyawan.svg') }}" alt="" class="img-fluid">

                            <a href="{{ route('attendance.index') }}" class="position-absolute end-0 bottom-0 m-3">
                                <img src="{{ asset('assets/button-arrow.svg') }}" alt="Arrow Icon" style="width: 60px; height: 60px;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <img src="{{ asset('assets/card-mix-karyawan.svg') }}" alt="">
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('assets/card-2-karyawan.svg') }}" alt="" class="img-fluid">

                            <a href="{{ route('salary.index') }}" class="position-absolute end-0 m-3" style="top: 230px; right: 24px;">
                                <img src="{{ asset('assets/button-arrow.svg') }}" alt="Arrow Icon" style="width: 60px; height: 60px;">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection