<!DOCTYPE html>
<html>
	<!-- HTML HEAD -->
	<?php 
		include('includes/head.php');
	?>
	<!-- /HTML HEAD -->
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		<!-- Top NavBar -->
			<?php include('includes/top-nav.php'); ?>
		<!-- Top NavBar -->

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- sidebar-left -->
		<?php include('includes/sidebar.php'); ?>
		<!-- /sidebar-left -->
		
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Third Party Plugins</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="javascript:;">Documentation</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Third Party Plugins
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										Menu
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="introduction.html"
											>Introduction</a
										>
										<a class="dropdown-item" href="getting-started.html"
											>Getting Started</a
										>
										<a class="dropdown-item" href="color-settings.html"
											>Color Settings</a
										>
										<a
											class="dropdown-item active"
											href="third-party-plugins.html"
											>Third Party Plugins</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Third Party Plugins</h4>
							<p class="mb-0">
								We have used some third party plugins which are has include:
							</p>
						</div>
						<div class="pb-20">
							<table class="data-table table nowrap">
								<thead>
									<tr>
										<th class="table-plus">Plugins Name</th>
										<th class="datatable-nosort">More Details</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>air-datepicker</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="http://t1m0n.name/air-datepicker/docs/"
												>http://t1m0n.name/air-datepicker/docs/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>apexcharts</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://apexcharts.com/"
												>https://apexcharts.com/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>bootstrap</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://getbootstrap.com/"
												>https://getbootstrap.com/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>bootstrap select</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://developer.snapappointments.com/bootstrap-select/"
												>https://developer.snapappointments.com/bootstrap-select/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>bootstrap-tagsinput</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/"
												>https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>Bootstrap TouchSpin</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://www.virtuosoft.eu/code/bootstrap-touchspin/"
												>https://www.virtuosoft.eu/code/bootstrap-touchspin/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>bootstrap-wysihtml5</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://jhollingworth.github.io/bootstrap-wysihtml5/"
												>https://jhollingworth.github.io/bootstrap-wysihtml5/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>cropperjs</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://fengyuanchen.github.io/cropperjs/"
												>https://fengyuanchen.github.io/cropperjs/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>datatables</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://datatables.net/"
												>https://datatables.net/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>dropzonejs</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://www.dropzonejs.com/"
												>https://www.dropzonejs.com/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge">fancybox</span>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="http://fancyapps.com/fancybox/"
												>http://fancyapps.com/fancybox/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>fullcalendar</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://fullcalendar.io/"
												>https://fullcalendar.io/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>Highcharts JS</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://www.highcharts.com/"
												>https://www.highcharts.com/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>highlightjs</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://highlightjs.org/"
												>https://highlightjs.org/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>Ion.RangeSlider</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="http://ionden.com/a/plugins/ion.rangeSlider/index.html"
												>http://ionden.com/a/plugins/ion.rangeSlider/index.html</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>jquery-asColor</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://github.com/thecreation/jquery-asColor"
												>https://github.com/thecreation/jquery-asColor</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>jquery-asColorPicker</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://github.com/thecreation/jquery-asColorPicker"
												>https://github.com/thecreation/jquery-asColorPicker</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>jquery-asGradient</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://github.com/thecreation/jquery-asGradient"
												>https://github.com/thecreation/jquery-asGradient</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>jQuery Knob</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="http://anthonyterrien.com/knob/"
												>http://anthonyterrien.com/knob/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>jquery-steps</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="http://www.jquery-steps.com"
												>http://www.jquery-steps.com</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>jVectorMap</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://jvectormap.com/"
												>https://jvectormap.com/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>malihu jquery custom scrollbar</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="http://manos.malihu.gr/jquery-custom-content-scroller/"
												>http://manos.malihu.gr/jquery-custom-content-scroller/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge">plyr</span>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://plyr.io/"
												>https://plyr.io/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge">select2</span>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://select2.github.io"
												>https://select2.github.io</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge">slick</span>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://kenwheeler.github.io/slick/"
												>https://kenwheeler.github.io/slick/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>sweetalert2</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://sweetalert2.github.io/"
												>https://sweetalert2.github.io/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>switchery</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://abpetkov.github.io/switchery/"
												>https://abpetkov.github.io/switchery/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>timedropper</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://felicegattuso.com/projects/timedropper/"
												>https://felicegattuso.com/projects/timedropper/</a
											>
										</td>
									</tr>
									<tr>
										<td class="table-plus">
											<span class="badge badge-pill table-badge"
												>wysihtml5</span
											>
										</td>
										<td>
											<a
												target="_blank"
												class="text-blue"
												href="https://github.com/xing/wysihtml5"
												>https://github.com/xing/wysihtml5</a
											>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="vendors/scripts/datatable-setting.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
