<?php
include('model.php');
if (isset($_FILES['photo']['name'])) {
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	$date = $date->format('d-m-Y h:i:s');
	$data = ['photo'=>$_FILES['photo']['name'],'created_date'=>$date];
	if($obj->insert('user_tbl',$data)){
		move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/image/'.basename($_FILES['photo']['name']));
		echo '<div id="alert" class="alert alert-dismissible alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Well done! Image Uploaded Successfully</strong> 
				</div>';
	}
}
