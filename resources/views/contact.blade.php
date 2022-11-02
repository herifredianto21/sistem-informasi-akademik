@include('layouts.header')

    @include('layouts.menu')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Contacts Dosen</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
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
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="col-md-12 col-sm-12  text-center">
                                <ul class="pagination pagination-split">
                                <li><a href="#">A</a></li>
                                <li><a href="#">B</a></li>
                                <li><a href="#">C</a></li>
                                <li><a href="#">D</a></li>
                                <li><a href="#">E</a></li>
                                <li>...</li>
                                <li><a href="#">W</a></li>
                                <li><a href="#">X</a></li>
                                <li><a href="#">Y</a></li>
                                <li><a href="#">Z</a></li>
                                </ul>
                            </div>

                            <div class="clearfix"></div>

                            @foreach ($kontak as $kontaks)
                                
                            

                            <div class="col-md-4 col-sm-4  profile_details">
                                <div class="well profile_view">
                                <div class="col-sm-12">
                                    <h4 class="brief"><i>Dosen</i></h4>
                                    <div class="left col-md-7 col-sm-7">
                                    <h2>{{$kontaks->nama}}</h2>
                                    <p><strong>NID: </strong> {{$kontaks->nid}} </p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-building"></i> Jurusan: 
                                            @if ($kontaks->jurusan_id == 1)
                                                Teknik Informatika
                                            @elseif ($kontaks->jurusan_id == 2)
                                                Sistem Informasi
                                            @elseif ($kontaks->jurusan_id == 3)
                                                Teknik Mesin
                                            @elseif ($kontaks->jurusan_id == 4)
                                                Management Ekonomi
                                                @else
                                                    Teknik Sipil
                                            @endif
                                            </li>
                                        <li><i class="fa fa-building"></i> Address: </li>
                                        <li><i class="fa fa-phone"></i> Phone #: </li>
                                    </ul>
                                    </div>
                                    <div class="right col-md-5 col-sm-5 text-center">
                                    <img src="{{asset('assets')}}/images/img.jpg" alt="" class="img-circle img-fluid">
                                    </div>
                                </div>
                                <div class=" profile-bottom text-center">
                                    <div class=" col-sm-6 emphasis">
                                    <p class="ratings">
                                        <a>4.0</a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                    </p>
                                    </div>
                                    <div class=" col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                                        </i> <i class="fa fa-comments-o"></i> </button>
                                    <a href="/profile" class="btn btn-primary btn-sm"><i class="fa fa-user"> </i> View Profile</a>
                                    </div>
                                </div>
                                </div>
                            </div>

                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- /page content -->

@include('layouts.footer')
