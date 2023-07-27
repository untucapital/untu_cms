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
									<h4>Advanced Components</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Advanced Components
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
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Select-2 Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Select 2</h4>
								<p class="mb-30">Select2 for custom search and select</p>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Single Select</label>
										<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV">Nevada</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NM">New Mexico</option>
												<option value="ND">North Dakota</option>
												<option value="UT">Utah</option>
												<option value="WY">Wyoming</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Multiple Select</label>
										<select class="custom-select2 form-control" multiple="multiple" style="width: 100%">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV">Nevada</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NM">New Mexico</option>
												<option value="ND">North Dakota</option>
												<option value="UT">Utah</option>
												<option value="WY">Wyoming</option>
											</optgroup>
										</select>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Select-2 end -->
					<!-- Bootstrap Select Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Bootstrap Select</h4>
								<p class="mb-30">
									Just add class <code>.selectpicker</code> to select
								</p>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Single Select</label>
										<select
											class="selectpicker form-control"
											data-style="btn-outline-primary"
											data-size="5"
										>
											<optgroup label="Condiments" data-max-options="2">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</optgroup>
											<optgroup label="Breads" data-max-options="2">
												<option>Plain</option>
												<option>Steamed</option>
												<option>Toasted</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>multiple Select</label>
										<select
											class="selectpicker form-control"
											data-size="5"
											data-style="btn-outline-secondary"
											multiple
											data-max-options="3"
										>
											<optgroup label="Condiments">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</optgroup>
											<optgroup label="Breads">
												<option>Plain</option>
												<option>Steamed</option>
												<option>Toasted</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Selected text format</label>
										<select
											class="selectpicker form-control"
											data-size="5"
											data-style="btn-outline-success"
											data-selected-text-format="count"
											multiple
										>
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Subtext</label>
										<select
											class="selectpicker form-control"
											data-size="5"
											data-style="btn-outline-danger"
										>
											<option data-subtext="French's">Mustard</option>
											<option data-subtext="Heinz">Ketchup</option>
											<option data-subtext="Sweet">Relish</option>
											<option data-subtext="Miracle Whip">Mayonnaise</option>
											<option data-divider="true"></option>
											<option data-subtext="Honey">Barbecue Sauce</option>
											<option data-subtext="Ranch">Salad Dressing</option>
											<option data-subtext="Sweet & Spicy">Tabasco</option>
											<option data-subtext="Chunky">Salsa</option>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Select/deselect all</label>
										<select
											class="selectpicker form-control"
											data-size="5"
											data-style="btn-outline-warning"
											multiple
											data-actions-box="true"
											data-selected-text-format="count"
										>
											<optgroup label="Condiments">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</optgroup>
											<optgroup label="Breads">
												<option>Plain</option>
												<option>Steamed</option>
												<option>Toasted</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>Disabled options</label>
										<select
											class="selectpicker form-control"
											data-size="5"
											data-style="btn-outline-info"
										>
											<option>Mustard</option>
											<option disabled>Ketchup</option>
											<option>Relish</option>
											<option>Plain</option>
											<option disabled>Steamed</option>
											<option>Toasted</option>
										</select>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Bootstrap Select End -->
					<div class="row">
						<!-- Bootstrap Switchery Start -->
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="clearfix mb-30">
									<div class="pull-left">
										<h4 class="text-blue h4">Switchery js</h4>
									</div>
								</div>
								<form>
									<div class="mb-30">
										<h5 class="h5">Basic</h5>
										<p>
											add
											<code> class="switch-btn" data-color="#0099ff"</code> to
											your input element.
										</p>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#0099ff"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#41ccba"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#f56767"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#a683eb"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#f2a654"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#0059b2"
										/>
									</div>
									<div class="mb-30">
										<h5 class="h5">Sizes</h5>
										<p>
											add <code>data-size="small",data-size="large"</code> to
											your input element for diffrent sizes.
										</p>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-size="small"
											data-color="#0099ff"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-size="small"
											data-color="#f56767"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#41ccba"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#a683eb"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-size="large"
											data-color="#f2a654"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-size="large"
											data-color="#0059b2"
										/>
									</div>
									<div class="mb-30">
										<h5 class="h5">Secondary Color</h5>
										<p>
											add
											<code
												>data-color="#0099ff"
												data-secondary-color="#28a745"</code
											>
											to your input
										</p>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-size="small"
											data-color="#0099ff"
											data-secondary-color="#28a745"
										/>
										<input
											type="checkbox"
											class="switch-btn"
											data-size="small"
											data-color="#f56767"
											data-secondary-color="#28a745"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-color="#41ccba"
											data-secondary-color="#28a745"
										/>
										<input
											type="checkbox"
											class="switch-btn"
											data-color="#a683eb"
											data-secondary-color="#28a745"
										/>
										<input
											type="checkbox"
											checked
											class="switch-btn"
											data-size="large"
											data-color="#f2a654"
											data-secondary-color="#28a745"
										/>
										<input
											type="checkbox"
											class="switch-btn"
											data-size="large"
											data-color="#0059b2"
											data-secondary-color="#28a745"
										/>
									</div>
								</form>
							</div>
						</div>
						<!-- Bootstrap Switchery End -->
						<!-- Bootstrap Tags Input Start -->
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="clearfix mb-30">
									<div class="pull-left">
										<h4 class="text-blue h4">Bootstrap Tags Input</h4>
									</div>
								</div>
								<form>
									<div class="mb-30">
										<h5 class="h5">Input Value</h5>
										<p>
											add <code>data-role="tagsinput"</code> to your input
											element.
										</p>
										<input
											type="text"
											value="Amsterdam,Washington,Sydney,Beijing,Cairo"
											data-role="tagsinput"
										/>
									</div>
									<div class="mb-30">
										<h5 class="h5">Select Value</h5>
										<p>
											add <code>data-role="tagsinput"</code> to your select
											element & use select multiple
										</p>
										<select multiple data-role="tagsinput">
											<option value="Amsterdam">Amsterdam</option>
											<option value="Washington">Washington</option>
											<option value="Sydney">Sydney</option>
											<option value="Beijing">Beijing</option>
											<option value="Cairo">Cairo</option>
										</select>
									</div>
									<div class="mb-30">
										<h5 class="h5">Input placeholder</h5>
										<p>
											add
											<code>data-role="tagsinput" placeholder="add tags"</code>
											to your input element.
										</p>
										<input
											type="text"
											value="Amsterdam,Washington,Sydney"
											data-role="tagsinput"
											placeholder="add tags"
										/>
									</div>
								</form>
							</div>
						</div>
						<!-- Bootstrap Tags Input End -->
					</div>
					<!-- Bootstrap TouchSpin Start -->
					<div class="pd-20 card-box height-100-p mb-30">
						<div class="clearfix mb-30">
							<div class="pull-left">
								<h4 class="text-blue h4">Bootstrap TouchSpin</h4>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Example with postfix</label>
										<input id="demo1" type="text" value="55" name="demo1" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Example with prefix</label>
										<input id="demo2" type="text" value="0" name="demo2" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Vertical buttons</label>
										<input
											id="demo_vertical2"
											type="text"
											value=""
											name="demo_vertical2"
										/>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Init with empty value</label>
										<input id="demo3" type="text" value="" name="demo3" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Value is set</label>
										<input
											id="demo3_22"
											type="text"
											value="33"
											name="demo3_22"
										/>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Button group</label>
										<input
											id="demo5"
											type="text"
											class="form-control"
											name="demo5"
											value="50"
										/>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Bootstrap TouchSpin End -->
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
		<!-- switchery js -->
		<script src="src/plugins/switchery/switchery.min.js"></script>
		<!-- bootstrap-tagsinput js -->
		<script src="src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<!-- bootstrap-touchspin js -->
		<script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="vendors/scripts/advanced-components.js"></script>
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
