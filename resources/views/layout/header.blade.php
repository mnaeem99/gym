<header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="resources/assets/img/umt.png" style="height:40px" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="{{ ''== request()->path() ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ 'about'== request()->path() ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                        <li class="{{ 'classes'== request()->path() ? 'active' : '' }}"><a href="{{ url('/classes') }}">Classes</a></li>
                        <li class="{{ 'trainers'== request()->path() ? 'active' : '' }}"><a href="{{ url('/trainers') }}">Trainers</a></li>
                        <li class="{{ 'blog'== request()->path() ? 'active' : '' }}"><a href="{{ url('/blog') }}">Blog</a></li>
                        <li class="{{ 'contact'== request()->path() ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contacts</a></li>
                    </ul>
                </nav>
                <a href="{{ url('/addCustomer') }}" class="primary-btn signup-btn">Book Now</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    