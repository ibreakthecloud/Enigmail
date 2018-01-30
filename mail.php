
<!DOCTYPE html>
<html ng-app="blog">
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
<script type="text/javascript" src="asset/js/angular.min.js"></script>
<script type="text/javascript" src="asset/js/main.js"></script>
<script type="text/javascript" src="asset/js/angular-route.min.js"></script>





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
			<a href=" " id="mynavbar-header" class="navbar-brand" style="padding-left: 50px;">Enigma</a>
			<div class="user-menu">
			 <a href=""><i class="glyphicon glyphicon-user"></i></a>
				<ul class="dropdown pull-right">
					<li><a href="logout.php"><i class="glyphicon glyphicon-off" style="padding-right: 15px;"></i></a></li>
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
	<a href=" "><span class="glyphicon glyphicon-inbox"></span></a>
	<a href="javascript:void(0)"><span class="glyphicon stroked glyphicon-edit" onclick="composemail()" style="color: yellow;"></span></a>
	
	<a href="#!/inbox"><span class="glyphicon glyphicon-inbox"></span></a>
	<a href="#!/draft"><span class="glyphicon glyphicon-folder-open"></span></a>
	<a href="#!/sent"><span class="glyphicon glyphicon-share-alt"></span></a>		
</div>
<div id = "mysidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a>
	<a href=" "><span class="glyphicon glyphicon-inbox"> Home</span></a>
	<a href="javascript:void(0)" onclick="composemail()"><span class="glyphicon glyphicon-edit" style="color: yellow;"> Compose</span></a>
	
	<a href="#!/inbox"><span class="glyphicon glyphicon-inbox"> Inbox</span></a>
	<a href="#!/draft"><span class="glyphicon glyphicon-folder-open"> Draft</span></a>
	<a href="#!/sent"><span class="glyphicon stroked glyphicon-share-alt"> Sent</span></a>
</div>
<!-- <span >
</span> -->
<!-- The main  -->

	<div ng-view>
		<!-- ajaxed content here -->
	</div>


<!-- <div id="main" class="container-fluid" onmouseover="closenav()">
	<h1>Enigma Mailing!</h1>
	<div class="container-fluid well">
		This Bootstrap container with Well class!
		This Enigma Mailing Client, a free Open Source template, which needs improvement, I will be glad if you
		make a branch, edit it, debug it, and give pull request, I will commit it ASAP!
		Happy to comply! Hail Hydra! <kbd>;)</kbd>
	</div>

	<div class="container-fluid jumbotron">
		<p>This can be used to place code inside</p>
		<kbd>var a,b;</kbd> or <code>function inception();</code>
	</div>
	<div class="jumbotron container-fluid">
		second last
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	<div class="jumbotron container-fluid">
		Last
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>


</div> -->
<!-- Footer -->
<div class="footer">
	<div class="base-line">
	codebazar.xyz ©2016
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