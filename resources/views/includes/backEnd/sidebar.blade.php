<div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
        <a href="{{ route("dashboard") }}" title="Sleek Dashboard">
            <svg
                class="brand-icon"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid"
                width="30"
                height="33"
                viewBox="0 0 30 33">
                <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                </g>
            </svg>

            <span class="brand-name text-truncate text-uppercase">Media Plastik</span>
        </a>
    </div>

    <!-- begin sidebar scrollbar -->
    <div class="" data-simplebar style="height: 100%;">
        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="has-sub expand {{ (request()->is('admin/dashboard*') || request()->is('admin/dashboard*')) ? 'active':''  }}">
                <a class="sidenav-item-link text-capitalize" href="{{ route("dashboard") }}" >
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="has-sub expand {{ (request()->is('admin/categoryProduct*') || request()->is('admin/categoryProduct*')) ? 'active':''  }}">
                <a class="sidenav-item-link text-capitalize" href="{{ route("categoryProduct.index") }}" >
                    <i class="mdi mdi-math-norm-box"></i>
                    <span class="nav-text">Kategori</span>
                </a>
            </li>
            <li class="has-sub expand {{ (request()->is('admin/product*') || request()->is('admin/product*')) ? 'active':''  }}">
                <a class="sidenav-item-link text-capitalize" href="{{ route("product.index") }}" >
                    <i class="mdi mdi-shopping"></i>
                    <span class="nav-text">Product</span>
                </a>
            </li>
            <li class="has-sub expand {{ (request()->is('admin/galleriProduct*') || request()->is('admin/galleriProduct*')) ? 'active':''  }}">
                <a class="sidenav-item-link text-capitalize" href="{{ route("galleriProduct.index") }}" >
                    <i class="mdi mdi-camera-burst"></i>
                    <span class="nav-text">Product Galleri</span>
                </a>
            </li>
            <li class="has-sub expand {{ (request()->is('admin/transaction*') || request()->is('admin/transaction*')) ? 'active':''  }}">
                <a class="sidenav-item-link text-capitalize" href="{{ route("transaction.index") }}" >
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Order</span>
                </a>
            </li>
            <li class="has-sub expand {{ (request()->is('admin/customer*') || request()->is('admin/customer*')) ? 'active':''  }}">
                <a class="sidenav-item-link text-capitalize" href="{{ route("customer.index") }}" >
                    <i class="mdi mdi-account-group-outline"></i>
                    <span class="nav-text">Customer</span>
                </a>
            </li>
            <li class="has-sub expand {{ (request()->is('admin/admin*') || request()->is('admin/admin*')) ? 'active':''  }}">
                <a class="sidenav-item-link text-capitalize" href="{{ route("admin.index") }}" >
                    <i class="mdi mdi-account"></i>
                    <span class="nav-text">Admin</span>
                </a>
            </li>
            <li class="has-sub expand">
                <a class="sidenav-item-link text-capitalize" href="index copy.html" >
                    <i class="mdi mdi-settings"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>
