<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Image Upload</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jscript.php"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<marquee behavior="alternative" direction="left"><h5><b>AB UTNAL, Email:</b>utnal.ab@gmail.com</h5></marquee>
			<div class="col-md-4 col-md-offset-4">
						<div id="msg"></div>
					<!-- <div id="msg"></div> -->
				<div class="panel panel-primary">
					<div class="panel-heading">Upload Image Form</div>
					<div class="panel-body">
						<div class="row">
							<form action="controller.php" method="POST" id="uploadForm">
								<div class="col-md-12"><div class="form-group">
									<input type="file" name="photo" id="photo" class="form-control">
								</div></div>
								<div class="col-md-12"><input type="submit" name="submit" value="Upload Image" id="" class="btn btn-primary pull-right"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-md-4 col-md-offset-4"><a href="" id="remove" class="btn btn-danger btn-xs pull-right">X</a></div>
			<div class="col-md-4 col-md-offset-4" align="center">

				<img src="assets/image/preview.png" style="border:2px solid #ddd; padding:10px; max-height: 250px; max-width:360px; height:auto; width:auto" id="preview" alt="">
				<h5>Image Priview</h5>
			</div>
		</div>
	</body>
	</html>