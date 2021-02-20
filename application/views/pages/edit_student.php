<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>CRUD Codeigniter</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../front-end/css/bootstrap.min.css" rel="stylesheet">
	<link href="../front-end/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../front-end/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../front-end/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="../front-end/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php base_url();?>"><span>CRUD</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $this->session->userdata('admin_name');?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="<?php base_url();?>logout"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url();?>dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="<?php echo base_url();?>add-student"><i class="icon-envelope"></i><span class="hidden-tablet"> Add Student</span></a></li>
						<li><a href="<?php echo base_url();?>manage-student"><i class="icon-tasks"></i><span class="hidden-tablet"> Manage Student</span></a></li>
						<li><a href="<?php echo base_url();?>edit-admin"><i class="icon-eye-open"></i><span class="hidden-tablet"> Admin</span></a></li>
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
				<div class="row-fluid">	
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Form</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url();?>update-student" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="studentName">Student Name</label>
								<div class="controls">
									<input type="text" id="studentName" name="student_name" value="<?php echo $update_student->student_name; ?>">
									<input type="hidden" id="studentId" name="student_id" value="<?php echo $update_student->student_id; ?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="studentPhone">Phone Number</label>
								<div class="controls">
									<input type="text" id="studentPhone" name="student_phone" value="<?php echo $update_student->student_phone; ?>" >
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="studentRoll">Student Roll</label>
								<div class="controls">
									<input type="text" id="studentRoll" name="student_roll" value="<?php echo $update_student->student_roll; ?>" >
								</div>
							  </div>
							  <!--<div class="control-group">
								<label class="control-label">File Upload</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>-->
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Update Student</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->

			</div>

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

		</div>
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="../front-end/js/jquery-1.9.1.min.js"></script>
		<script src="../front-end/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="../front-end/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="../front-end/js/jquery.ui.touch-punch.js"></script>
	
		<script src="../front-end/js/modernizr.js"></script>
	
		<script src="../front-end/js/bootstrap.min.js"></script>
	
		<script src="../front-end/js/jquery.cookie.js"></script>
	
		<script src="../front-end/js/fullcalendar.min.js"></script>
	
		<script src="../front-end/js/jquery.dataTables.min.js"></script>

		<script src="../front-end/js/excanvas.js"></script>
	<script src="../front-end/js/jquery.flot.js"></script>
	<script src="../front-end/js/jquery.flot.pie.js"></script>
	<script src="../front-end/js/jquery.flot.stack.js"></script>
	<script src="../front-end/js/jquery.flot.resize.min.js"></script>
	
		<script src="../front-end/js/jquery.chosen.min.js"></script>
	
		<script src="../front-end/js/jquery.uniform.min.js"></script>
		
		<script src="../front-end/js/jquery.cleditor.min.js"></script>
	
		<script src="../front-end/js/jquery.noty.js"></script>
	
		<script src="../front-end/js/jquery.elfinder.min.js"></script>
	
		<script src="../front-end/js/jquery.raty.min.js"></script>
	
		<script src="../front-end/js/jquery.iphone.toggle.js"></script>
	
		<script src="../front-end/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="../front-end/js/jquery.gritter.min.js"></script>
	
		<script src="../front-end/js/jquery.imagesloaded.js"></script>
	
		<script src="../front-end/js/jquery.masonry.min.js"></script>
	
		<script src="../front-end/js/jquery.knob.modified.js"></script>
	
		<script src="../front-end/js/jquery.sparkline.min.js"></script>
	
		<script src="../front-end/js/counter.js"></script>
	
		<script src="../front-end/js/retina.js"></script>

		<script src="../front-end/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
