<!-- header start -->
<header>
    <nav class="navbar navbar-expand">
        <ul class="nav navbar-nav">
            <li><a href="#" class="nav-link sidebarCollapse" id=""><i class="fas fa-bars"></i></a></li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active"> <a class="nav-link" href="#"><i class="fas fa-calculator"></i></a> </li>
            <li class="nav-item">
                <div class="dropdown show"> <a class="nav-link" href="#" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-bell"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-notifications" aria-labelledby="dropdownNotification">
                        <div class="dropdown-header">
                            <h6 class="text-medium text-white">10 New</h6>
                            <div>User Nofitications</div>
                        </div>
                        <div class="dropdown-content"> <a class="dropdown-item" href="#">
                                <h6><i class="fas fa-user"></i>12 new users registered<span>2 mins ago</span></h6>
                            </a> <a class="dropdown-item" href="#">
                                <h6><i class="fas fa-envelope"></i>Mark doe send you a new message<span>4 mins ago</span></h6>
                            </a> <a class="dropdown-item" href="#">
                                <h6><i class="fas fa-file-invoice"></i>New invoice received<span>10 mins ago</span></h6>
                            </a> <a class="dropdown-item" href="#">
                                <h6><i class="fas fa-users"></i>12 new users registered<span>2 mins ago</span></h6>
                            </a> <a class="dropdown-item" href="#">
                                <h6><i class="fas fa-envelope"></i>Mark doe send you a new message<span>4 mins ago</span></h6>
                            </a> <a class="dropdown-item" href="#">
                                <h6><i class="fas fa-file-invoice"></i>New invoice received<span>10 mins ago</span></h6>
                            </a> </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown show"> <a class="nav-link" href="#" role="button" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="imgs/img-profile.jpg"> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-profile" aria-labelledby="dropdownProfile">
                        <div class="dropdown-header d-flex">
                            <div class="img-profile"><img src="imgs/img-profile.jpg"></div>
                            <div>
                                <h6 class="text-medium text-white">John Doe</h6>
                                <div>johndoe123@gmail.com</div>
                            </div>
                        </div>
                        <div class="dropdown-content"> <a class="dropdown-item" href="#"><i class="fas fa-user"></i>My profile</a> <a class="dropdown-item" href="#"><i class="fas fa-shopping-cart"></i>My orders</a> <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i>Messages</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a> </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <div class="page-title">
        <h3><?php echo $title ?></h3>
        <h6>Welcome <?php echo $user ?>!</h6>
    </div>
</header>
<!-- header end --> 