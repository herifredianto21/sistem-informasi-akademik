@extends('layouts.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    
                    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
                <img src="{{ asset('storage/uploads/mahasiswa/'.$mhs->photo) }}" height="200" width="200" alt="" />
                <h2>{{$mhs->nama}}</h2>
                <p class="lead mb-5">{{$mhs->alamat}}<br>
                    Phone: {{$mhs->no_telp}}
                </p>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
                <label for="inputName"><h6>Name : </h6></label>
                {{-- <input type="text" id="inputName" class="form-control" /> --}}
                {{$mhs->nama}}
            </div>
            <div class="form-group">
                <label for="inputEmail"><h6>Tanggal Lahir :</h6></label>
                {{$mhs->tgl_lahir}}
            </div>
            <div class="form-group">
                <label for="inputSubject"><h6>Umur : </h6></label>
                {{$mhs->umur}}
            </div>
            <div class="form-group">
                <label for="inputSubject"><h6>Jenis Kelamin : </h6></label>
                {{$mhs->jk}}
            </div>
            <div class="form-group">
                <label for="inputSubject"><h6>Nomor Telepon : </h6></label>
                {{$mhs->no_telp}}
            </div>
            <div class="form-group">
                <label for="inputSubject"><h6>Alamat : </h6></label>
                {{$mhs->alamat}}
            </div>
            <div class="form-group">
                <label for="inputSubject"><h6>Email : </h6></label>
                {{$mhs->email}}
            </div>
            <div class="form-group">
                <label for="inputSubject"><h6>Nama Prodi : </h6></label>
                {{$mhs->nama_prodi}}
              </div>
            <div class="form-group">
                <a href="/mahasiswa"><button type="button" class="btn btn-secondary"> Back </button></a>
                <a href="/mahasiswa"><button type="button" class="btn btn-primary"> Edit </button></a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection