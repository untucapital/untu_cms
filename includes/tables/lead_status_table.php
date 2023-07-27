<!-- table widget -->
<div class="card-box">
	<div class="pd-20">
		<button class="btn btn-lg btn-primary" style="margin-bottom: 15px;">Add Sector</button>
	</div>
	<!-- <div class="pb-20"> -->
		<table class="data-table table stripe hover multiple-select-row nowrap">
			<thead>
				<tr>
					<th>Creation Date</th>
					<th>Lead Status Name</th>					
					<th>Lead Status Description</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$leadStatus = leadStatus();
					foreach($leadStatus as $data): ?>
				<tr>
					<td><?php echo date('d-M-Y', strtotime($data['createdAt'])) ;?></td>
					<td class="table-plus"><?php echo $data['name'] ;?></td>
					<td><?php echo $data['description'] ;?></td>
					<td>
						<div class="dropdown">
							<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="dw dw-more"></i>
							</a>
							<div
								class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="#" ><i class="dw dw-edit2"></i> Edit</a>
								<a class="dropdown-item" href="#" ><i class="dw dw-delete-3"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<!-- </div> -->
</div>