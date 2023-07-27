<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost:7878/api/utg/access_logs");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_response = curl_exec($ch);
curl_close($ch);
$data = json_decode($server_response, true);

?>
<div class="card-box mb-30">
	<div class="pd-20">
		<h4 class="text-blue h4">Access Logs</h4>
	</div>
	<div class="pb-20">
		<table class="data-table table stripe hover multiple-select-row nowrap">
			<thead>
				<tr>
                
					<th class="table-plus datatable-nosort">Full Name</th>
					<th>Branch</th>					
					<th>Role</th>
					<th>Time Logged</th>
					<th>Activity</th>	
					<th>Device Info</th>									
					<th class="datatable-nosort">Ip Address</th>
					<th class="datatable-nosort">Action</th>
					<!-- <th class="datatable-nosort">Action</th> -->
				</tr>
			</thead>
			<tbody>
			<?php 

							foreach($data as $application):
                                $date = htmlspecialchars ($application["createdAt"]);
                                $createDate = new DateTime($date);
                            ?>
								<tr>
                                <td><?= $createDate->format('d-M-Y') ?></td>
                              <td><?= htmlspecialchars ($application["FullName"])." ".htmlspecialchars ($application["lastName"]) ?></td>
                              <td><?= htmlspecialchars ($application["Role"]) ?></td>
                              <td><?= "$ ".htmlspecialchars ($application["timeLogged"].".00" )?></td>
                              <td><?= htmlspecialchars($application["avtivity"])." months" ?></td>

                              <td><?= htmlspecialchars($application["deviceInfo"]) ?></td>


                              <td><?= htmlspecialchars($application["ipAddress"]) ?></td>
                              <!-- <td><a href = "client_details.php?id=<?=$application["id"] ?>&userid=<?=$application["userId"] ?>" style="color: blue;">View loan</td> -->
                                  

					<td>
						<div class="dropdown">
							<a
								class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
								href="#"
								role="button"
								data-toggle="dropdown"
							>
								<i class="dw dw-more"></i>
							</a>
							<div
								class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
							>
								
								<a class="dropdown-item" href="view-campaign.php?id=<?=$application["id"] ?>"
									><i class="dw dw-edit2"></i> View</a
								>
							</div>
						</div>
					</td>
				</tr>
				<?php
			 endforeach;?>
			</tbody>
		</table>
	</div>
</div>