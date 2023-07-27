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
									<h4>Cards</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Cards
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img2.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img3.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Cras justo odio</li>
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<div class="card-body">
									<h5 class="card-title weight-500">Card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
								<img
									class="card-img-top"
									src="vendors/images/img1.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
									<a href="#" class="card-link text-primary">Card link</a>
									<a href="#" class="card-link text-primary">Another link</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img4.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content. Some quick example text
										to build on the card title and make up the bulk of the
										card's content.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-12 col-md-4 mb-30">
							<div class="card card-box">
								<h5 class="card-header weight-500">Featured</h5>
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">
										With supporting text below as a natural lead-in to
										additional content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
								<div class="card-footer text-muted">2 days ago</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 mb-30">
							<div class="card card-box">
								<div class="card-header">Quote</div>
								<div class="card-body">
									<blockquote class="blockquote mb-0">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Integer posuere erat a ante.
										</p>
										<footer class="blockquote-footer">
											Someone famous in
											<cite title="Source Title">Source Title</cite>
										</footer>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 mb-30">
							<div class="card card-box">
								<div class="card-header">Featured</div>
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">
										With supporting text below as a natural lead-in to
										additional content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
							<div class="card card-box">
								<img
									class="card-img-top"
									src="vendors/images/img4.jpg"
									alt="Card image cap"
								/>
								<div class="card-body">
									<h5 class="card-title weight-500">Card title</h5>
									<p class="card-text">
										This is a wider card with supporting text below as a natural
										lead-in to additional content. This content is a little bit
										longer.
									</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
							<div class="card bg-dark card-box">
								<img
									class="card-img"
									src="vendors/images/img1.jpg"
									alt="Card image"
								/>
								<div class="card-img-overlay">
									<h5 class="card-title weight-500">Card title</h5>
									<p class="card-text">
										This is a wider card with supporting text below as a natural
										lead-in.
									</p>
									<p class="card-text">Last updated 3 mins ago</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
							<div class="card card-box">
								<div class="card-body">
									<h5 class="card-title weight-500">Card title</h5>
									<p class="card-text">
										This is a wider card with supporting text below as a natural
										lead-in to additional content. This content is a little bit
										longer.
									</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
								<img
									class="card-img-bottom"
									src="vendors/images/img5.jpg"
									alt="Card image cap"
								/>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-12 col-md-4 mb-30">
							<div class="card card-box">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">
										With supporting text below as a natural lead-in to
										additional content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 mb-30">
							<div class="card card-box text-center">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">
										With supporting text below as a natural lead-in to
										additional content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 mb-30">
							<div class="card card-box text-right">
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">
										With supporting text below as a natural lead-in to
										additional content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
					<h4 class="h4 text-blue mb-30">Navigation</h4>
					<div class="row clearfix">
						<div class="col-sm-12 col-md-6 mb-30">
							<div class="card card-box text-center">
								<div class="card-header">
									<ul class="nav nav-tabs card-header-tabs">
										<li class="nav-item">
											<a class="nav-link active" href="#">Active</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Link</a>
										</li>
										<li class="nav-item">
											<a class="nav-link disabled" href="#">Disabled</a>
										</li>
									</ul>
								</div>
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">
										With supporting text below as a natural lead-in to
										additional content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 mb-30">
							<div class="card card-box">
								<div class="card-header">
									<ul class="nav nav-pills card-header-pills">
										<li class="nav-item">
											<a class="nav-link active" href="#">Active</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Link</a>
										</li>
										<li class="nav-item">
											<a class="nav-link disabled" href="#">Disabled</a>
										</li>
									</ul>
								</div>
								<div class="card-body">
									<h5 class="card-title">Special title treatment</h5>
									<p class="card-text">
										With supporting text below as a natural lead-in to
										additional content.
									</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
					<h4 class="h4 text-blue mb-30">Background and color</h4>
					<div class="row clearfix">
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-primary card-box">
								<div class="card-header">Header</div>
								<div class="card-body">
									<h5 class="card-title text-white">Primary card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-secondary card-box">
								<div class="card-header">Header</div>
								<div class="card-body">
									<h5 class="card-title text-white">Secondary card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-success card-box">
								<div class="card-header">Header</div>
								<div class="card-body">
									<h5 class="card-title text-white">Success card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-black bg-warning card-box">
								<div class="card-header">Header</div>
								<div class="card-body">
									<h5 class="card-title">Warning card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-info card-box">
								<div class="card-header">Header</div>
								<div class="card-body">
									<h5 class="card-title text-white">Info card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-dark card-box">
								<div class="card-header">Header</div>
								<div class="card-body">
									<h5 class="card-title text-white">Dark card title</h5>
									<p class="card-text">
										Some quick example text to build on the card title and make
										up the bulk of the card's content.
									</p>
								</div>
							</div>
						</div>
					</div>
					<h4 class="h4 text-blue mb-30">Card groups</h4>
					<div class="card-group mb-30">
						<div class="card card-box">
							<img
								class="card-img-top"
								src="vendors/images/img3.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This is a wider card with supporting text below as a natural
									lead-in to additional content. This content is a little bit
									longer.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
						<div class="card card-box">
							<img
								class="card-img-top"
								src="vendors/images/img4.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This card has supporting text below as a natural lead-in to
									additional content.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
						<div class="card card-box">
							<img
								class="card-img-top"
								src="vendors/images/img2.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer
									content than the first to show that equal height action.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<h4 class="h4 text-blue mb-30">Card decks</h4>
					<div class="card-deck mb-30">
						<div class="card">
							<img
								class="card-img-top"
								src="vendors/images/img2.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit
									longer.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
						<div class="card">
							<img
								class="card-img-top"
								src="vendors/images/img3.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This card has supporting text below as a natural lead-in to
									additional content.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
						<div class="card">
							<img
								class="card-img-top"
								src="vendors/images/img4.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer
									content than the first to show that equal height action.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<h4 class="h4 text-blue mb-30">Card columns</h4>
					<div class="card-columns mb-30">
						<div class="card card-box">
							<img
								class="card-img-top"
								src="vendors/images/img1.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title that wraps to a new line</h5>
								<p class="card-text">
									This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit
									longer.
								</p>
							</div>
						</div>
						<div class="card card-box p-3">
							<blockquote class="blockquote mb-0 card-body">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Integer posuere erat a ante.
								</p>
								<footer class="blockquote-footer">
									<small class="text-muted">
										Someone famous in
										<cite title="Source Title">Source Title</cite>
									</small>
								</footer>
							</blockquote>
						</div>
						<div class="card card-box">
							<img
								class="card-img-top"
								src="vendors/images/img2.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This card has supporting text below as a natural lead-in to
									additional content.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
						<div class="card card-box bg-primary text-white text-center p-3">
							<blockquote class="blockquote mb-0">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Integer posuere erat.
								</p>
								<footer class="blockquote-footer">
									<small class="text-white">
										Someone famous in
										<cite title="Source Title">Source Title</cite>
									</small>
								</footer>
							</blockquote>
						</div>
						<div class="card card-box text-center">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This card has supporting text below as a natural lead-in to
									additional content.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
						<div class="card card-box">
							<img
								class="card-img"
								src="vendors/images/img3.jpg"
								alt="Card image"
							/>
						</div>
						<div class="card card-box p-3 text-right">
							<blockquote class="blockquote mb-0">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Integer posuere erat a ante.
								</p>
								<footer class="blockquote-footer">
									<small class="text-muted">
										Someone famous in
										<cite title="Source Title">Source Title</cite>
									</small>
								</footer>
							</blockquote>
						</div>
						<div class="card card-box">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer
									content than the first to show that equal height action.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
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
