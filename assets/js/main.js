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


function subscribe(element,mail){

    var mailformat = /^\w([\.-]?\w+)*@\w+([\.-]?\w)*(\.\w{2,3})+$/;

    if(mail.value.match(mailformat))  {

        element.classList.add("btn-success");
        element.classList.remove("btn-danger");
        element.innerHTML = "Subscribed";
        document.form1.email.focus();
        return true;
    }
    else  {
        alert("You have entered an invalid email address!");
        document.form1.email.focus();
        return false;
    }
}