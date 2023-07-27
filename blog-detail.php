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
									<h4>Blog Detail</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Blog Detail
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="blog-wrap">
						<div class="container pd-0">
							<div class="row">
								<div class="col-md-8 col-sm-12">
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-img">
											<img src="vendors/images/img2.jpg" alt="" />
										</div>
										<div class="blog-caption">
											<h4 class="mb-10">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit
											</h4>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo
											</p>
											<h5 class="mb-10">
												Lorem ipsum dolor sit amet, consectetur.
											</h5>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</p>
											<h5 class="mb-10">Unordered List</h5>
											<ul>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
											</ul>
											<h5 class="mb-10">Ordered List</h5>
											<ol>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
											</ol>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="card-box mb-30">
										<h5 class="pd-20 h5 mb-0">Categories</h5>
										<div class="list-group">
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>HTML
												<span class="badge badge-primary badge-pill">7</span></a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>Css
												<span class="badge badge-primary badge-pill"
													>10</span
												></a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between active"
												>Bootstrap
												<span class="badge badge-primary badge-pill">8</span></a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>jQuery
												<span class="badge badge-primary badge-pill"
													>15</span
												></a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>Design
												<span class="badge badge-primary badge-pill">5</span></a
											>
										</div>
									</div>
									<div class="card-box mb-30">
										<h5 class="pd-20 h5 mb-0">Latest Post</h5>
										<div class="latest-post">
											<ul>
												<li>
													<h4>
														<a href="#"
															>Ut enim ad minim veniam, quis nostrud
															exercitation ullamco</a
														>
													</h4>
													<span>HTML</span>
												</li>
												<li>
													<h4>
														<a href="#"
															>Lorem ipsum dolor sit amet, consectetur
															adipisicing elit</a
														>
													</h4>
													<span>Css</span>
												</li>
												<li>
													<h4>
														<a href="#"
															>Ut enim ad minim veniam, quis nostrud
															exercitation ullamco</a
														>
													</h4>
													<span>jQuery</span>
												</li>
												<li>
													<h4>
														<a href="#"
															>Lorem ipsum dolor sit amet, consectetur
															adipisicing elit</a
														>
													</h4>
													<span>Bootstrap</span>
												</li>
												<li>
													<h4>
														<a href="#"
															>Lorem ipsum dolor sit amet, consectetur
															adipisicing elit</a
														>
													</h4>
													<span>Design</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-box overflow-hidden">
										<h5 class="pd-20 h5 mb-0">Archives</h5>
										<div class="list-group">
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>January 2020</a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>February 2020</a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>March 2020</a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>April 2020</a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>May 2020</a
											>
										</div>
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
				src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
