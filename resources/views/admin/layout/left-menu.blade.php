  <!-- ########## START: LEFT PANEL ########## -->



  <div class="br-logo">
    <a href="{{ URL::to('/') }}">
        <span>[</span>Stock
        <i>Admin</i>
        <span>]</span></a>
</div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ URL::to('/') }}" class="br-menu-link  {{ request()->is('/') ? 'active show-sub' : '' }}">
                <i class="fas fa-home"></i>
                <span class="menu-item-label">Dashboard</span>
            </a>

        </li>



        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ request()->is('category/*') ? 'active show-sub' : '' }} ">
                <i class="menu-item-icon fas fa-map"></i>
                <span class="menu-item-label">Category</span>
            </a>

            <ul class="br-menu-sub">
                <li class="sub-item">
                    <a href="{{ URL::to('/category/manage') }}" class="sub-link">Manage Category</a>
                </li>
                <li class="sub-item">
                    <a href="{{ URL::to('/category/sub-category/manage') }}" class="sub-link">Manage Sub Category</a>
                </li>
            </ul>
        </li>



        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ request()->is('master-data/*') ? 'active show-sub' : '' }} ">
                <i class="menu-item-icon fas fa-car"></i>
                <span class="menu-item-label">Master Data</span>
            </a>
            <ul class="br-menu-sub">
                <li class="sub-item">
                    <a href="{{ URL::to('/master-data/region/manage') }}" class="sub-link">Manage Region</a>
                </li>
            </ul>
        </li>


        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ request()->is('employee/*') ? 'active show-sub' : '' }} ">
                <i class="menu-item-icon fas fa-user"></i>
                <span class="menu-item-label">Employee</span>
            </a>
            <ul class="br-menu-sub">
                <li class="sub-item">
                    <a href="{{ URL::to('/employee/manage') }}" class="sub-link">Manage Employee</a>
                </li>
            </ul>
        </li>

        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ request()->is('product/*') ? 'active show-sub' : '' }} ">
                <i class="menu-item-icon fas fa-building"></i>
                <span class="menu-item-label">Product</span>
            </a>
            <ul class="br-menu-sub">
                <li class="sub-item">
                    <a href="{{ URL::to('/product/create') }}" class="sub-link">Add Product</a>
                </li>
                <li class="sub-item">
                    <a href="{{ URL::to('/product/manage') }}" class="sub-link">Manage Product</a>
                </li>
            </ul>
        </li>


        {{-- @if (auth()->user()->can('Zone Management'))
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub {{ request()->is('admin/zone/*') ? 'active show-sub' : '' }} ">
                    <i class="menu-item-icon fas fa-map"></i>
                    <span class="menu-item-label">Zone</span>
                </a>

                <ul class="br-menu-sub">
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/zone/add') }}" class="sub-link">Add New Zone</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/zone/manage') }}" class="sub-link">Zone Manage</a>
                    </li>
                </ul>
            </li>
        @endif

        @if (auth()->user()->can('Park Management') || auth()->user()->can('Enforcement Management'))
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub {{ request()->is('admin/parking/*') ? 'active show-sub' : '' }}">
                    <i class="fas fa-car"></i>
                    <span class="menu-item-label">Park</span>
                </a>

                <ul class="br-menu-sub">
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/upcoming') }}" class="sub-link">Upcoming Parking</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/running') }}" class="sub-link">On Going Parking</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/history') }}" class="sub-link">Park History</a>
                    </li>
                <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/booking') }}" class="sub-link">Park Booking</a>
                    </li>
                <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/guest-request') }}" class="sub-link">Guest Request</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/guest-ongoing') }}" class="sub-link">Guest Ongoing</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/guest-payment') }}" class="sub-link">Guest Payments</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/parking/guest-history') }}" class="sub-link">Guest History</a>
                    </li>
                    @if (auth()->user()->can('Park Management'))
                        <li class="sub-item">
                            <a href="{{ URL::to('/admin/parking/owners') }}" class="sub-link">Parking Owners</a>
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if (auth()->user()->can('Property Management'))

            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub {{ request()->is('admin/property/*') ? 'active show-sub' : '' }}">
                    <i class="far fa-building"></i>
                    <span class="menu-item-label">Property</span>
                </a>

                <ul class="br-menu-sub">
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/property/create') }}" class="sub-link">Add New Property</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/property/manage') }}" class="sub-link">Manage Property</a>
                    </li>
                </ul>
            </li>
        @endif

        @if (auth()->user()->can('Owner Management'))

            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub {{ request()->is('admin/property/*') ? 'active show-sub' : '' }}">
                    <i class="far fa-building"></i>
                    <span class="menu-item-label">Property</span>
                </a>

                <ul class="br-menu-sub">
                    <li class="sub-item">
                        <a href="{{ URL::to('/admin/owner-property/manage') }}" class="sub-link">Manage Property</a>
                    </li>
                </ul>
            </li>
        @endif


        @if (auth()->user()->can('Report Management'))

            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub {{ request()->is('admin/report/*') ? 'active show-sub' : '' }}">
                    <i class="far fa-address-book"></i>
                    <span class="menu-item-label">Report</span>
                </a>

                <ul class="br-menu-sub" style="">
                    <li class="sub-item"><a href="{{ URL::to('/admin/report/transaction') }}" class="sub-link ">Transaction</a></li>
                </ul>
            </li>
        @endif



        @if (auth()->user()->can('User Management'))
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub {{ request()->is('admin/user-role/*') ? 'active show-sub' : '' }}">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span class="menu-item-label">Staff Users & Roll</span>
                </a>
                <ul class="br-menu-sub" style="">
                    <li class="sub-item"><a href="{{ URL::to('/admin/user-role/user') }}" class="sub-link ">Staff Users</a></li>
                    <li class="sub-item"><a href="{{ URL::to('/admin/user-role/enforcement') }}" class="sub-link ">Enforcement</a></li>
                    <li class="sub-item"><a href="{{ URL::to('/admin/user-role/role') }}" class="sub-link">Role</a></li>
                </ul>
            </li>
        @endif --}}


    </ul>

    <br>
</div>
<!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
