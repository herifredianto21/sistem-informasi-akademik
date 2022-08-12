
    @include('layouts.header')

    @include('layouts.menu')


        <!-- page content -->
        <div class="container body">
          <div class="main_container">
              
              @include('layouts.navbar')

              @yield('content')

          </div>
        </div>
        <!-- /page content -->

  @include('layouts.footer')