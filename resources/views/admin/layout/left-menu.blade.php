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

        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ request()->is('master-data/*') ? 'active show-sub' : '' }} ">
                <i class="menu-item-icon fas fa-car"></i>
                <span class="menu-item-label">Master Data</span>
            </a>
            <ul class="br-menu-sub">
                <li class="sub-item">
                    <a href="{{ URL::to('/master-data/region/manage') }}" class="sub-link">Manage Region</a>
                </li>

                <li class="sub-item">
                    <a href="{{ URL::to('/master-data/form/manage') }}" class="sub-link">Manage Form</a>
                </li>
            </ul>
        </li>



    </ul>

    <br>
</div>
<!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
