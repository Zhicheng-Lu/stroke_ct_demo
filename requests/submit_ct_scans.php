<div class="row" style="margin-bottom: 20px;">
	<div class="col-120" style="text-align: center;">
		<h3>Stroke Diagnosis Report</h3>
	</div>
</div>

<div class="row" style="width: 100%;">
	<div class="col-120">
		<div style="display: inline-block; width: 120px;">
			<b>Registered on:</b>
		</div>
		<div style="display: inline-block;"><?php echo $_POST['send_time']; ?></div>
	</div>
	<div class="col-120">
		<div style="display: inline-block; width: 120px;">
			<b>Reported on:</b>
		</div>
		<div style="display: inline-block;" id="reported_time">
		</div>
	</div>
</div>

<div class="row justify-content-center" style="width: 100%;">
	<div class="col-120"><b>Original Scans (click to zoom-in):</b></div>
	<?php
	for ($i = 1; $i <= 4; $i++) {
		echo '
	<div class="col-15" style="text-align: center; padding: 2px;">
		<figure style="cursor: pointer;" onclick="open_zoomin_modal('.$i.', 4)">
			<img style="width: 100%;" src="images/original/'.$i.'.jpg">
			<figcaption>'.$i.'</figcaption>
		</figure>
	</div>';
	}
	?>
</div>

<div class="row" style="margin-top: 0px;">
	<div class="col-120" style="background-color: #D3D3D3; border-radius: 20px;">
		<b>1. Stroke Type:</b>
	</div>
	<div class="col-120">Hemorrhagic stroke.</div>
</div>

<div class="row justify-content-center" style="margin-top: 10px;">
	<div class="col-120" style="background-color: #D3D3D3; border-radius: 20px; margin-bottom: 10px;">
		<b>2. Stroke Location Highlight (click to zoom-in):</b>
	</div>
	<?php
	for ($i = 1; $i <= 4; $i++) {
		echo '
	<div class="col-15" style="text-align: center; padding: 2px;">
		<figure style="cursor: pointer;" onclick="open_zoomin_modal('.$i.', 4)">
			<img style="width: 100%;" src="images/segmentation/'.$i.'.jpg">
			<figcaption>'.$i.'</figcaption>
		</figure>
	</div>';
	}
	?>
</div>

<div class="row" style="margin-top: 0px; margin-bottom: 50px;">
	<div class="col-120" style="background-color: #D3D3D3; border-radius: 20px;">
		<b>3. Stroke Severity:</b>
	</div>
	<div class="col-120">Severe stroke.</div>
</div>


<div class="row" style="position: absolute; bottom: 0px; width: 100%; color: grey; font-size: 7pt;">
	<div class="col-120" style="text-align: center;">
		<i>Note: this report is for demo only, the results cannot be used in any clinics.</i>
	</div>
</div>



<div id="zoomin_modal" class="modal" style="top: 5%; z-index: 9999;">
	<div class="modal-content col-lg-80 offset-lg-20 col-md-100 offset-md-10">
		<div class="modal-header">
			<div class="row" style="text-align: center;">
				<div class="col-20" onclick="left()" style="cursor: pointer;"><i class="fa fa-chevron-left"></i></div>
				<div id="zoomin_modal_title" class="col-60"></div>
				<div class="col-20" onclick="right()" style="cursor: pointer;"><i class="fa fa-chevron-right"></i></div>
			</div>
			<span class="close" onclick="close_zoomin_modal()" style="top: 5%;">&times;</span>
		</div>
		<div class="modal-body" id="zoomin_modal_body">
			<?php
			for ($i = 1; $i <= 4; $i++) {
				echo '
			<div class="zoomin_modal_imgs" id="zoomin_modal_img'.$i.'" style="display: none; width: 100%;">
				<div class="row">
					<div class="col-md-60" style="text-align: center;">
						<figure>
							<img style="width: 100%;" src="images/original/'.$i.'.jpg">
							<figcaption>Original</figcaption>
						</figure>
					</div>
					<div class="col-md-60" style="text-align: center;">
						<figure>
							<img style="width: 100%;" src="images/segmentation/'.$i.'.jpg">
							<figcaption>Stroke Location Highlight</figcaption>
						</figure>
					</div>
				</div>
			</div>';
			}
			?>
		</div>
	</div>
</div>