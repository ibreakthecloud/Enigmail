<!-- Author: Harshvardhan Karn -->
<!DOCTYPE html>
<html ng-app="spa">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enig-mail</title>
<!-- AngularJS -->
<script type="text/javascript" src="asset/js/angular.js"></script>
<!-- JQuery -->
<script type="text/javascript" src="asset/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- navbar js -->
<script type="text/javascript" src="asset/js/navbar.js"></script>
<!-- compose mail js -->
<script type="text/javascript" src="asset/js/mail.js"></script>
<!-- ANgular App -->
<script type="text/javascript" src="asset/js/app.js"></script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!-- Bootstrap-theme CSS -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
<!-- Style CSS -->
<link rel="stylesheet" type="text/css" href="asset/css/style.css">


</head>
<body onload="loaded()">


<!-- The TopBar -->
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a id="mynavbar-header" class="navbar-brand" style="padding-left: 50px;">Enigma</a>
			<div class="user-menu">
			 <a href="">User</a>
				<ul class="dropdown pull-right">
					<li><a href="#">Logout</a></li>
				</ul>				
			</div>
		</div>
	</div>
	
</nav>
<!-- Compose mail -->

<div id="mycompose" class="compose-mail">
<a href="#" class="closemail" onclick="closecompose()"><i class="glyphicon glyphicon-chevron-down"></i></a>
	<div class="compose-mail-content container-fluid"> 
	<?php include('compose.php'); ?>
	</div>
</div>
<!-- end Compose mail -->

<!-- The NavBar -->
<div id = "mycollapsedbar" class="collapsedbar" onclick="opennav()" onmouseover="opennav()">
	<!-- <a href="javascript:void(0)" class="openbtn"><span class="glyphicon glyphicon-triangle-right"></span></a> -->
	<a href="javascript:void(0)"><span class="glyphicon stroked glyphicon-edit" onclick="composemail()" style="color: yellow;"></span></a>
	<a href=""><span class="glyphicon glyphicon-inbox"></span></a>
	<a href="#"><span class="glyphicon glyphicon-folder-open"></span></a>
	<a href="#"><span class="glyphicon glyphicon-share-alt"></span></a>		
</div>
<div id = "mysidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a>
	<a href="javascript:void(0)" onclick="composemail()"><span class="glyphicon glyphicon-edit" style="color: yellow;"> Compose</span></a>
	<a href=""><span class="glyphicon glyphicon-inbox"> Inbox</span></a>
	<a href="#"><span class="glyphicon glyphicon-folder-open"> Draft</span></a>
	<a href="#"><span class="glyphicon stroked glyphicon-share-alt"> Sent</span></a>
</div>
<!-- <span >
</span> -->
<!-- The main  -->
<div id="main" class="container-fluid" onmouseover="closenav()">
	
<div class="well container-fluid inbox-main">
	<div class="container-fluid jumbotron">
		<div class="inbox-tools">
			<div class="inbox-tools-element">
				<span class="glyphicon glyphicon-edit"> Edit</span>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th><input type="checkbox" name="select-all"></th>
						<th>Date</th>
						<th>Senders Name</th>
						<th>Subject</th>
						<th>Message</th>
					<tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox" name="select-this"></td>
						<td>27/03/2017</td>
						<td>John Doe</td>
						<td>Test mail</td>
						<td>Sent from PiPhone To check the mailing system</td>
					</tr>
				</tbody>
			</table>
		</div>
		
	</div>	
</div>






</div>
<!-- Footer -->
<div class="footer">
	<div class="base-line">
	Harshvardhan Karn - codebazar.xyz ©2016
	</div>
</div>
<div class="loader">
	<img src="images/loading.gif">
</div>


<script type="text/javascript">
	$(window).load(function)
	{
		$("loader").fadeOut("fast");
	});
</script>
</body>
</html>