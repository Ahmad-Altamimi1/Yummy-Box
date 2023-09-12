

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3" style="background-color: rgba(99, 190, 148, 0.34)">
            <nav class="navbar " style="background-color: rgba(117, 192, 157, 0)">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TechHub</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('Admin_Dashboard.Admins_Data')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                  
                        <a href="{{route('Admin_Dashboard.Admins_Data')}}" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Admins</a>
                  
                    <a href="{{route('Admin_Dashboard.User')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Users</a>
                    <a href="{{route('Admin_Dashboard.Projects')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Projects</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Volunteers</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Donation</a>
                    <a href="#" class="nav-item nav-link " ><i class="far fa-file-alt me-2"></i>Ressourses</a>
                     
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

      