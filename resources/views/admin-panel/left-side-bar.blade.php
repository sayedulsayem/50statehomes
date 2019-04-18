<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(Session::get('image')) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Session::get('name') }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>{{ Session::get('status') }}</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ request()->is('admin') ? ' active ' : '' }} menu-open">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ request()->is('admin/admin-list') ? ' active menu-open' : '' }} {{ request()->is('admin/add-admin') ? ' active menu-open' : '' }} {{ request()->is('admin/admin-request-list') ? ' active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-user-secret"></i> <span>Admins</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('admin/admin-list') ? ' active' : '' }}"><a href="{{ url('/admin/admin-list') }}"><i class="fa fa-circle-o"></i> Admin List </a></li>
                    <li class="{{ request()->is('admin/add-admin') ? ' active' : '' }}"><a href="{{ url('/admin/add-admin') }}"><i class="fa fa-circle-o"></i> Add Admin </a></li>
                    <li class="{{ request()->is('admin/admin-request-list') ? ' active' : '' }}"><a href="{{ url('/admin/admin-request-list') }}"><i class="fa fa-circle-o"></i> Admin Request </a></li>
                </ul>
            </li>

{{--            <li class="treeview {{ request()->is('admin/user-list') ? ' active menu-open' : '' }} {{ request()->is('admin/add-user') ? ' active menu-open' : '' }}">--}}
{{--                <a href="#">--}}
{{--                    <i class="fa fa-users"></i> <span>Users</span>--}}
{{--                    <span class="pull-right-container">--}}
{{--              <i class="fa fa-angle-left pull-right"></i>--}}
{{--            </span>--}}
{{--                </a>--}}
{{--                <ul class="treeview-menu">--}}
{{--                    <li class="{{ request()->is('admin/user-list') ? ' active' : '' }}"><a href="{{ url('/admin/user-list') }}"><i class="fa fa-circle-o"></i> User List </a></li>--}}
{{--                    <li class="{{ request()->is('admin/add-user') ? ' active' : '' }}"><a href="{{ url('/admin/add-user') }}"><i class="fa fa-circle-o"></i> Add User </a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="treeview {{ request()->is('admin/house-landed-list') ? ' active menu-open' : '' }} {{ request()->is('admin/add-house-landing') ? ' active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-home"></i> <span>House Landing</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('admin/house-landed-list') ? ' active' : '' }}"><a href="{{ url('/admin/house-landed-list') }}"><i class="fa fa-circle-o"></i> House Landed List </a></li>
                    <li class="{{ request()->is('admin/add-house-landing') ? ' active' : '' }}"><a href="{{ url('admin/add-house-landing') }}"><i class="fa fa-circle-o"></i> Add House Landing </a></li>
                </ul>
            </li>

            <li class="menu-open {{ request()->is('admin/leads*') ? ' active menu-open' : '' }}">
                <a href="{{ url('/admin/leads') }}">
                    <i class="fa fa-line-chart"></i> <span>All Leads</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
