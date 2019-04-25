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
            <li class="{{ request()->is('users') ? ' active ' : '' }} menu-open">
                <a href="{{ url('/users') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ request()->is('users/house-landed-list') ? ' active menu-open' : '' }} {{ request()->is('users/add-house-landing') ? ' active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-home"></i> <span>House Landing</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ request()->is('users/house-landed-list') ? ' active' : '' }}"><a href="{{ url('/users/house-landed-list') }}"><i class="fa fa-circle-o"></i> House Landed List </a></li>
                    <li class="{{ request()->is('users/add-house-landing') ? ' active' : '' }}"><a href="{{ url('users/add-house-landing') }}"><i class="fa fa-circle-o"></i> Add House Landing </a></li>
                </ul>
            </li>

            <li class="menu-open {{ request()->is('users/leads*') ? ' active menu-open' : '' }}">
                <a href="{{ url('/users/leads') }}">
                    <i class="fa fa-line-chart"></i> <span>All Leads</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
