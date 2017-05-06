<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="{{# URL::base_path('/admin') }}">
                    NGOAN
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="{{# URL::base_path('/admin/logout'); }}" >Logout <span class="pe-7s-angle-right-circle"></span></a>
                    </li>
                    <li class=" profil-link">
                        <a href="{{# URL::base_path('/admin/profile'); }}">
                            <span class="profile-address">{{# $globals['infoUser']['nickname'] }}</span>
                            <img src="{{# URL::base_path($globals['infoUser']['avatar']); }}" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>