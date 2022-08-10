
    @include('layouts.header')

    @include('layouts.menu')


        <!-- page content -->
        <div class="container body">
            <div class="main_container">
              <!-- top navigation -->
              <div class="top_nav">
                  <div class="nav_menu">
                      <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                      </div>
                      <nav class="nav navbar-nav">
                      <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets')}}/images/img.jpg" alt="">Heri Fredianto
                          </a>
                          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="javascript:;"> Profile</a>
                              <a class="dropdown-item"  href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                              </a>
                          <a class="dropdown-item"  href="javascript:;">Help</a>
                            <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                          </div>
                        </li>
        
                        <li role="presentation" class="nav-item dropdown open">
                          <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                          </a>
                          <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                            <li class="nav-item">
                              <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                  <span>John Smith</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                  Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                  <span>John Smith</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                  Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                  <span>John Smith</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                  Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="dropdown-item">
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                  <span>John Smith</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                  Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <div class="text-center">
                                <a class="dropdown-item">
                                  <strong>See All Alerts</strong>
                                  <i class="fa fa-angle-right"></i>
                                </a>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              <!-- /top navigation -->
      
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
                          <h2>Data<small>Mahasiswa</small></h2>
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
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                            Pengalaman selalu lebih penting dibanding level pendidikan dan nilai akademis.
                          </p>
                          
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>E-mail</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($mhs as $mhss)
                                <tr>
                                    <td>{{ $mhss->id}}</td>
                                    <td>{{ $mhss->nama}}</td>
                                    <td>{{ $mhss->tgl_lahir}}</td>
                                    <td>{{ $mhss->umur}}</td>
                                    <td>{{ $mhss->jk}}</td>
                                    <td>{{ $mhss->no_telp}}</td>
                                    <td>{{ $mhss->alamat}}</td>
                                    <td>{{ $mhss->email}}</td>
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
            </div>
          </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('assets')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('assets')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('assets')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('assets')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('assets')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('assets')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('assets')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('assets')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('assets')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('assets')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('assets')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('assets')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('assets')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('assets')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('assets')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('assets')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('assets')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('assets')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('assets')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets')}}/build/js/custom.min.js"></script>
	
    <!-- Datatables -->
    <script src="{{asset('assets')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('assets')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('assets')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/vendors/pdfmake/build/vfs_fonts.js"></script>

  </body>
</html>
