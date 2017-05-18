function expand(idElement){
	var accordionPanel = document.getElementById(idElement);
	if(accordionPanel.className.indexOf("w3-show") == -1){
		accordionPanel.className += " w3-show";
	}else{
		accordionPanel.className = accordionPanel.className.replace(" w3-show", "");
	}
}