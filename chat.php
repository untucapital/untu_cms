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
									<h4>Chat</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Chat
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="bg-white border-radius-4 box-shadow mb-30">
						<div class="row no-gutters">
							<div class="col-lg-3 col-md-4 col-sm-12">
								<div class="chat-list bg-light-gray">
									<div class="chat-search">
										<span class="ti-search"></span>
										<input type="text" placeholder="Search Contact" />
									</div>
									<div
										class="notification-list chat-notification-list customscroll"
									>
										<ul>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-green"></i> online
													</p>
												</a>
											</li>
											<li class="active">
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-green"></i> online
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-green"></i> online
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-warning"></i> active 5
														min
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-warning"></i> active 4
														min
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-warning"></i> active 3
														min
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-orange"></i>
														offline
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-orange"></i>
														offline
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-orange"></i>
														offline
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-orange"></i>
														offline
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-orange"></i>
														offline
													</p>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="vendors/images/img.jpg" alt="" />
													<h3 class="clearfix">John Doe</h3>
													<p>
														<i class="fa fa-circle text-light-orange"></i>
														offline
													</p>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-8 col-sm-12">
								<div class="chat-detail">
									<div class="chat-profile-header clearfix">
										<div class="left">
											<div class="clearfix">
												<div class="chat-profile-photo">
													<img src="vendors/images/profile-photo.jpg" alt="" />
												</div>
												<div class="chat-profile-name">
													<h3>Rachel Curtis</h3>
													<span>New York, USA</span>
												</div>
											</div>
										</div>
										<div class="right text-right">
											<div class="dropdown">
												<a
													class="btn btn-outline-primary dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													Setting
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Export Chat</a>
													<a class="dropdown-item" href="#">Search</a>
													<a class="dropdown-item text-light-orange" href="#"
														>Delete Chat</a
													>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-box">
										<div class="chat-desc customscroll">
											<ul>
												<li class="clearfix admin_chat">
													<span class="chat-img">
														<img src="vendors/images/chat-img2.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>Maybe you already have additional info?</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix admin_chat">
													<span class="chat-img">
														<img src="vendors/images/chat-img2.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>
															It is to early to provide some kind of estimation
															here. We need user stories.
														</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix">
													<span class="chat-img">
														<img src="vendors/images/chat-img1.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>
															We are just writing up the user stories now so
															will have requirements for you next week. We are
															just writing up the user stories now so will have
															requirements for you next week.
														</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix">
													<span class="chat-img">
														<img src="vendors/images/chat-img1.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>
															Essentially the brief is for you guys to build an
															iOS and android app. We will do backend and web
															app. We have a version one mockup of the UI,
															please see it attached. As mentioned before, we
															would simply hand you all the assets for the UI
															and you guys code. If you have any early questions
															please do send them on to myself. Ill be in touch
															in coming days when we have requirements prepared.
															Essentially the brief is for you guys to build an
															iOS and android app. We will do backend and web
															app. We have a version one mockup of the UI,
															please see it attached. As mentioned before, we
															would simply hand you all the assets for the UI
															and you guys code. If you have any early questions
															please do send them on to myself. Ill be in touch
															in coming days when we have.
														</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix admin_chat">
													<span class="chat-img">
														<img src="vendors/images/chat-img2.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>Maybe you already have additional info?</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix admin_chat">
													<span class="chat-img">
														<img src="vendors/images/chat-img2.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>
															It is to early to provide some kind of estimation
															here. We need user stories.
														</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix">
													<span class="chat-img">
														<img src="vendors/images/chat-img1.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>
															We are just writing up the user stories now so
															will have requirements for you next week. We are
															just writing up the user stories now so will have
															requirements for you next week.
														</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix">
													<span class="chat-img">
														<img src="vendors/images/chat-img1.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<p>
															Essentially the brief is for you guys to build an
															iOS and android app. We will do backend and web
															app. We have a version one mockup of the UI,
															please see it attached. As mentioned before, we
															would simply hand you all the assets for the UI
															and you guys code. If you have any early questions
															please do send them on to myself. Ill be in touch
															in coming days when we have requirements prepared.
															Essentially the brief is for you guys to build an
															iOS and android app. We will do backend and web
															app. We have a version one mockup of the UI,
															please see it attached. As mentioned before, we
															would simply hand you all the assets for the UI
															and you guys code. If you have any early questions
															please do send them on to myself. Ill be in touch
															in coming days when we have.
														</p>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix upload-file">
													<span class="chat-img">
														<img src="vendors/images/chat-img1.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<div class="upload-file-box clearfix">
															<div class="left">
																<img
																	src="vendors/images/upload-file-img.jpg"
																	alt=""
																/>
																<div class="overlay">
																	<a href="#">
																		<span
																			><i class="fa fa-angle-down"></i
																		></span>
																	</a>
																</div>
															</div>
															<div class="right">
																<h3>Big room.jpg</h3>
																<a href="#">Download</a>
															</div>
														</div>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
												<li class="clearfix upload-file admin_chat">
													<span class="chat-img">
														<img src="vendors/images/chat-img2.jpg" alt="" />
													</span>
													<div class="chat-body clearfix">
														<div class="upload-file-box clearfix">
															<div class="left">
																<img
																	src="vendors/images/upload-file-img.jpg"
																	alt=""
																/>
																<div class="overlay">
																	<a href="#">
																		<span
																			><i class="fa fa-angle-down"></i
																		></span>
																	</a>
																</div>
															</div>
															<div class="right">
																<h3>Big room.jpg</h3>
																<a href="#">Download</a>
															</div>
														</div>
														<div class="chat_time">09:40PM</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="chat-footer">
											<div class="file-upload">
												<a href="#"><i class="fa fa-paperclip"></i></a>
											</div>
											<div class="chat_text_area">
												<textarea placeholder="Type your message…"></textarea>
											</div>
											<div class="chat_send">
												<button class="btn btn-link" type="submit">
													<i class="icon-copy ion-paper-airplane"></i>
												</button>
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
