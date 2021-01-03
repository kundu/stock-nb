<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down">
            <a id="btnLeftMenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="navicon-left hidden-lg-up">
            <a id="btnLeftMenuMobile" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        {{-- <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </span>
            </div> --}}
            <!-- input-group -->
        </div>
        <!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">

                <div class="dropdown">
                    <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">Profile</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-header wd-250">
                            <div class="tx-center">
                                <a href="#">
                                    <h6 class="logged-fullname">{{ auth()->user()->name }}</h6>
                                    {{-- <p>youremail@domain.com</p> --}}
                                    <a href="{{ URL::to('/logout') }}">
                                        Sign Out</a>
                                </div>
                                    </div>
                                    <!-- dropdown-menu -->
                                </div>
                                <!-- dropdown -->
                            </nav>
                        </div>
                        <!-- br-header-right -->
                    </div>
                    <!-- br-header -->
                    <!-- ########## END: HEAD PANEL ########## -->

                    <!-- ########## END: RIGHT PANEL ########## --->
