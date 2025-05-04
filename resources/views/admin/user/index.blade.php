@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user-alt mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="cadr-header d-flex flex-warp justify-content-center justify-content-xl-between">
        <div>
            <a href="{{ route('userCreate')}}" class="btn btn-primary" style="margin-left: 10px;">
            <i class="fas fa-plus mr2"></i>
                Tambah Data</a>
        </div>   

        <div>
            <a href="{{ route('userExcel') }}" class="btn btn-success" style="margin-left: 10px;"">
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
                                                <i class="fas fa-cog">
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($user as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration}}</td>
                                            <td>{{$item->nama}}</td>

                                            <td class="text-center">
                                                <span class="badge badge-primary">{{$item->email}}</span>
                                                                                        
                                            </td>
                                            <td class="text-center">
                                                @if ($item->jabatan == 'Admin')
                                                    <span class="badde badge-dark badge-pill">
                                                        {{$item->jabatan}}
                                                    </span>
                                                    @else
                                
                                                    <span class="badde badge-info badge-pill">
                                                        {{$item->jabatan}}
                                                    </span>
                                                @endif
                                                </td>
                                            <td>
                                                @if ($item->is_tugas == false)
                                                    <span class="badde badge-danger badge-pill">
                                                    {{$item->is_tugas}}
                                                    </span>
                                                    @else
                                
                                                    <span class="badde badge-success badge-pill">
                                                    {{$item->is_tugas}}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('userEdit', $item->id)}}" class="btn btn-sm btn-warning ">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button href="#" class="btn btn-sm btn-danger"
                                                data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                                                    <i class="fas fa-trash"></i>
                                            </button>
                                            @include('admin/user/modal')
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>

@endsection