<?php include 'lib/shout.php'; 
$shout = new shout();

if (isset($_POST['submit'])) {
	$shoutdata = $shout->insertSms($_POST);
}
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//	$shoutdata = $shout->insertSms($_POST);
//}
//else
	//echo "no data";

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- comment -->
	<div class="container">
		<div class="jumbotron">
			<div class="panel panel-default">
			  <div class="panel-body">
			    BASIC SHOUTBOX WITH PHP
			  </div>
				
				<div class="box1 card-1">
					<ul class="list-group">
						<?php $alldata = $shout->getAllData();
							if ($alldata) {
								while($data = $alldata->fetch_assoc()) { ?>
									
									<li class="list-group-item list-group-item-success"> <?php  echo $data['time'] ?> : <b><?php  echo $data['name'] ?></b> <?php echo $data['sms'] ?></li>

								<?php }
							}
						 ?>
						
					</ul>
				</div>

				<div class="box2 card-1">
					
					<form class="form-horizontal" method="post">
					  <div class="form-group">
					    <label for="name" class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="sms" class="col-sm-2 control-label">SMS</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="sms" name="sms" placeholder="Your Massage">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" name="submit" class="btn btn-default">Submit</button>
					    </div>
					  </div>
					</form>
									
				</div>








			  <div class="panel-footer">Source :: <a href="https://github.com/emtiazzahid/shoutbox">github repository link</a>
				<br>
				<a aria-label="Follow @emtiazzahid on GitHub" data-count-aria-label="# followers on GitHub" data-count-api="/users/emtiazzahid#followers" data-count-href="/emtiazzahid/followers" data-style="mega" href="https://github.com/emtiazzahid" class="github-button">Follow @emtiazzahid</a><br>

				<a aria-label="Star emtiazzahid/github-buttons on GitHub" data-count-aria-label="# shoutbox on GitHub" data-count-api="/repos/emtiazzahid/github-buttons#shoutbox" data-count-href="/emtiazzahid/github-buttons/shoutbox" data-style="mega" data-icon="octicon-star" href="https://github.com/emtiazzahid/shoutbox" class="github-button">Star</a>
				<!-- Place this tag in your head or just before your close body tag. -->
				

			  </div>
			</div>
		</div>	  
	</div>

	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>