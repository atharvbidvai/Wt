function validateForm(){

    let name = document.forms["myForm"]["username"].value;

    if(name == ""){
        alert("Username Required");
        return false;
    }

    return true;
}
