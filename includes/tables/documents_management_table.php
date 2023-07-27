<!-- table widget -->
<?php 
// include('../session/session.php');
//include('../includes/controllers.php');
?>
<div class="pd-2 text-right">
    <?php if ($_GET['doc'] != "doc_audit") { ?>
            <?php if($_GET['doc'] == "doc_category"){ ?>
                <form action="documents_management_table.php?menu=add_category" method="post">
                    <button class="btn btn-lg btn-primary" type="submit" name="add_category" style="margin-bottom: 15px;"><i class="dw dw-add"></i> Add Category</button>
                </form>
            <?php } else{ ?>
                <form action="documents_management_table.php?menu=add_document" method="post">
                    <button class="btn btn-lg btn-primary" type="submit" name="add_document" style="margin-bottom: 15px;"><i class="dw dw-add"></i> Add Document</button>
                </form>
            <?php } ?>
    <?php } ?>
</div>
<div class="card-box mb-30">
	<div class="pd-20">
		<h4 class="text-blue h4">
			<?php
                if ($doc == 'assign_doc'){
                    echo "Assigned Documents";}
                elseif($doc == 'all_doc'){
                    echo "All Documents";}
                elseif($doc == 'doc_category'){
                    echo "Document Categories";}
                elseif($doc == 'doc_audit'){
                    echo "Documents Audit Trail";}
                else {}
			?>
		</h4>
	</div>
	<div class="pb-20">
        <?php if ($_GET['doc'] != "doc_audit"){ ?>
		<table class="data-table table stripe hover multiple-select-row nowrap">
			<thead>
				<tr>
                    <th>Created Date</th>
					<th>Name</th>
					<th>Category Name</th>
                    <th class="datatable-nosort">Action</th>
					<th>Created By</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$loans = loans($url);
					foreach ($loans as $data): ?>
				<tr>
					<td><?php echo convertDateFormat($data['createdAt']); ?></td>
					<td class="table-plus"><?php echo $data['firstName']; ?> <?php echo $data['lastName']; ?></td>
					<td><?php echo $data['industryCode']; ?></td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"><i class="dw dw-more"></i></a>
                            <?php if ($_GET['doc'] == "assign_doc"){?>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-message-1"></i> Comment</a>
                            </div>
                            <?php } elseif ($_GET['doc'] == "all_doc"){ ?>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-edit"></i> Edit</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-share"></i> Share</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-download"></i> Download</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-edit-2"></i> Update File Version</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-message-1"></i> Comment</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-email"></i> Send Email</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            <?php } elseif ($_GET['doc'] == "doc_category"){ ?>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-edit"></i> Edit</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            <?php } ?>
                        </div>
                    </td>
					<td><?php $user = user(htmlspecialchars($data["assignTo"]));
                        echo $user['firstName'].' '.$user['lastName'];?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
        <?php } else { ?>
        <table class="data-table table stripe hover multiple-select-row nowrap">
            <thead>
            <tr>
                <th>Action Date</th>
                <th>File Name</th>
                <th>Category Name</th>
                <th>Operation</th>
                <th>By Whom</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $loans = loans($url);
            foreach ($loans as $data): ?>
                <tr>
                    <td><?php echo convertDateFormat($data['createdAt']); ?></td>
                    <td class="table-plus"><?php echo $data['firstName']; ?> <?php echo $data['lastName']; ?></td>
                    <td><?php echo $data['industryCode']; ?></td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"><i class="dw dw-more"></i></a>
                            <?php if ($_GET['doc'] == "assign_doc"){?>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-message-1"></i> Comment</a>
                                </div>
                            <?php } elseif ($_GET['doc'] == "all_doc"){ ?>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-edit"></i> Edit</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-share"></i> Share</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-download"></i> Download</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-edit-2"></i> Update File Version</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-message-1"></i> Comment</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-email"></i> Send Email</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            <?php } elseif ($_GET['doc'] == "doc_category"){ ?>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-edit"></i> Edit</a>
                                    <a class="dropdown-item" href="loan_info.php?menu=loan&loan_id=<?php echo $data['id']; ?>&userid=<?php echo $data['userId'] ;?>"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            <?php } ?>
                        </div>
                    </td>
                    <td><?php $user = user(htmlspecialchars($data["assignTo"]));
                        echo $user['firstName'].' '.$user['lastName'];?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
	</div>
</div>