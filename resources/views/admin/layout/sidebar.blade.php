<div class="sidebar" data-color="orange"><!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"    -->
      <div class="logo">
        <a href="{{ url('/admin') }}" class="simple-text logo-mini">
        </a>
        <a href="{{ url('/admin') }}" class="simple-text logo-normal">
          UMT GYM 
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ 'admin'== request()->path() ? 'active' : '' }}">
            <a href="{{ url('/admin') }}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ 'listcustomer'== request()->path() ? 'active' : '' }}">
            <a href="{{ url('/listcustomer') }}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Customers</p>
            </a>
          </li>
          <li class="{{ 'listtrainer'== request()->path() ? 'active' : '' }}">
          <a href="{{ url('/listtrainer') }}">
            <i class="now-ui-icons users_single-02"></i>
              <p>Trainers</p>
            </a>
          </li>
          <li class="{{ 'listcourse'== request()->path() ? 'active' : '' }}">
          <a href="{{ url('/listcourse') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Courses</p>
            </a>
          </li>
          <li class="{{ 'listcontact'== request()->path() ? 'active' : '' }}">
            <a href="{{ url('/listcontact') }}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Feedback</p>
            </a>
          </li>
                    
        </ul>
      </div>
    </div>