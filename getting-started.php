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
									<h4>Getting Started</h4>
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
											Getting Started
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
										<a class="dropdown-item active" href="getting-started.html"
											>Getting Started</a
										>
										<a class="dropdown-item" href="color-settings.html"
											>Color Settings</a
										>
										<a class="dropdown-item" href="third-party-plugins.html"
											>Third Party Plugins</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pd-20 card-box mb-30">
						<h4 class="h4 text-blue mb-10">Getting Started</h4>
						<div class="alert alert-primary" role="alert">
							Note: we recomonded you to please make your one own css file & one
							js files and add that in your page, so whenever the update of
							Severny admin comes it does not affect your code.
						</div>
						<div class="alert alert-danger" role="alert">
							If you are using css then no need to follow below steps. Just go
							to the index.html and open that file in to the browser for desire
							output.
						</div>
						<div class="alert alert-danger" role="alert">
							If you are using scss and package managing then we have
							compilation tool (gulp) for that please follow the below steps.
						</div>
						<div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Install Node.js From
										<a
											href="https://nodejs.org/en/download/"
											class="ml-2"
											target="_blank"
											data-color="#1b00ff"
											>https://nodejs.org/en/download/</a
										>
									</h6>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										After that open command promt or any other terminal and go
										to Package Path.
									</h6>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Npm is a default package manager for the JavaScript runtime
										environment Node.js. If you've already then update once.
									</h6>
									<div
										class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow"
									>
										<p class="mb-0">npm install --global npm@latest</p>
									</div>
									<div class="ml-md-4 mt-md-3 alert alert-success p-0">
										<div class="bg-success mb-0 text-white py-2 px-3">
											<p class="mb-0">
												To check weather is node succesfully install or not.
											</p>
										</div>
										<div class="p-3">
											<p class="mb-0 weight-500">npm --version</p>
										</div>
									</div>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Gulp is a cross-platform, streaming task runner that lets
										developers automate many development tasks. To install gulp
										globally has inclue:
									</h6>
									<div
										class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow"
									>
										<p class="mb-0">npm install --global gulp-cli</p>
									</div>
									<div class="ml-md-4 mt-md-3 alert alert-success p-0">
										<div class="bg-success mb-0 text-white py-2 px-3">
											<p class="mb-0">
												If you have previously installed gulp then remove it.
											</p>
										</div>
										<div class="p-3">
											<p class="mb-0 weight-500">npm rm --global gulp</p>
										</div>
									</div>
									<div class="ml-md-4 mt-md-3 alert alert-success p-0">
										<div class="bg-success mb-0 text-white py-2 px-3">
											<p class="mb-0">
												To check weather is gulp succesfully install or not.
											</p>
										</div>
										<div class="p-3">
											<p class="mb-0 weight-500">gulp --version</p>
										</div>
									</div>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Below Command will execute all the assets(js,css) to the
										dist folder separately.
									</h6>
									<div
										class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow"
									>
										<p class="mb-0">gulp</p>
									</div>
								</li>
							</ul>
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
