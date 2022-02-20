<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">

        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">

                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span
                                class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="{{route('switchLan', 'en')}}"><i
                                    class="flag-icon flag-icon-gb"></i> English</a>
                            <a class="dropdown-item" href="{{route('switchLan', 'ar')}}"><i
                                    class="flag-icon flag-icon-fr"></i> العربيه</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
