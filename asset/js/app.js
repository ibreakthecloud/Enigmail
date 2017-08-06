var app = angular.module("spa",["ngroute"]);
app.config(function ($routeProvider)
{
	$routeProvider
	.when("#!inbox" {templateUrl:"inbox.php"})
	.when("#!draft" {templateUrl: "draft.php"})
	.when("#!sent" {templateUrl: "sent.php"})
});