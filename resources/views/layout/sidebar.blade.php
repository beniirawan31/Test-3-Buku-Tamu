<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('logo/logo.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Beni</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('dashboard')}}">
                    <span>Dashboard</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green"></small>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('tamu') }}">Tamu</a>
                <span>Tamu</span>
                <span class="pull-right-container">
                    <small class="label pull-right bg-green"></small>
                </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('setting') }}">Manage Settings</a></li>
                    <!-- Add more options here if needed -->
                    <!-- Example: -->
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contac') }}">Contact</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
