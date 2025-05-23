@extends('base')

@section('content')

<div class="container mt-4" style="margin-bottom: 5rem;">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-orange text-white">
                    <h5 class="mb-0">Update Data Karyawan</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('manage.employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      
                        <!-- name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $employee->user->name)}}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama lengkap">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Aktif</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $employee->user->email)}}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru (Optional)</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 8 karakter">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- jabatan -->
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan', $employee->jabatan)}}" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Contoh: Staff, Admin, dll">
                            @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                            <!--  gaji pokok-->
                        <div class="mb-3">
                            <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                            <input type="number" name="gaji_pokok" id="gaji_pokok" value="{{ old('name', $employee->gaji_pokok)}}" class="form-control @error('gaji_pokok') is-invalid @enderror" placeholder="Masukkan gaji pokok">
                            @error('gaji_pokok')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- button -->
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection