@extends('layouts.master')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>SI<small>Akademik</small></h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form class="form" method="get" action="{{ route('search') }}">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Data<small>Jurusan</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <p class="text-muted font-13 m-b-30">
                                            <a href="{{route('statusmhsw.create')}}"><button class="btn btn-primary">Tambah <span class="glyphicon glyphicon-plus"></span></button></a>
                                            <button type="button" class="btn btn-warning btn-xs">Print <span class="glyphicon glyphicon-print"></span></button>
                                        </p>
                            
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Status Mahasiswa ID</th>
                                                    <th>Nama</th>
                                                    <th>Nilai</th>
                                                    <th>Keluar</th>
                                                    <th>Aktif</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($statusmhsw as $statusmahasiswa)
                                                <tr>
                                                    <td>{{ $statusmahasiswa->id }}</td>
                                                    <td>{{ $statusmahasiswa->statusMhsw_id }}</td>
                                                    <td>{{ $statusmahasiswa->nama }}</td>
                                                    <td>{{ $statusmahasiswa->nilai }}</td>
                                                    <td>{{ $statusmahasiswa->keluar }}</td>
                                                    <td>{{ $statusmahasiswa->aktif }}</td>
                                                    <td class="text-center">
                                                        <form action="{{ route('statusmhsw.destroy',$statusmahasiswa->id) }}" method="POST">
                                        
                                                            <a class="btn btn-info btn-sm" href="{{ route('statusmhsw.show',$statusmahasiswa->id) }}">Show </a>
                                        
                                                            <a class="btn btn-primary btn-sm" href="{{ route('statusmhsw.edit',$statusmahasiswa->id) }}">Edit <span class="glyphicon glyphicon-edit"></span></a>
                                        
                                                            @csrf
                                                            @method('DELETE')
                                        
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete <span class="glyphicon glyphicon-minus"></span></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
    
@endsection
