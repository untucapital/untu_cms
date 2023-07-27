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
									<h4>Modals</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											UI Modals
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<!-- Large modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Large modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#bd-example-modal-lg"
									type="button"
								>
									<img src="vendors/images/modal-img1.jpg" alt="modal" />
								</a>
								<div
									class="modal fade bs-example-modal-lg"
									id="bd-example-modal-lg"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Large modal
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore eu
													fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</p>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore eu
													fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</p>
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
												<button type="button" class="btn btn-primary">
													Save changes
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Medium modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Medium modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#Medium-modal"
									type="button"
								>
									<img src="vendors/images/modal-img2.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="Medium-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Large modal
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore eu
													fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</p>
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
												<button type="button" class="btn btn-primary">
													Save changes
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Small modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Small modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#small-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="small-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-sm modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Large modal
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua.
												</p>
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Login modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Login modal</h5>
								<a
									href="#"
									class="btn-block"
									data-backdrop="static"
									data-toggle="modal"
									data-target="#login-modal"
									type="button"
								>
									<img src="vendors/images/modal-img2.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="login-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div
												class="login-box bg-white box-shadow border-radius-10"
											>
												<div class="login-title">
													<h2 class="text-center text-primary">
														Login To DeskApp
													</h2>
												</div>
												<form>
													<div class="select-role">
														<div
															class="btn-group btn-group-toggle"
															data-toggle="buttons"
														>
															<label class="btn active">
																<input type="radio" name="options" id="admin" />
																<div class="icon">
																	<img
																		src="vendors/images/briefcase.svg"
																		class="svg"
																		alt=""
																	/>
																</div>
																<span>I'm</span>
																Manager
															</label>
															<label class="btn">
																<input type="radio" name="options" id="user" />
																<div class="icon">
																	<img
																		src="vendors/images/person.svg"
																		class="svg"
																		alt=""
																	/>
																</div>
																<span>I'm</span>
																Employee
															</label>
														</div>
													</div>
													<div class="input-group custom">
														<input
															type="text"
															class="form-control form-control-lg"
															placeholder="Username"
														/>
														<div class="input-group-append custom">
															<span class="input-group-text"
																><i class="icon-copy dw dw-user1"></i
															></span>
														</div>
													</div>
													<div class="input-group custom">
														<input
															type="password"
															class="form-control form-control-lg"
															placeholder="**********"
														/>
														<div class="input-group-append custom">
															<span class="input-group-text"
																><i class="dw dw-padlock1"></i
															></span>
														</div>
													</div>
													<div class="row pb-30">
														<div class="col-6">
															<div class="custom-control custom-checkbox">
																<input
																	type="checkbox"
																	class="custom-control-input"
																	id="customCheck1"
																/>
																<label
																	class="custom-control-label"
																	for="customCheck1"
																	>Remember</label
																>
															</div>
														</div>
														<div class="col-6">
															<div class="forgot-password">
																<a href="forgot-password.html"
																	>Forgot Password</a
																>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">
															<div class="input-group mb-0">
																<!--
																use code for form submit
																<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
															-->
																<a
																	class="btn btn-primary btn-lg btn-block"
																	href="index.html"
																	>Sign In</a
																>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Alert modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Alert modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#alert-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="alert-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-sm modal-dialog-centered">
										<div class="modal-content bg-danger text-white">
											<div class="modal-body text-center">
												<h3 class="text-white mb-15">
													<i class="fa fa-exclamation-triangle"></i> Alert
												</h3>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua.
												</p>
												<button
													type="button"
													class="btn btn-light"
													data-dismiss="modal"
												>
													Ok
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Warning modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Warning modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#warning-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="warning-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-sm modal-dialog-centered">
										<div class="modal-content bg-warning">
											<div class="modal-body text-center">
												<h3 class="mb-15">
													<i class="fa fa-exclamation-triangle"></i> Warning
												</h3>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua.
												</p>
												<button
													type="button"
													class="btn btn-dark"
													data-dismiss="modal"
												>
													Ok
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Success modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Success modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#success-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="success-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="exampleModalCenterTitle"
									aria-hidden="true"
								>
									<div
										class="modal-dialog modal-dialog-centered"
										role="document"
									>
										<div class="modal-content">
											<div class="modal-body text-center font-18">
												<h3 class="mb-20">Form Submitted!</h3>
												<div class="mb-30 text-center">
													<img src="vendors/images/success.png" />
												</div>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod
											</div>
											<div class="modal-footer justify-content-center">
												<button
													type="button"
													class="btn btn-primary"
													data-dismiss="modal"
												>
													Done
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Confirmation modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Confirmation modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#confirmation-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="confirmation-modal"
									tabindex="-1"
									role="dialog"
									aria-hidden="true"
								>
									<div
										class="modal-dialog modal-dialog-centered"
										role="document"
									>
										<div class="modal-content">
											<div class="modal-body text-center font-18">
												<h4 class="padding-top-30 mb-30 weight-500">
													Are you sure you want to continue?
												</h4>
												<div
													class="padding-bottom-30 row"
													style="max-width: 170px; margin: 0 auto"
												>
													<div class="col-6">
														<button
															type="button"
															class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
															data-dismiss="modal"
														>
															<i class="fa fa-times"></i>
														</button>
														NO
													</div>
													<div class="col-6">
														<button
															type="button"
															class="btn btn-primary border-radius-100 btn-block confirmation-btn"
															data-dismiss="modal"
														>
															<i class="fa fa-check"></i>
														</button>
														YES
													</div>
												</div>
											</div>
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
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
