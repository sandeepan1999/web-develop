function validation()
{
    var email = document.myform.Email.value;
    var remail = document.myform.reml.value;
    var fname = document.myform.Name.value;
    var phone = document.myform.phone.value;
    var street = document.myform.strt.value;
    var city = document.myform.city.value;
    var country= document.myform.opt.value;
    var dob = document.myform.dt.value;
    var nat= document.myform.nat.value;
    var pass = document.myform.pass.value;
    var rpass = document.myform.rpass.value;
    var terms = document.getElementsByName("terms1[]");
    var i = 0;


    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var reg_pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/;
    var valid_fname = /^[A-Za-z]+$/;
    if (email == "" || email == "null" || remail == "" || remail == null)
    {
      alert("email should not be empty");
      return false;
    }
    if(!remail.match(mail))
    {
      alert("Enter valid retype email");
      return false;
    }
    if(!email.match(mail))
    {
      alert("Enter valid email");
      return false;
    }
    if(email != remail)
    {
      alert("Email and retype email must be equal");
      return false;
    }
    if(!fname.match(valid_fname))
    {
      alert("Enter valid name");
      return false;
    }
    if(!pass.match(reg_pass))
    {
      alert("Enter valid password, which contains Uppercase, lowercase and special char");
      return false;
    }
    if(!rpass.match(reg_pass))
    {
      alert("Enter valid retype password, which contains Uppercase, lowercase and special char");
      return false;
    }
    if(pass == "" || pass == null || rpass == "" || rpass == null)
    {
      alert("password should not be empty");
      return false;
    }
    if (!pass.match(rpass))
    {
      alert("password and retype password not matching");
      return false;
    }

    if(isNaN(phone))
    {
      alert("Enter valid contact number");
      return false;
    }
    if(phone == "" || phone == null || phone.length!= 10)
    {
      alert("Enter valid phone number of length 10");
      return false;
    }
    if((document.myform.gen[0].checked == false) && (document.myform.gen[1].checked == false))
    {
      alert("Choose gender");
      return false;
    }
    if(!city.match(valid_fname))
    {
      alert("Enter valid city name");
      return false;
    }
    if(!street.match(valid_fname))
    {
      alert("Enter valid street name");
      return false;
    }
    if(dob == null || dob == "")
    {
      alert("Enter valid DOB");
      return false;
    }
    if(country == "select")
    {
      alert("Select your country name");
      return false;
    }
    if(nat == "select")
    {
      alert("Select your nationality");
      return false;
    }
    var hasChecked = false;
    for (i = 0; i < terms.length; i++)
    {
        if(terms[i].checked)
        {
          hasChecked = true;
          break;
        }
    }
    if(hasChecked == false){
      alert("select terms and condition");
      return false;
    }
       return true;
     }
