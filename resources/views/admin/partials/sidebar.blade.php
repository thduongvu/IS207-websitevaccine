
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Vaccine Management </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="height: 100vh" >
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block">Tâm</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('vaccines.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-syringe"></i>
                        <p>
                            Vaccines
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('slider.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('immunizer.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Immunizer
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('appointment.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-times"></i>
                        <p>
                            Appointment
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
