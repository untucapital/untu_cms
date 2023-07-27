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
									<h4>Carousel</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											UI Carousel
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<!-- Slides only -->
							<div class="card-box mb-30">
								<div class="clearfix pd-20">
									<div class="pull-left">
										<h4 class="h4">Slides only</h4>
									</div>
									<div class="pull-right">
										<a
											href="#carousel1"
											class="btn btn-primary btn-sm scroll-click"
											rel="content-y"
											data-toggle="collapse"
											role="button"
											><i class="fa fa-code"></i> Source Code</a
										>
									</div>
								</div>
								<div
									id="carouselExampleSlidesOnly"
									class="carousel slide"
									data-ride="carousel"
								>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img
												class="d-block w-100"
												src="vendors/images/img2.jpg"
												alt="First slide"
											/>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img3.jpg"
												alt="Second slide"
											/>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img4.jpg"
												alt="Third slide"
											/>
										</div>
									</div>
								</div>
								<div class="collapse collapse-box" id="carousel1">
									<div class="code-box">
										<div class="clearfix">
											<a
												href="javascript:;"
												class="btn btn-primary btn-sm code-copy pull-left"
												data-clipboard-target="#copy-carousel1"
												><i class="fa fa-clipboard"></i> Copy Code</a
											>
											<a
												href="#carousel1"
												class="btn btn-primary btn-sm pull-right"
												rel="content-y"
												data-toggle="collapse"
												role="button"
												><i class="fa fa-eye-slash"></i> Hide Code</a
											>
										</div>
										<pre><code class="xml copy-pre" id="copy-carousel1">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
		</div>
	</div>
</div>
									</code></pre>
									</div>
								</div>
							</div>
						</div>
						<!-- With controls -->
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="card-box mb-30">
								<div class="clearfix pd-20">
									<div class="pull-left">
										<h4 class="h4">With controls</h4>
									</div>
									<div class="pull-right">
										<a
											href="#carousel2"
											class="btn btn-primary btn-sm scroll-click"
											rel="content-y"
											data-toggle="collapse"
											role="button"
											><i class="fa fa-code"></i> Source Code</a
										>
									</div>
								</div>
								<div
									id="carouselExampleControls"
									class="carousel slide"
									data-ride="carousel"
								>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img
												class="d-block w-100"
												src="vendors/images/img2.jpg"
												alt="First slide"
											/>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img3.jpg"
												alt="Second slide"
											/>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img4.jpg"
												alt="Third slide"
											/>
										</div>
									</div>
									<a
										class="carousel-control-prev"
										href="#carouselExampleControls"
										role="button"
										data-slide="prev"
									>
										<span
											class="carousel-control-prev-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Previous</span>
									</a>
									<a
										class="carousel-control-next"
										href="#carouselExampleControls"
										role="button"
										data-slide="next"
									>
										<span
											class="carousel-control-next-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="collapse collapse-box" id="carousel2">
									<div class="code-box">
										<div class="clearfix">
											<a
												href="javascript:;"
												class="btn btn-primary btn-sm code-copy pull-left"
												data-clipboard-target="#copy-carousel2"
												><i class="fa fa-clipboard"></i> Copy Code</a
											>
											<a
												href="#carousel2"
												class="btn btn-primary btn-sm pull-right"
												rel="content-y"
												data-toggle="collapse"
												role="button"
												><i class="fa fa-eye-slash"></i> Hide Code</a
											>
										</div>
										<pre><code class="xml copy-pre" id="copy-carousel2">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
									</div>
								</div>
							</div>
						</div>
						<!-- With indicators -->
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="card-box mb-30">
								<div class="clearfix pd-20">
									<div class="pull-left">
										<h4 class="h4">With indicators</h4>
									</div>
									<div class="pull-right">
										<a
											href="#carousel3"
											class="btn btn-primary btn-sm scroll-click"
											rel="content-y"
											data-toggle="collapse"
											role="button"
											><i class="fa fa-code"></i> Source Code</a
										>
									</div>
								</div>
								<div
									id="carouselExampleIndicators"
									class="carousel slide"
									data-ride="carousel"
								>
									<ol class="carousel-indicators">
										<li
											data-target="#carouselExampleIndicators"
											data-slide-to="0"
											class="active"
										></li>
										<li
											data-target="#carouselExampleIndicators"
											data-slide-to="1"
										></li>
										<li
											data-target="#carouselExampleIndicators"
											data-slide-to="2"
										></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img
												class="d-block w-100"
												src="vendors/images/img3.jpg"
												alt="First slide"
											/>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img4.jpg"
												alt="Second slide"
											/>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img5.jpg"
												alt="Third slide"
											/>
										</div>
									</div>
									<a
										class="carousel-control-prev"
										href="#carouselExampleIndicators"
										role="button"
										data-slide="prev"
									>
										<span
											class="carousel-control-prev-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Previous</span>
									</a>
									<a
										class="carousel-control-next"
										href="#carouselExampleIndicators"
										role="button"
										data-slide="next"
									>
										<span
											class="carousel-control-next-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="collapse collapse-box" id="carousel3">
									<div class="code-box">
										<div class="clearfix">
											<a
												href="javascript:;"
												class="btn btn-primary btn-sm code-copy pull-left"
												data-clipboard-target="#copy-carousel3"
												><i class="fa fa-clipboard"></i> Copy Code</a
											>
											<a
												href="#carousel3"
												class="btn btn-primary btn-sm pull-right"
												rel="content-y"
												data-toggle="collapse"
												role="button"
												><i class="fa fa-eye-slash"></i> Hide Code</a
											>
										</div>
										<pre><code class="xml copy-pre" id="copy-carousel3">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img5.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
									</div>
								</div>
							</div>
						</div>
						<!-- With captions -->
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="card-box mb-30">
								<div class="clearfix pd-20">
									<div class="pull-left">
										<h4 class="h4">With captions</h4>
									</div>
									<div class="pull-right">
										<a
											href="#carousel4"
											class="btn btn-primary btn-sm scroll-click"
											rel="content-y"
											data-toggle="collapse"
											role="button"
											><i class="fa fa-code"></i> Source Code</a
										>
									</div>
								</div>
								<div
									id="carouselExampleCaptions"
									class="carousel slide"
									data-ride="carousel"
								>
									<ol class="carousel-indicators">
										<li
											data-target="#carouselExampleCaptions"
											data-slide-to="0"
											class="active"
										></li>
										<li
											data-target="#carouselExampleCaptions"
											data-slide-to="1"
										></li>
										<li
											data-target="#carouselExampleCaptions"
											data-slide-to="2"
										></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img
												class="d-block w-100"
												src="vendors/images/img1.jpg"
												alt="First slide"
											/>
											<div class="carousel-caption d-none d-md-block">
												<h5 class="color-white">First slide label</h5>
												<p>
													Nulla vitae elit libero, a pharetra augue mollis
													interdum.
												</p>
											</div>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img3.jpg"
												alt="Second slide"
											/>
											<div class="carousel-caption d-none d-md-block">
												<h5 class="color-white">Second slide label</h5>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing
													elit.
												</p>
											</div>
										</div>
										<div class="carousel-item">
											<img
												class="d-block w-100"
												src="vendors/images/img2.jpg"
												alt="Third slide"
											/>
											<div class="carousel-caption d-none d-md-block">
												<h5 class="color-white">Third slide label</h5>
												<p>
													Praesent commodo cursus magna, vel scelerisque nisl
													consectetur.
												</p>
											</div>
										</div>
									</div>
									<a
										class="carousel-control-prev"
										href="#carouselExampleCaptions"
										role="button"
										data-slide="prev"
									>
										<span
											class="carousel-control-prev-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Previous</span>
									</a>
									<a
										class="carousel-control-next"
										href="#carouselExampleCaptions"
										role="button"
										data-slide="next"
									>
										<span
											class="carousel-control-next-icon"
											aria-hidden="true"
										></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="collapse collapse-box" id="carousel4">
									<div class="code-box">
										<div class="clearfix">
											<a
												href="javascript:;"
												class="btn btn-primary btn-sm code-copy pull-left"
												data-clipboard-target="#copy-carousel4"
												><i class="fa fa-clipboard"></i> Copy Code</a
											>
											<a
												href="#carousel4"
												class="btn btn-primary btn-sm pull-right"
												rel="content-y"
												data-toggle="collapse"
												role="button"
												><i class="fa fa-eye-slash"></i> Hide Code</a
											>
										</div>
										<pre><code class="xml copy-pre" id="copy-carousel4">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img1.jpg" alt="First slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">First slide label</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="Third slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
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
