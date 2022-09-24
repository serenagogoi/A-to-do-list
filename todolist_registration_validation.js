function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();


    var password = document.forms['myForm']["password"].value;

    var cpassword = document.forms['myForm']["confirm_password"].value;
    if (cpassword != password){
        seterror("inputPassword", "*Password and Confirm password should match!");
        returnval = false;
    }

    return returnval;
}

