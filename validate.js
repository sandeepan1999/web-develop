
function validation()
{
    var name = document.forms["RegForm"]["Name"];
    var email = document.forms["RegForm"]["EMail"];
    var phone = document.forms["RegForm"]["tele"];

    var password = document.forms["RegForm"]["Pass"];
    var address = document.forms["RegForm"]["Address"];
    var zip=document.forms["RegForm"]["zip"];

    if (name.value == "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }



    if (email.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }



    if (password.value == "")
    {
        window.alert("Please enter your password");
        password.focus();
        return false;
    }

    if (phone.value == "")
    {
        window.alert("Please enter your telephone number.");
        phone.focus();
        return false;
    }

    if (zip.value == "")
    {
        window.alert("Please enter your zip.");
        zip.focus();
        return false;
    }

    if (address.value == "")
    {
        window.alert("Please enter your address.");
        address.focus();
        return false;
    }
    return true;
}
