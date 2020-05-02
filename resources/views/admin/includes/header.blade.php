<header class="header">
      <nav class="navbar navbar-expand-lg">

        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="{{route('diagnosis')}}" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong><img style="height: 30px;width: 160px;" src="{{asset('admin/img/logo5.png')}}" ></strong></div>
              <div class="brand-text brand-sm"><strong class="text-danger"><img style="height: 30px;" src="{{asset('admin/img/logoadmin.png')}}" ></strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
            <!-- Log out               -->
            <div class="list-inline-item logout">
              <a id="logout" href="{{ url('logout') }}" class="nav-link">Logout <i class="icon-logout"></i></a>

           </div>
          </div>
        </div>
      </nav>
    </header>
