
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
                            <img src="{{asset('assets')}}/images/img.jpg" alt="">{{ Auth::user()->name;}}
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
                          <h2>Welcome to SIAkademik<small>!</small></h2>
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
                            .....
                          </p>
                          
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

  @include('layouts.footer')