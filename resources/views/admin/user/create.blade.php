@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="cadr-header">
        <div>
            <a href="{{ route('user')}}" class="btn btn-success" style="margin-left: 10px;"">
            <i class="fas fa-arrow-left mr2"></i>
                Kembali</a>
        </div>   

        </div>
        <div class="card-body">
            <div class="row" >
                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Nama:
                    </label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Email:
                    </label>
                    <input type="email" name="email" class="form-control">
                </div>
                
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Jabatan:
                    </label>
                    <select name="jabatan" class="form-control">
                    <option selected disabled>--Pilih Jabatan--</option>
                        <option value="Admin">Admin</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                </div>

                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Password:
                    </label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Password Konfirmasi:
                    </label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>


                
            </div>

        </div>
    </div>

@endsection