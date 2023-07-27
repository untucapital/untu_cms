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
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Sitemap</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Sitemap
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="mb-30">
						<div class="pb-20">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="sitemap">
										<h5 class="h5">Home</h5>
										<ul>
											<li><a href="index.html">Dashboard style 1</a></li>
											<li><a href="index2.html">Dashboard style 2</a></li>
										</ul>
									</div>
									<div class="sitemap">
										<h5 class="h5">Forms</h5>
										<ul>
											<li><a href="form-basic.html">Form Basic</a></li>
											<li>
												<a href="advanced-components.html"
													>Advanced Components</a
												>
											</li>
											<li><a href="form-wizard.html">Form Wizard</a></li>
											<li><a href="html5-editor.html">HTML5 Editor</a></li>
											<li><a href="form-pickers.html">Form Pickers</a></li>
											<li><a href="image-cropper.html">Image Cropper</a></li>
											<li><a href="image-dropzone.html">Image Dropzone</a></li>
										</ul>
									</div>
									<div class="sitemap">
										<h5 class="h5">Invoice</h5>
										<ul>
											<li><a href="invoice.html">Invoice</a></li>
										</ul>
									</div>
									<div class="sitemap">
										<h5 class="h5">Chat Module</h5>
										<ul>
											<li><a href="chat.html">Chat</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="sitemap">
										<h5 class="h5">Tables</h5>
										<ul>
											<li><a href="basic-table.html">Basic Tables</a></li>
											<li><a href="datatable.html">DataTables</a></li>
										</ul>
									</div>
									<div class="sitemap">
										<h5 class="h5">Calendar</h5>
										<ul>
											<li><a href="calendar.html">Calendar</a></li>
										</ul>
									</div>
									<div class="sitemap">
										<h5 class="h5">Icons</h5>
										<ul>
											<li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
											<li><a href="font-awesome.html">FontAwesome Icons</a></li>
											<li><a href="foundation.html">Foundation Icons</a></li>
											<li><a href="ionicons.html">Ionicons Icons</a></li>
											<li><a href="themify.html">Themify Icons</a></li>
										</ul>
									</div>
									<div class="sitemap">
										<h5 class="h5">Charts</h5>
										<ul>
											<li><a href="highchart.html">Highchart</a></li>
											<li><a href="knob-chart.html">jQuery Knob</a></li>
											<li><a href="jvectormap.html">jvectormap</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="sitemap">
										<h5 class="h5">UI Elements</h5>
										<ul>
											<li><a href="ui-buttons.html">Buttons</a></li>
											<li><a href="ui-cards.html">Cards</a></li>
											<li><a href="ui-cards-hover.html">Cards Hover</a></li>
											<li><a href="ui-modals.html">Modals</a></li>
											<li><a href="ui-tabs.html">Tabs</a></li>
											<li>
												<a href="ui-tooltip-popover.html"
													>Tooltip &amp; Popover</a
												>
											</li>
											<li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
											<li><a href="ui-notification.html">Notification</a></li>
											<li><a href="ui-timeline.html">Timeline</a></li>
											<li><a href="ui-progressbar.html">Progressbar</a></li>
											<li><a href="ui-typography.html">Typography</a></li>
											<li><a href="ui-list-group.html">List group</a></li>
											<li><a href="ui-range-slider.html">Range slider</a></li>
											<li><a href="ui-carousel.html">Carousel</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="sitemap">
										<h5 class="h5">Additional Pages</h5>
										<ul>
											<li><a href="video-player.html">Video Player</a></li>
											<li><a href="login.html">Login</a></li>
											<li>
												<a href="forgot-password.html">Forgot Password</a>
											</li>
											<li><a href="reset-password.html">Reset Password</a></li>
											<li><a href="403.html">403</a></li>
											<li><a href="404.html">404</a></li>
											<li><a href="500.html">500</a></li>
										</ul>
									</div>
									<div class="sitemap">
										<h5 class="h5">Extra Pages</h5>
										<ul>
											<li><a href="blank.html">Blank</a></li>
											<li>
												<a href="contact-directory.html">Contact Directory</a>
											</li>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
											<li><a href="product.html">Product</a></li>
											<li><a href="product-detail.html">Product Detail</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li><a href="profile.html">Profile</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="pricing-table.html">Pricing Tables</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="sitemap">
										<h5 class="h5">Multi Level Sitemap</h5>
										<ul>
											<li><a href="#">Level 1</a></li>
											<li><a href="#">Level 1</a></li>
											<li class="child">
												<h5 class="h5">Level 2</h5>
												<ul>
													<li><a href="#">Level 2</a></li>
													<li><a href="#">Level 2</a></li>
													<li class="child">
														<h5 class="h5">Level 3</h5>
														<ul>
															<li><a href="#">Level 3</a></li>
															<li><a href="#">Level 3</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
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
