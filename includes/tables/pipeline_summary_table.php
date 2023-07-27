<!-- Bordered table  start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Branch Pipeline</h4>
                        <p>
                            <code></code>
                        </p>
                    </div>
                </div>
                <table class="table table-striped">
					<thead>
						<tr>

						<th scope="col">#</th>
						<th scope="col">Branch</th>
						<th scope="col">Total Disbursed</th>
						<th scope="col">Pending Disbursement</th>
						<th scope="col">Assessment</th>
						<th scope="col">Prospect</th>
						<th scope="col">Total Pipeline</th>
						<th scope="col">Repeat</th>
						<th scope="col">New</th>
						</tr>
					</thead>
					<tbody>
					<tr>

					<th scope="row">1</th>
					<td>Harare</td>
					<td><?php echo $HarareBranchDisbursed;?></td>
					<td><?php echo $HarareBranchPending; ?></td>
					<td><?php echo $HarareBranchAssessment; ?></td>
					<td><?php echo $HarareBranchProspect; ?></td>
					<td><?php echo $HarareBranchTotal;?></td>
					<td><?php echo $HarareRepeatGlobVar; ?></td>
					<td><?php echo $HarareNewGlobVar; ?></td>
					</tr>
					<tr>
					<th scope="row">2</th>
					<td>Harare A</td>
					<td><?php echo  $HarareBranchADisbursed;?></td>
					<td><?php echo $HarareABranchPending; ?></td>
					<td><?php echo $HarareABranchAssessment; ?></td>
					<td><?php echo $HarareABranchProspect; ?></td>
					<td><?php echo $HarareABranchTotal;?></td>
					<td><?php echo $HarareARepeatGlobVar; ?></td>
					<td><?php echo $HarareANewGlobVar; ?></td>
					</tr>
					<tr>
					<th scope="row">3</th>
					<td>Bulawayo</td>
					<td><?php echo $BulawayoBranchDisbursed;?></td>
					<td><?php echo $BulawayoBranchPending ?></td>
					<td><?php echo $BulawayoBranchAssessment ?></td>
					<td><?php echo $BulawayoBranchProspect ?></td>
					<td><?php echo $BulawayoBranchTotal ;?></td>
					<td><?php echo $BulawayoRepeatGlobVar; ?></td>
					<td><?php echo $BulawayoNewGlobVar; ?></td>
					</tr>
					<tr>
					<th scope="row">4</th>
					<td>Gweru</td>
					<td><?php echo $GweruBranchDisbursed ;?></td>
					<td><?php echo $GweruBranchPending ;?></td>
					<td><?php echo $GweruBranchAssessment ;?></td>
					<td><?php echo $GweruBranchProspect ;?></td>
					<td><?php echo $GweruBranchTotal;?></td>
					<td><?php echo $GweruRepeatGlobVar; ?></td>
					<td><?php echo $GweruNewGlobVar; ?></td>
					</tr>
					<tr>
					<th scope="row">5</th>
					<td>Gokwe</td>
					<td><?php echo $GokweBranchDisbursed;?></td>
					<td><?php echo $GokweBranchPending; ?></td>
					<td><?php echo $GokweBranchAssessment; ?></td>
					<td><?php echo $GokweBranchProspect; ?></td>
					<td><?php echo $GokweBranchTotal;?></td>
					<td><?php echo $GokweRepeatGlobVar; ?></td>
					<td><?php echo $GokweNewGlobVar; ?></td>
					</tr>


					<?php 
					$RepeatTotal = $HarareRepeatGlobVar + $GweruRepeatGlobVar + $GokweRepeatGlobVar + $HarareARepeatGlobVar + $BulawayoRepeatGlobVar;
					$NewTotal= $HarareNewGlobVar + $GweruNewGlobVar + $GokweNewGlobVar + $HarareANewGlobVar + $BulawayoNewGlobVar;


					$Overal = $RepeatTotal+$NewTotal;

					if ($RepeatTotal && $NewTotal>0){
					$RepeatPercent = ($RepeatTotal/$Overal)*100;
					$NewPercent = ($NewTotal/$Overal)*100 ;
					}else{
					$RepeatPercent =0;
					$NewPercent =0;
					}
					?>


						<tr>
							<th scope="row"> Totals</th>
							<td></td>
							<td><?php echo $DisbursmentTotal;?></td>
							<td><?php echo $PendingTotal ;?></td>
							
							<td><?php echo $AssessmentTotal ;?></td>
							<td><?php echo $PropectTotal;?></td>
							<td><?php echo $total;?></td>
							<td><?php echo $RepeatTotal;?></td>
							<td><?php echo $NewTotal;?></td>
						</tr>



						<tr>
							<th scope="row"></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><?php 
							
						
						echo round($RepeatPercent,2). "%";
							?></td>
							<td><?php 
							echo round($NewPercent,2). "%";
							?></td>
						</tr>
					</tbody>
				</table>
            </div>
            <!-- Bordered table End -->