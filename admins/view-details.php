<!DOCTYPE html>
<html>
	<!-- HTML HEAD -->
	<?php 
		include('../includes/header.php');
        $ch = curl_init();
        //error_reporting(0);
        // $firstName = $_GET['firstName'];
        // $lastName = $_GET['lastName'];
        $id = $_GET["id"];

        print_r($id);
        
        curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/users/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        
        curl_close($ch);
        
        $data = json_decode($server_response, true);

        print_r($id);
        ?>
        <?php
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/roles');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        
        curl_close($ch);
        
        $roles_data = json_decode($server_response, true);
        
        ?>
        <?php
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'http://localhost:7878/api/utg/branches');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_response = curl_exec($ch);
        
        curl_close($ch);
        
        $branch_data = json_decode($server_response, true);
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
			<?php include('../includes/top-nav.php'); ?>
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
		<?php include('../includes/sidebar.php'); ?>
		<!-- /sidebar-left -->
		
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Auditing</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											
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
										Choose Ticket Action
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="view-ticket.php">View Tickets</a>
										
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h2 text-blue mb-20">User Details</h5>
								<div class="tab">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a
												class="nav-link active text-blue"
												data-toggle="tab"
												href="#home"
												role="tab"
												aria-selected="true"
												>User Details</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#home1"
												role="tab"
												aria-selected="false"
												>Assign User To Branch</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#contact"
												role="tab"
												aria-selected="false"
												>Assign User Credit Committe Group</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link text-blue"
												data-toggle="tab"
												href="#contact1"
												role="tab"
												aria-selected="false"
												>Add Signature</a
											>
										</li>
									</ul>
									<div class="tab-content">
										<div
											class="tab-pane fade show active"
											id="home"
											role="tabpanel"
										>
											<div class="pd-20">
											<div class="tab-pane fade show active" id="client_details" role="tabpanel" aria-labelledby="client-details-tab">
                                            <a class="list-group-item"><b style="padding-right: 100px;">Fullname</b>: <?= $data["firstName"] ?> <?= $data["lastName"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 95px;">Username</b>: <?= $data["username"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Email Address</b>: <?= $data["contactDetail"]["emailAddress"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Phone Number</b>: <?= $data["contactDetail"]["mobileNumber"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 100px;">User Role</b>: <?= $data["roles"][0]["name"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 90px;">User Branch</b>: <?= $data["branch"] ?></a>
                                            
                                            <form method="post" action="update.php">
                                                <a class="list-group-item"><b style="padding-right: 80px;">Change Role</b>: 
                                            <select id="userRole" onchange="Status()" class="btn btn-clipboard" name="update_user_role" autocomplete="off" placeholder="" >
                                              <option>Select Role</option>
                                                    <?php                     
                                                    
                                                    foreach ($roles_data as $role) {
                                                    echo "<option value='$role[id]'>$role[name]</option>";
                                                    }
                                                    
                                                    ?>
                                             </select> 
                                           <!-- <textarea id="comment_reason" placeholder = "Reason for rejection" name= "reason" rows="2" cols="100" Style = "border-radius: 0.38em; margin-left: 10px; "></textarea>-->
                                          </a>

                                                <a class="list-group-item"><b style="padding-right: 160px;"></b> 
                                            <input class="form-control" type="hidden" name="userid" required value="<?php echo $_GET['id'] ?>">
                                            <button class="btn btn-success" type = "submit" name= "update" Style = "font-color: white;height: 35px;border-radius: 0.38em;margin-left: 5px;border:none;">Update User</button>
                                            <button class="btn btn-danger" type = "submit" name= "delete" Style = "font-color: white;height: 35px;border-radius: 0.38em;margin-left: 5px;border:none;" onclick="return confirm('Are you sure you want to delete the user?')">Delete User</button>
                                          
                                        </a>
                                            </form>
  



                                        </div>
											</div>
										</div>



										<div
											class="tab-pane fade"
											id="home1"
											role="tabpanel"
										>
										<div class="pd-20">
										<!-- <div class="tab-pane fade" id="fcb_status" role="tabpanel" aria-labelledby="fcb-status-tab"> -->
                                           <!-- <b>Assign user to branch</b> -->
                                           <a class="list-group-item"><b style="padding-right: 100px;">Fullname</b>: <?= $data["firstName"] ?> <?= $data["lastName"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 95px;">Username</b>: <?= $data["username"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Email Address</b>: <?= $data["contactDetail"]["emailAddress"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Phone Number</b>: <?= $data["contactDetail"]["mobileNumber"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 100px;">User Role</b>: <?= $data["roles"][0]["name"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 90px;">User Branch</b>: <?= $data["branch"] ?></a>
                                            
                                            <form method="post" action="update_user_branch.php">
                                                <a class="list-group-item"><b style="padding-right: 80px;">Assign Branch</b>: 
                                            <select id="userBranch" onchange="Status()" class="btn btn-clipboard" name="update_user_branch" autocomplete="off" placeholder="" >
                                              <<option>Select Branch</option>
                                                    <?php                     
                                                    
                                                    foreach ($branch_data as $branch) {
                                                    echo "<option value='$branch[branchName]'>$branch[branchName]</option>";
                                                    }
                                                    
                                                    ?>
                                             </select> 
                                           <!-- <textarea id="comment_reason" placeholder = "Reason for rejection" name= "reason" rows="2" cols="100" Style = "border-radius: 0.38em; margin-left: 10px; "></textarea>-->
                                          </a>

                                                <a class="list-group-item"><b style="padding-right: 160px;"></b> 
                                            <input class="form-control" type="hidden" name="userid" required value="<?php echo $_GET['id'] ?>">
                                            <button class="btn btn-success" type = "submit" name= "update" Style = "font-color: white;height: 35px;border-radius: 0.38em;margin-left: 5px;border:none;">Update User Branch</button>
                                          </a>
                                            </form>
                                       <!-- </div> -->
										</div>

										</div>


										<div class="tab-pane fade" id="contact" role="tabpanel">
											<div class="pd-20">

											<a class="list-group-item"><b style="padding-right: 100px;">Fullname</b>: <?= $data["firstName"] ?> <?= $data["lastName"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 95px;">Username</b>: <?= $data["username"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Email Address</b>: <?= $data["contactDetail"]["emailAddress"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Phone Number</b>: <?= $data["contactDetail"]["mobileNumber"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 100px;">User Role</b>: <?= $data["roles"][0]["name"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 90px;">User Branch</b>: <?= $data["branch"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 90px;">User Group</b>: <?= $data["creditCommitGroup"] ?></a>
                                            
                                            <form method="post" action="update_user_group.php">
                                                <a class="list-group-item"><b style="padding-right: 50px;">Committee group</b>: 
                                                    <select id="setCommit" onchange="chooseCommit()" class="btn btn-clipboard" name="creditCommitGroup" autocomplete="off" placeholder="" >
                                                    <option value="non-selected">Select Option</option>
                                                    <option value="branch"> Branch Credit Commit </option>
                                                    <option value="management"> Management Credit Commit </option>
                                                    <option value="head_office"> HO Credit Commit </option>
                                                    <option value="board"> Board Credit Commit </option>
                                                </select>
                                             </select> 
                                          </a>

                                                <a class="list-group-item"><b style="padding-right: 160px;"></b> 
                                            <input class="form-control" type="hidden" name="userid" required value="<?php echo $_GET['userid'] ?>">
                                            <button class="btn btn-success" type = "submit" name= "update" Style = "font-color: white;height: 35px;border-radius: 0.38em;margin-left: 5px;border:none;">Update Commitee Group</button>
                                          </a>
                                            </form>

										</div>
										</div>
										<div class="tab-pane fade" id="contact1" role="tabpanel">
											<div class="pd-20">
											<a class="list-group-item"><b style="padding-right: 100px;">Fullname</b>: <?= $data["firstName"] ?> <?= $data["lastName"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 95px;">Username</b>: <?= $data["username"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Email Address</b>: <?= $data["contactDetail"]["emailAddress"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 65px;">Phone Number</b>: <?= $data["contactDetail"]["mobileNumber"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 100px;">User Role</b>: <?= $data["roles"][0]["name"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 90px;">User Branch</b>: <?= $data["branch"] ?></a>
                                            <a class="list-group-item"><b style="padding-right: 90px;">User Group</b>: <?= $data["creditCommitGroup"] ?></a>
                                            
                                            <form method="post" action="update_user_signature.php" enctype="multipart/form-data">
                                                <a class="list-group-item"><b style="padding-right: 30px;">Employee Signature</b>: 
                                                <input type="file" name="file" id="file" multiple="multiple" >
                                                 </a>

                                            <a class="list-group-item"><b style="padding-right: 160px;"></b>
                                            <input class="form-control" type="hidden" name="firstName" required value="<?php echo $data["firstName"]?>">
                                            <input class="form-control" type="hidden" name="lastName" required value="<?php echo $data["lastName"]?>">
                                            <input class="form-control" type="hidden" name="branch" required value="<?php echo $data["branch"]?>">
                                            <input class="form-control" type="hidden" name="role" required value="<?php echo $data["roles"][0]["name"]?>">
                                            <input class="form-control" type="hidden" name="userId" required value="<?php echo $_GET['userid'] ?>">
                                            <button class="btn btn-success" type = "submit" name= "upload" Style = "font-color: white;height: 35px;border-radius: 0.38em;margin-left: 5px;border:none;">Sign</button>
                                          </a>
                                            </form>
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
					

						</div>
					

					<!-- success Popup html Start -->
					<div
						class="modal fade"
						id="success-modal"
						tabindex="-1"
						role="dialog"
						aria-labelledby="exampleModalCenterTitle"
						aria-hidden="true"
					>
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body text-center font-18">
									<h3 class="mb-20">Form Submitted!</h3>
									<div class="mb-30 text-center">
										<img src="vendors/images/success.png" />
									</div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
									do eiusmod
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
					<!-- success Popup html End -->
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
		<script src="../vendors/scripts/core.js"></script>
		<script src="../vendors/scripts/script.min.js"></script>
		<script src="../vendors/scripts/process.js"></script>
		<script src="../vendors/scripts/layout-settings.js"></script>
		<script src="../src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="../vendors/scripts/steps-setting.js"></script>

     
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
