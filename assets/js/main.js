function authenticate(){
    document.getElementById("login").submit();

}

function addToCart(element){
	
	element.classList.add("btn-success");
	element.classList.remove("btn-warning");
	
	element.text = "Added";
	
}

function removeItem(element){
	element.parentNode.parentNode.remove();
}