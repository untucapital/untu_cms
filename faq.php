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
									<h4>Frequently asked questions</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											FAQ
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="faq-wrap">
						<h4 class="mb-20 h4 text-blue">Accordion example</h4>
						<div id="accordion">
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block"
										data-toggle="collapse"
										data-target="#faq1"
									>
										Collapsible Group Item #1
									</button>
								</div>
								<div id="faq1" class="collapse show" data-parent="#accordion">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq2"
									>
										Collapsible Group Item #2
									</button>
								</div>
								<div id="faq2" class="collapse" data-parent="#accordion">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq3"
									>
										Collapsible Group Item #3
									</button>
								</div>
								<div id="faq3" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p>
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
										<p class="mb-0">
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq4"
									>
										Collapsible Group Item #4
									</button>
								</div>
								<div id="faq4" class="collapse" data-parent="#accordion">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq5"
									>
										Collapsible Group Item #5
									</button>
								</div>
								<div id="faq5" class="collapse" data-parent="#accordion">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq6"
									>
										Collapsible Group Item #6
									</button>
								</div>
								<div id="faq6" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<p>
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
										<p class="mb-0">
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
									</div>
								</div>
							</div>
						</div>
						<h4 class="mb-30 h4 text-blue padding-top-30">Collapse example</h4>
						<div class="padding-bottom-30">
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block"
										data-toggle="collapse"
										data-target="#faq1-1"
									>
										Collapsible Group Item #1
									</button>
								</div>
								<div id="faq1-1" class="collapse show">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq2-2"
									>
										Collapsible Group Item #2
									</button>
								</div>
								<div id="faq2-2" class="collapse">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq3-3"
									>
										Collapsible Group Item #3
									</button>
								</div>
								<div id="faq3-3" class="collapse">
									<div class="card-body">
										<p>
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
										<p class="mb-0">
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq4-4"
									>
										Collapsible Group Item #4
									</button>
								</div>
								<div id="faq4-4" class="collapse">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq5-5"
									>
										Collapsible Group Item #5
									</button>
								</div>
								<div id="faq5-5" class="collapse">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										sunt aliqua put a bird on it squid single-origin coffee
										nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice lomo.
										Leggings occaecat craft beer farm-to-table, raw denim
										aesthetic synth nesciunt you probably haven't heard of them
										accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<button
										class="btn btn-block collapsed"
										data-toggle="collapse"
										data-target="#faq6-6"
									>
										Collapsible Group Item #6
									</button>
								</div>
								<div id="faq6-6" class="collapse">
									<div class="card-body">
										<p>
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
										<p class="mb-0">
											Anim pariatur cliche reprehenderit, enim eiusmod high life
											accusamus terry richardson ad squid. 3 wolf moon officia
											aute, non cupidatat skateboard dolor brunch. Food truck
											quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor, sunt aliqua put a bird on it squid single-origin
											coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
											helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea proident. Ad vegan excepteur butcher vice
											lomo. Leggings occaecat craft beer farm-to-table, raw
											denim aesthetic synth nesciunt you probably haven't heard
											of them accusamus labore sustainable VHS.
										</p>
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
