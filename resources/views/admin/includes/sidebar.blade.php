<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
              <div class="brand-text brand-big visible text-uppercase">
                <strong class="text-danger">
                  <?php
                    $Organization = Session::get('Organization');
                    echo $Organization[0];
                  ?>
              </strong>
            </div>

        </div>

        <ul class="list-unstyled">
                <li class="{{ (request()->is('diagnosis')) ? 'active' : '' }}"><a href="{{route('diagnosis')}}"> <span><i class="fas fa-lungs"></i></span>Diagnosis </a></li>
                <li class="{{ (request()->is('patients')) ? 'active' : '' }}"><a href="{{route('patients')}}"> <span><i class="fas fa-hospital-user"></i></span>Patients </a></li>
        </ul>


      </nav>
