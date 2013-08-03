document.addEventListener("onload",first,false);

function first(){
	c=document.getElementById("can").getContext("2d");
	
	c.fillStyle="black";
	
	c.fillRect(0,0,1000,600);
}