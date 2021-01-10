<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Solution Integration admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Solution Integration" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/fevicon.png"> -->

        <!-- C3 Chart css -->
        <link href="assets/libs/c3.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/taqa.css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
		  <link rel='stylesheet' href='assets/css/fullcalendar.min.css'>
		  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    
		  
    </head>

    <body>
<div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
<li class="dropdown notification-list"><a href="#" class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" ><i class="fa fa-futbol" aria-hidden="true"></i></a></li>
                    <li class="dropdown notification-list"><a href="#" class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" ><i class="fa fa-comments"></i></a></li>

                    <li class="dropdown notification-list">
					<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<i class="fa fa-bell" aria-hidden="true"></i>
                            <span class="count-noti">10</span>
                        </a>
                       
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow m-0"><span class="float-right">
                                    <span class="badge badge-danger float-right">5</span>
                                    </span>Notification</h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-settings-outline"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="text-muted">There are new settings available</small>
                                    </p>
                                </a>
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-bell-outline"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="text-muted">There are 2 new updates available</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user
                                        <small class="text-muted">You have 10 unread messages</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>
					<li><span class="seprect"></span></li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<span class="pro-user-name ml-1">
                                Admin  <i class="mdi mdi-chevron-down"></i> 
                            </span>
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<a href="change-password.php" class="dropdown-item notify-item">
                                <i class="fas fa-lock"></i>
                                <span>Change Password</span>
                            </a>
                            <a href="index.php" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>
							
							 

                        </div>
                    </li>

                    


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="dashboard.php" class="logo text-center">
                        <span class="logo-lg"><img src="assets/images/logo.png" alt="">
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="assets/images/logo.png" alt="" height="28">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <!--<li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>-->
					<li>25-09-2020 14:20 Welcome</li>

                  
                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="shadow1">

                        <ul class="metismenu" id="side-menu">

                            

                            <li>
                                <a href="dashboard.php">
                                    <i class="fe-airplay"></i>
                                   
                                    <span> Dashboard </span>
                                </a>
                                
                            </li>
							 <li>
                                <a href="stream.php">
                                   <i class="fas fa-th"></i>
                                   
                                    <span> Stream </span>
                                </a>
                                
                            </li>
                              <li>
                                <a href="javascript: void(0);">
                                   <i class="fas fa-chart-bar"></i>
                                    <span>Analytics</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    
                                    
                <li><a href="javascript: void(0);"><i class="far fa-dot-circle"></i> Social media analytics <span class="menu-arrow"></span></a>
				<ul class="nav-third-level">
				<li><a href="twitter.php"><i class="fab fa-twitter"></i> Twitter analytics</a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i> Facebook analytics</a></li>
				<li><a href="#"><i class="fab fa-youtube"></i> Youtube analytics</a></li>
				<li><a href="#"><i class="fab fa-instagram"></i> Instagram analytics</a></li>
				<li><a href="#"><i class="far fa-play-circle"></i> Tiktok analytics</a></li>
				<li><a href="#"><i class="fab fa-snapchat-ghost"></i> Snapchat analytics</a></li>
				</ul>
				
				</li>
               
				 
				
				<li><a href="#"><i class="far fa-dot-circle"></i> Website google analytics</a></li>
				<li><a href="sentiment-analysis.php"><i class="far fa-dot-circle"></i> Sentiment Analysis</a></li>
				<li><a href="#"><i class="far fa-dot-circle"></i> Newspaper analytics</a></li>
                
                                       
                                </ul>
                            </li>
                          
                             
                            <li><a href="javascript: void(0);"><i class="fas fa-mobile-alt"></i>Cost Estimation<span class="menu-arrow"></span></a>
							<ul class="nav-second-level nav">
							<li><a href="cost-estimation.php"><i class="far fa-dot-circle"></i> Cost Calculator</a></li>
							<li><a href="cost-estimation-setting.php"><i class="far fa-dot-circle"></i> Cost Estimation Setting</a></li>
							</ul>
							
							</li>
                            <li><a href="search-engine.php"><i class="fas fa-search"></i><span>Search Engine</span></a></li>
                            <li><a href="#"><i class="fas fa-flag"></i><span>Reports</span></a></li>
                            <!--<li><a href="#"><i class="fas fa-tasks"></i><span>Management Tools</span></a></li>-->
							
							 <li><a href="javascript: void(0);"><i class="fas fa-users"></i>Teams<span class="menu-arrow"></span></a>
							<ul class="nav-second-level nav">
							<li><a href="get-started.php"><i class="far fa-dot-circle"></i> Get Started</a></li>
							<li><a href="employee.php"><i class="far fa-dot-circle"></i> Employee</a></li>
							</ul>
							
							</li>
							
							
							<li><a href="javascript: void(0);"><i class="fas fa-file-alt"></i>Task Management<span class="menu-arrow"></span></a>
							<ul class="nav-second-level nav">
							<li><a href="project.php"><i class="far fa-dot-circle"></i> Manage Projects</a></li>
							<li><a href="manage-task.php"><i class="far fa-dot-circle"></i> Manage Task</a></li>
							<li><a href="manage-calendar.php"><i class="far fa-dot-circle"></i> Manage Calendar</a></li>
							</ul>
							
							</li>
							
							
							<li><a href="javascript: void(0);"><i class="fas fa-cog"></i>Settings<span class="menu-arrow"></span></a>
							<ul class="nav-second-level nav">
							<li><a href="manage-accounts.php"><i class="far fa-dot-circle"></i> Manage Accounts</a></li>
							
							<li><a href="role-permissions.php"><i class="far fa-dot-circle"></i> Roles & Permissions</a></li>
							<li><a href="change-password.php"><i class="fas fa-lock"></i>Change Password</a></li>
							
							</ul>
							
							</li>
							
                            
                            
                           
                            
                            
                           
                 

                            
                            
                
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== --> <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                   <!--  <div class="container-fluid"> -->
                        
                        <!-- start page title -->
                            
           
