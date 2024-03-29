<div class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-60 col-120" style="margin-bottom: 30px;">
				<p><i>Note: this website is for demo only, the results cannot be used in any clinics.</i></p>
				<p>This work intends to provide comprehensive stroke diagnosis based on CT scans, the system will predict the category, location, and severity of the stroke.</p>
				<p>To cite the paper:<br>
					@inproceedings{,<br>
						&nbsp;&nbsp;&nbsp;&nbsp;title={},<br>
						&nbsp;&nbsp;&nbsp;&nbsp;author={},<br>
						&nbsp;&nbsp;&nbsp;&nbsp;year={}<br>
					}
				</p>
				<p>Uploading instructions:
					Please upload <b>.zip</b> file containing CT scan slices with filename in numeric order, for example:<br>
					&#8212;CT_scans.zip<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&#8212;1.jpg<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&#8212;2.jpg<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&#8212;3.jpg<br>
					&nbsp;&nbsp;&nbsp;&nbsp;...
				</p>

				<div style="text-align: center;">
					<div style="position: relative; border: 1px dashed black; border-radius: 8px; width: 100%; height: 80px; text-align: center; cursor: pointer; background-color: #EEEEEE;"  onclick="document.getElementById('ct_upload').click();" ondragover="allowDrop(event)" ondrop="drop(event)">
						<div id="ct_upload_filename" style="margin: 0; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
							Click this box to choose file or drag file here.
						</div>
					</div>
					<input name="ct" type="file" value="ct" id="ct_upload" style="display: none;" onchange="document.getElementById('ct_upload_filename').innerHTML=this.files[0].name;">
					<button class="my-button" style="margin-top: 20px;" onclick="submit_ct_scans()">Upload</button>
				</div>
			</div>
			<div class="col-lg-60 col-120" id="diagnosis_results" style="border: 1px solid grey; box-shadow: 4px 4px grey;">
				<div class="row" style="margin-bottom: 30px;">
					<div class="col-120" style="text-align: center;">
						<h3>Stroke Diagnosis Report</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<script type="text/javascript">
	var num_imgs = 0;
	var current_img = 0;

	function submit_ct_scans() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('diagnosis_results').innerHTML = xhttp.responseText;
				now = new Date();
				currentDateTime = now.toLocaleString();
				document.getElementById("reported_time").innerHTML = currentDateTime;
			}
		};
		xhttp.open("POST", "requests/submit_ct_scans.php", true);
		xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		now = new Date();
		currentDateTime = now.toLocaleString();
		xhttp.send("send_time=" + currentDateTime);
	}

	function open_zoomin_modal(img_id, total) {
		current_img = img_id;
		num_imgs = total;
		document.getElementById('zoomin_modal').style.display = 'block';
		display_img();
	}

	function close_zoomin_modal() {
		document.getElementById('zoomin_modal').style.display = 'none';
	}

	function display_img() {
		document.getElementById('zoomin_modal_title').innerHTML = '<b>' + current_img + ' / ' + num_imgs + '</b>';

		imgs = document.getElementsByClassName('zoomin_modal_imgs');
		for (i=0; i<imgs.length; i++) {
			imgs[i].style.display = 'none';
		}
		document.getElementById('zoomin_modal_img' + current_img).style.display = 'inline';
	}

	document.addEventListener("keydown", function (event) {
		if (event.keyCode == 37) left();
		if (event.keyCode == 39) right();
	});

	function left() {
		if (current_img > 1) {
			current_img -= 1;
		}
		else {
			current_img = num_imgs;
		}

		display_img();
	}

	function right() {
		if (current_img < num_imgs) {
			current_img += 1;
		}
		else {
			current_img = 1;
		}

		display_img();
	}

	function allowDrop(ev) {
		ev.preventDefault();
	}

	function drop(ev) {
		ev.preventDefault();
		files = ev.dataTransfer.files;
		document.getElementById("ct_upload").files = files;
		document.getElementById('ct_upload_filename').innerHTML = files[0].name;
	}
</script>