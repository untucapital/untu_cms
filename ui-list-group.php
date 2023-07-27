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
									<h4>List group</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											UI List group
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">Basic List</h4>
								<ul class="list-group">
									<li class="list-group-item">Cras justo odio</li>
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item">Morbi leo risus</li>
									<li class="list-group-item">Porta ac consectetur ac</li>
									<li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">Links items List</h4>
								<div class="list-group">
									<a
										href="#"
										class="list-group-item list-group-item-action active"
										>Cras justo odio</a
									>
									<a href="#" class="list-group-item list-group-item-action"
										>Dapibus ac facilisis in</a
									>
									<a href="#" class="list-group-item list-group-item-action"
										>Morbi leo risus</a
									>
									<a href="#" class="list-group-item list-group-item-action"
										>Porta ac consectetur ac</a
									>
									<a
										href="#"
										class="list-group-item list-group-item-action disabled"
										>Vestibulum at eros</a
									>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">buttons items List</h4>
								<div class="list-group">
									<button
										type="button"
										class="list-group-item list-group-item-action"
									>
										Cras justo odio
									</button>
									<button
										type="button"
										class="list-group-item list-group-item-action"
									>
										Dapibus ac facilisis in
									</button>
									<button
										type="button"
										class="list-group-item list-group-item-action active"
									>
										Morbi leo risus
									</button>
									<button
										type="button"
										class="list-group-item list-group-item-action"
									>
										Porta ac consectetur ac
									</button>
									<button
										type="button"
										class="list-group-item list-group-item-action"
										disabled
									>
										Vestibulum at eros
									</button>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">Flush List</h4>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Cras justo odio</li>
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item">Morbi leo risus</li>
									<li class="list-group-item">Porta ac consectetur ac</li>
									<li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">Disabled items List</h4>
								<ul class="list-group">
									<li class="list-group-item disabled">Cras justo odio</li>
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item">Morbi leo risus</li>
									<li class="list-group-item">Porta ac consectetur ac</li>
									<li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">With badges List</h4>
								<ul class="list-group">
									<li
										class="list-group-item d-flex justify-content-between align-items-center"
									>
										Cras justo odio
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li
										class="list-group-item d-flex justify-content-between align-items-center"
									>
										Dapibus ac facilisis in
										<span class="badge badge-primary badge-pill">2</span>
									</li>
									<li
										class="list-group-item d-flex justify-content-between align-items-center"
									>
										Morbi leo risus
										<span class="badge badge-primary badge-pill">1</span>
									</li>
									<li
										class="list-group-item d-flex justify-content-between align-items-center"
									>
										Dapibus ac facilisis in
										<span class="badge badge-primary badge-pill">5</span>
									</li>
									<li
										class="list-group-item d-flex justify-content-between align-items-center"
									>
										Morbi leo risus
										<span class="badge badge-primary badge-pill">7</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">Contextual List</h4>
								<ul class="list-group">
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item list-group-item-primary">
										This is a primary list group item
									</li>
									<li class="list-group-item list-group-item-secondary">
										This is a secondary list group item
									</li>
									<li class="list-group-item list-group-item-success">
										This is a success list group item
									</li>
									<li class="list-group-item list-group-item-danger">
										This is a danger list group item
									</li>
									<li class="list-group-item list-group-item-warning">
										This is a warning list group item
									</li>
									<li class="list-group-item list-group-item-info">
										This is a info list group item
									</li>
									<li class="list-group-item list-group-item-dark">
										This is a dark list group item
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="mb-20 h4">Custom content List</h4>
								<div class="list-group">
									<a
										href="#"
										class="list-group-item list-group-item-action flex-column align-items-start active"
									>
										<h5 class="mb-1 h5 color-white">List group item heading</h5>
										<div class="pb-1">
											<small class="weight-600">3 days ago</small>
										</div>
										<p class="mb-1 font-14">
											Donec id elit non mi porta gravida at eget metus. Maecenas
											sed diam eget risus varius blandit.
										</p>
										<small>Donec id elit non mi porta.</small>
									</a>
									<a
										href="#"
										class="list-group-item list-group-item-action flex-column align-items-start"
									>
										<h5 class="mb-1 h5">List group item heading</h5>
										<div class="pb-1">
											<small class="text-muted weight-600">3 days ago</small>
										</div>
										<p class="mb-1 font-14">
											Donec id elit non mi porta gravida at eget metus. Maecenas
											sed diam eget risus varius blandit.
										</p>
										<small class="text-muted"
											>Donec id elit non mi porta.</small
										>
									</a>
									<a
										href="#"
										class="list-group-item list-group-item-action flex-column align-items-start"
									>
										<h5 class="mb-1 h5">List group item heading</h5>
										<div class="pb-1">
											<small class="text-muted weight-600">3 days ago</small>
										</div>
										<p class="mb-1 font-14">
											Donec id elit non mi porta gravida at eget metus. Maecenas
											sed diam eget risus varius blandit.
										</p>
										<small class="text-muted"
											>Donec id elit non mi porta.</small
										>
									</a>
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
