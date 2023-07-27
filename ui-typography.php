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
									<h4>Typography</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											UI Typography
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h4 class="mb-30 h4">Headings</h4>
								<h1>h1. Bootstrap heading</h1>
								<h2 class="mb-10">h2. Bootstrap heading</h2>
								<h3 class="mb-10">h3. Bootstrap heading</h3>
								<h4 class="mb-10">h4. Bootstrap heading</h4>
								<h5 class="mb-10">h5. Bootstrap heading</h5>
								<h6 class="mb-10">h6. Bootstrap heading</h6>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h4 class="mb-30 h4">Inline text elements</h4>
								<p>You can use the mark tag to <mark>highlight</mark> text.</p>
								<p>
									<del
										>This line of text is meant to be treated as deleted
										text.</del
									>
								</p>
								<p>
									<s
										>This line of text is meant to be treated as no longer
										accurate.</s
									>
								</p>
								<p>
									<ins
										>This line of text is meant to be treated as an addition to
										the document.</ins
									>
								</p>
								<p><u>This line of text will render as underlined</u></p>
								<p>
									<small
										>This line of text is meant to be treated as fine
										print.</small
									>
								</p>
								<p><strong>This line rendered as bold text.</strong></p>
								<p><em>This line rendered as italicized text.</em></p>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h4 class="mb-30 h4">Display headings</h4>
								<h1 class="display-1">Display 1</h1>
								<h1 class="display-2">Display 2</h1>
								<h1 class="display-3">Display 3</h1>
								<h1 class="display-4">Display 4</h1>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box mb-30">
								<h4 class="mb-20 h4">Blockquotes</h4>
								<blockquote class="blockquote">
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Integer posuere erat a ante.
									</p>
									<footer class="blockquote-footer">
										Someone famous in
										<cite title="Source Title">Source Title</cite>
									</footer>
								</blockquote>
								<blockquote class="blockquote text-right">
									<p class="mb-0">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Integer posuere erat a ante.
									</p>
									<footer class="blockquote-footer">
										Someone famous in
										<cite title="Source Title">Source Title</cite>
									</footer>
								</blockquote>
							</div>
							<div class="pd-20 card-box">
								<h4 class="mb-30 h4">List Inline</h4>
								<ul class="list-inline">
									<li class="list-inline-item">Lorem ipsum</li>
									<li class="list-inline-item">Phasellus iaculis</li>
									<li class="list-inline-item">Nulla volutpat</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h4 class="mb-30 h4">List Unstyled</h4>
								<ul class="list-unstyled">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consectetur adipiscing elit</li>
									<li>Integer molestie lorem at massa</li>
									<li>Facilisis in pretium nisl aliquet</li>
									<li>
										Nulla volutpat aliquam velit
										<ul>
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
											<li>Vestibulum laoreet porttitor sem</li>
											<li>Ac tristique libero volutpat at</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
									<li>Eget porttitor lorem</li>
								</ul>
							</div>
						</div>
						<div class="col-md-8 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h4 class="mb-30 h4">Description list alignment</h4>
								<dl class="row">
									<dt class="col-sm-3">Description lists</dt>
									<dd class="col-sm-9">
										A description list is perfect for defining terms.
									</dd>

									<dt class="col-sm-3">Euismod</dt>
									<dd class="col-sm-9">
										<p>
											Vestibulum id ligula porta felis euismod semper eget
											lacinia odio sem nec elit.
										</p>
										<p>Donec id elit non mi porta gravida at eget metus.</p>
									</dd>

									<dt class="col-sm-3">Malesuada porta</dt>
									<dd class="col-sm-9">
										Etiam porta sem malesuada magna mollis euismod.
									</dd>

									<dt class="col-sm-3 text-truncate">
										Truncated term is truncated
									</dt>
									<dd class="col-sm-9">
										Fusce dapibus, tellus ac cursus commodo, tortor mauris
										condimentum nibh, ut fermentum massa justo sit amet risus.
									</dd>

									<dt class="col-sm-3">Nesting</dt>
									<dd class="col-sm-9">
										<dl class="row">
											<dt class="col-sm-4">Nested definition list</dt>
											<dd class="col-sm-8">
												Aenean posuere, tortor sed cursus feugiat, nunc augue
												blandit nunc.
											</dd>
										</dl>
									</dd>
								</dl>
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
