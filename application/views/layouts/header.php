<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="#">

	<title>Aplikasi Water Meter</title>

	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	<!-- Datepicker -->
	<link rel="stylesheet" href="<?=base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'); ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		       folder instead of downloading all of them to reduce the load. -->
	<!-- Style.css -->
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css'); ?>">

	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/t/d/css/dataTables.bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/row/css/rowReorder.dataTables.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/responsive/css/responsive.dataTables.min.css'); ?>">

	<link rel="stylesheet" href="<?=base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>ADM</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>ADMINISTRATOR</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
								<img class="user-image" src="<?=base_url('assets/img/admin.png'); ?>">
								<span class="hidden-xs">Administrator</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img class="img-cirlce" src="<?=base_url('assets/img/admin.png'); ?>">
									<p>
										Administrator
									</p>
								</li>

								<li class="user-footer">
									<div class="pull-right">
										<!-- <a class="btn btn-danger" href="#">
											<span class="glyphicon glyphicon-log-out"></span>
											Logout
										</a> -->
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?=base_url('assets/img/admin.png'); ?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Admin</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li class="treeview">
					<li><a href="<?=base_url('Dashboard'); ?>">
							<i class="fa fa-users"></i> <span>Data Pelanggan</span>
						</a></li>
					</li>
					<li class="treeview">
					<li><a href="<?=base_url('Dashboard/master_water'); ?>">
							<i class="fa fa-table"></i> <span>Data Water</span>
						</a></li>
                    </li>
				</ul>
			</section>
			<!-- /.sidebar -->
        </aside>