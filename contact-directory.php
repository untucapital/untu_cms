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
					<div class="container pd-0">
						<div class="page-header">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="title">
										<h4>Contact Directory</h4>
									</div>
									<nav aria-label="breadcrumb" role="navigation">
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="index.html">Home</a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">
												Contact Directory
											</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="contact-directory-list">
							<ul class="row">
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
									</div>
								</li>
								<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="contact-directory-box">
										<div class="contact-dire-info text-center">
											<div class="contact-avatar">
												<span>
													<img src="vendors/images/photo2.jpg" alt="" />
												</span>
											</div>
											<div class="contact-name">
												<h4>Wade Wilson</h4>
												<p>UI/UX designer</p>
												<div class="work text-success">
													<i class="ion-android-person"></i> Freelancer
												</div>
											</div>
											<div class="contact-skill">
												<span class="badge badge-pill">UI</span>
												<span class="badge badge-pill">UX</span>
												<span class="badge badge-pill">Photoshop</span>
												<span class="badge badge-pill badge-primary">+ 8</span>
											</div>
											<div class="profile-sort-desc">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												magna aliqua.
											</div>
										</div>
										<div class="view-contact">
											<a href="#">View Profile</a>
										</div>
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
