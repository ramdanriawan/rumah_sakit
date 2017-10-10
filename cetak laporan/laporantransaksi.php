<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SISFO RADIOLOGI</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="http://localhost/puskes/system/application/views/admin/css/bootstrap.min.css" rel="stylesheet">
    
		<!-- TinyMCE -->
		<script type="text/javascript" src="http://localhost/puskes/jscripts/tiny_mce/tiny_mce_src.js"></script>
		<script type="text/javascript">
		tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "http://localhost/puskes/system/application/views/themes/css/BrightSide.css",

		// Drop lists for link/image/media/template dialogs
		//"http://localhost/puskes/media/lists/image_list.js"
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "http://localhost/puskes/index.php/",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>	<link href="http://localhost/puskes/system/application/views/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="http://localhost/puskes/system/application/views/admin/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="http://localhost/puskes/system/application/views/admin/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<script src="http://localhost/puskes/assets/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/puskes/assets/jquery.chained.min.js"></script>
  
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
	<link rel="shortcut icon" href="http://localhost/puskes/system/application/views/admin/img/favicon.ico">
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
				<a class="brand" href="index.html"><span>SISFO PUSKESMAS PERINGATAN DINI</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span>
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>Ardiansyah								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="http://localhost/puskes/index.php/web/logout"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="http://localhost/puskes/index.php/admin">
                        <i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="http://localhost/puskes/index.php/admin/katobat">
                        <i class="icon-list"></i><span class="hidden-tablet"> Kategori Obat</span></a></li>
                        <li><a href="http://localhost/puskes/index.php/admin/cekobat">
                        <i class="icon-eye-open"></i><span class="hidden-tablet"> Stok Obat</span></a></li>
						<li><a href="http://localhost/puskes/index.php/admin/transaksi">
                        <i class="icon-eye-open"></i><span class="hidden-tablet"> Transaksi Obat</span></a></li>
                        <li><a href="http://localhost/puskes/index.php/admin/transaksiobat">
                        <i class="icon-list"></i><span class="hidden-tablet"> Data Transaksi Obat</span></a></li>
						<li><a href="http://localhost/puskes/index.php/admin/akses">
                        <i class="icon-group"></i><span class="hidden-tablet"> Data User</span></a></li>
                        <li><a href="http://localhost/puskes/index.php/admin/laporan">
                        <i class="icon-file-alt"></i><span class="hidden-tablet"> Laporan</span></a></li>
                        <li><a href="http://localhost/puskes/index.php/admin/laporantransaksi">
                        <i class="icon-file-alt"></i><span class="hidden-tablet"> Laporan Transaksi</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->    	<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
                	<i class="icon-edit"></i>
                <a href="http://localhost/puskes/index.php/admin/tambahobat">Form Transaksi Data</a></li>
			</ul>
	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon list"></i><span class="break"></span>Form Cetak Laporan</h2>
						<div class="box-icon">
						</div>
					</div>
                    <form action="http://localhost/puskes/index.php/admin/pdf_data" method="post" enctype="multipart/form-data">					<div class="box-content">
						<div class="form-horizontal">

						  <fieldset>
							<div class="control-group">
							   <label class="control-label" for="typeahead">Jml Obat</label>
							   <div class="controls">
							   <input type="text" class="input-xlarge datepicker" id="date01" name="tgl_awal">
								</div>
							   </div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tanggal Edit</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date02" name="tgl_akhir">
								</div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Cetak Data</button>
							</div>
						  </fieldset>
						</div>

					</div>
				</div><!--/span-->
			</div><!--/row-->


                 	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

            	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">X</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div><div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2015 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Founder & Laksa Desa</a>  || Anda berkunjung dengan IP Address ::1</span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery-1.9.1.min.js"></script>
	<script src="http://localhost/puskes/system/application/views/admin/js/jquery-migrate-1.0.0.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.ui.touch-punch.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/modernizr.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/bootstrap.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.cookie.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/fullcalendar.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.dataTables.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/excanvas.js"></script>
	<script src="http://localhost/puskes/system/application/views/admin/js/jquery.flot.js"></script>
	<script src="http://localhost/puskes/system/application/views/admin/js/jquery.flot.pie.js"></script>
	<script src="http://localhost/puskes/system/application/views/admin/js/jquery.flot.stack.js"></script>
	<script src="http://localhost/puskes/system/application/views/admin/js/jquery.flot.resize.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.chosen.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.uniform.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.cleditor.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.noty.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.elfinder.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.raty.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.iphone.toggle.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.uploadify-3.1.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.gritter.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.imagesloaded.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.masonry.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.knob.modified.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/jquery.sparkline.min.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/counter.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/retina.js"></script>

		<script src="http://localhost/puskes/system/application/views/admin/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
