<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admin/img/plus.png')}}" alt="..." class="img-fluid rounded-circle"></div>

        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="{{ (request()->is('diagnosis')) ? 'active' : '' }}"><a href="{{route('diagnosis')}}"> <i class="icon-padnote"></i>Diagnosis </a></li>
                <li class="{{ (request()->is('patients')) ? 'active' : '' }}"><a href="{{route('patients')}}"> <i class="icon-grid"></i>Patients </a></li>
        </ul>


      </nav>
