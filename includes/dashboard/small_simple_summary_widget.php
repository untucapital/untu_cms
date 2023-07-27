<!-- summary widget -->
<div class="row">

	<?php 
	for($i=0; $i < count($widget_title); $i++){ ?>
	<div class="col-xl-4 mb-30">
		<div class="card-box height-100-p widget-style1">
			<div class="d-flex flex-wrap align-items-center">
				
				<div class="widget-data">
					<div class="h4 mb-0"><?php echo $widget_title[$i]; ?></div>
					<div class="weight-600 font-14">Disbursed: <?php echo '$ '.$widget_disburse[$i].'.00'; ?></div>
					<div class="weight-600 font-14">Pipeline: <?php echo '$ '.$widget_pipeline[$i].'.00'; ?></div>
				</div>
			</div>
		</div>
	</div>
	<?php }; ?>
</div>




