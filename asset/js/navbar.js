function opennav() 
{
	document.getElementById('mysidenav').style.width="250px";
	document.getElementById('main').style.marginLeft="250px";
	// document.getElementById('main').style.marginRight="50px";
	document.getElementById('mynavbar-header').style.paddingLeft="250px";
	document.getElementById('mynavbar-header').style.fontSize="20px";
}

function closenav()
{
	document.getElementById('mysidenav').style.width="0px";
	document.getElementById('main').style.marginLeft="50px";
	// document.getElementById('main').style.marginRight="0px";
	document.getElementById('mynavbar-header').style.paddingLeft="50px";
	document.getElementById('mynavbar-header').style.fontSize="30px";	
}