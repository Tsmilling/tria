@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user-alt mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="cadr-header d-flex flex-warp justify-content-center justify-content-xl-between">
        <div>
            <a href="#" class="btn btn-primary" style="margin-left: 10px;"">
            <i class="fas fa-plus mr2"></i>
                Tambah Data</a>
        </div>   

        <div>
            <a href="#" class="btn btn-success" style="margin-left: 10px;"">
            <i class="fas fa-file-excel mr2"></i>
                Excel</a>
            <a href="#" class="btn btn-danger" style="margin-left: 10px;"">
            <i class="fas fa-file-excel mr2"></i>
                PDF</a>
        </div>  

        
        
        
        </div>
        <div class="card-body">
        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-primary text-white">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>
                                                <i class="fas fa-cog"
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td class="text-center">
                                            <span class="badge badge-dark badge-pill">Admin</span>
                                            </td>
                                            
                                            <td class="text-center">
                                            <span class="badge badge-danger badge-pill">Belum di Tugaskan</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>

@endsection