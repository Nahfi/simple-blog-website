
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Doccure - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/admin/assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/admin/css/all.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="/admin/assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="/admin/assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="/admin/assets/css/style.css">
		
	>
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">

		
	
				<!-- Logo -->
                <div class="header-left">
                    <a href="{{ route('admin') }}" class="logo">
						<img src="/admin/assets/img/logo.png" alt="Logo">
					</a>
					<a href="{{ route('admin') }}" class="logo logo-small">
						<img src="/admin/assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
			
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

				
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="/admin/assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="/admin/assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>{{ Auth::user()->name }}</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a>
						
							<a id="log" class="dropdown-item" href="">Logout</a>
						</div>
					</li>

					<form id="frm" action="{{ route('logout') }}" method="post">
					  @csrf
					
					</form>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>

 @php
	 
	 $data=json_decode(auth()->user()->Roles->permission);
 @endphp

						 

							@if((in_array('super admin',$data)) && (in_array('post',$data)) && (in_array('user',$data)))
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{ route('admin') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							
						
						
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> post</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									
									<li class=""> 
										<a href="{{ route('post_view') }}"><i class="fe fe-home"></i> <span>all post</span></a>
									</li>
									<li class=""> 
										<a href="{{ route('tag_index') }}"><i class="fe fe-home"></i> <span>tag</span></a>
									</li>

									<li class=""> 
										<a href="{{ route('cat_view') }}"><i class="fe fe-home"></i> <span>Catagories</span></a>
									</li>

								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span>all user</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									
									<li class=""> 
										<a href="{{ route('user.index') }}"><i class="fe fe-home"></i> <span>Create User</span></a>
									</li>
									<li class=""> 
										<a href="{{ route('role_show') }}"><i class="fe fe-home"></i> <span>Role</span></a>
									</li>

									

								</ul>
							</li>
						
							<li> 
								<a href="appointment-list.html"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							@elseif ((in_array('post',$data)))
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> post</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									
									<li class=""> 
										<a href="index.html"><i class="fe fe-home"></i> <span>all post</span></a>
									</li>
									<li class=""> 
										<a href="index.html"><i class="fe fe-home"></i> <span>tag</span></a>
									</li>

									<li class=""> 
										<a href="index.html"><i class="fe fe-home"></i> <span>Catagories</span></a>
									</li>

								</ul>
							</li>
							@endif
							
							
						
						
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome {{ Auth::user()->name }}</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>




                  @yield('dash')











				
		<!-- jQuery -->
        <script src="/admin/assets/js/jquery-3.2.1.min.js"></script>
	 
 
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/admin/assets/js/popper.min.js"></script>
        <script src="/admin/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="/admin/assets/plugins/raphael/raphael.min.js"></script>    
		<script src="/admin/assets/plugins/morris/morris.min.js"></script>  
		<script src="/admin/assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="/admin/assets/js/script.js"></script>
		<script  src="/admin/assets/js/cat.js"></script>
		<script  src="/admin/assets/js/tag.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>