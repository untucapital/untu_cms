<!-- table widget -->
<?php
    

?>
<div class="card-box mb-30">
	<div class="pd-20">
		<h4 class="text-blue h4">
			Schedule BCC Meeting
		</h4>
	</div>
	<div class="pb-20">
		<table class="data-table table stripe hover multiple-select-row nowrap">
			<thead>
				<tr>
					<th>Applied On</th>
					<th>Name</th>					
					<th>Bsn Sector</th>
					<th>Loan Amount</th>
					<th>Tenure</th>
					<th>Boco</th>
					<th>Loan Officer</th>
					<th>Stage</th>										
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$bcc_schedule_meeting = loans('/loanStatusAssessed/ACCEPTED/'.$_SESSION['branch'].'/loan_officer_check_loan');
					foreach ($bcc_schedule_meeting as $schedule): ?>
				<tr>
					<td><?php echo convertDateFormat($schedule['createdAt']); ?></td>
					<td class="table-plus"><?php echo $schedule['firstName']; ?> <?php echo $schedule['lastName']; ?></td>
					<td><?php echo $schedule['industryCode']; ?></td>
					<td><?php echo "$ ".$schedule['loanAmount'].".00"; ?></td>
					<td><?php echo $schedule['tenure']." months"; ?></td>
					<td><?php $boco = user($schedule['loanStatusAssigner']);
                        echo $boco['firstName']." ".$boco['lastName'];
//                        echo $schedule['loanStatusAssigner']; ?><!--</td>-->
					<td><?php echo $schedule['processedBy']; ?></td>
					<td><?php echo $schedule['pipelineStatus']; ?></td>
					<td>
						<div class="dropdown">
							<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown"><i class="dw dw-more"></i></a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="loan_info.php?menu=bcc_schedule&loan_id=<?php echo $schedule['id']; ?>&userid=<?php echo $schedule['userId'] ;?>"><i class="dw dw-note"></i>Schedule Meeting</a>
							</div>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>