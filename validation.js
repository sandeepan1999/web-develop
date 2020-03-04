function validate() {

	var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	 var reg_pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/;
	 var valid_fname = /^[A-Za-z]+$/;

	 if(( document.myForm.Name.value == "" )&&(!document.myForm.Name.value.match(valid_fname))) {
			alert( "Please provide valid name!" );
			document.myForm.Name.focus() ;
			return false;
	 }
	 if( (document.myForm.EMail.value == "" )&& (!document.myForm.EMail.value.match(mail))){
			alert( "Please provide your Email!" );
			document.myForm.EMail.focus() ;
			return false;
	 }
	 if( (document.myForm.Pass.value == "" )&&(!document.myForm.Pass.value.match(reg_pass))) {
			alert( "Please provide valid Password!" );
			document.myForm.Pass.focus() ;
			return false;
	 }



	 if( document.myForm.Tel.value == "" || isNaN( document.myForm.Tel.value ) ||
			document.myForm.Tel.value.length != 10 ) {

			alert( "Please provide a Phone number in the format ###### #####." );
			document.myForm.Tel.focus() ;
			return false;
	 }
	 if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
		 document.myForm.Zip.value.length != 6 ) {

		 alert( "Please provide a zip in the format ######." );
		 document.myForm.Zip.focus() ;
		 return false;
	}
	 if((document.myForm.GenM.checked == false) && (document.myForm.GenF.checked == false))
	 {
		 alert("Choose gender");
		 return false;
	 }

	 if((document.myForm.eng.checked == false) && (document.myForm.hin.checked == false) && (document.myForm.tam.checked == false))
	{
		alert("Choose language");
		return false;
	}

	 if( document.myForm.Country.value == "-1" ) {
			alert( "Please provide your country!" );
			return false;
	 }
	 if( document.myForm.Add.value == "" ) {
			alert( "Please provide your Address!" );
			document.myForm.Add.focus() ;
			return false;
	 }
	 return( true );
}
//-->
