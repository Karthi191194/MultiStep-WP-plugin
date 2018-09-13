/*masterfront form*/
jQuery(document).ready(function(){
	jQuery("#m-date, #m-startdate").datepicker().datepicker("setDate", new Date());
	jQuery("#m-dob, #m-spousedob, .m-dependentdob").datepicker({  maxDate: new Date() });
/*dependent section dynamic field*/		
	var maxField = 9;
	var addButton = jQuery("#m-dependentadd");
	var wrapper = jQuery("#dependent");
	var fieldHTML = '<div class="dynfield"><div class="col-md-2"><div class="form-group"><input type="text" class="form-control m-dependentname"   placeholder="Name" data-name="name" name="m-dependentname[]" ><p class="m-error m-dependentname-error"  ></p></div></div><div class="col-md-2"><div class="form-group"><input type="text" class="form-control m-dependentdob"  placeholder="DOB" data-name="dob" name="m-dependentdob[]" > <span style="margin-bottom: 0px;">*Please enter the date with <strong>mm/dd/yyyy</strong> format, if added manually.</span><p class="m-error m-dependentdob-error"  ></p></div></div><div class="col-md-1"><div class="form-group"><input type="number" class="form-control m-dependentage"  placeholder="Age" min="0" data-name="age" name="m-dependentage[]" ><p class="m-error m-dependentage-error"  ></p></div></div><div class="col-md-3"><div class="form-group"><textarea rows="1" name="m-dependentaddresscontent[]" placeholder="Address" data-name="address" ></textarea><input type="checkbox" class="m-dependentaddress"  name="m-dependentaddress[]" value="0"><input type="hidden" name="m-dependentaddresshidden[]" value="0"><span>“Same as my address”, if checked this field will be the same as the primary address listed on page 1.</span><p class="m-error m-dependentaddress-error" ></p></div></div><div class="col-md-3"><div class=""><textarea rows="1" name="m-dependentphonecontent[]" placeholder="Phone" data-name="phone"></textarea><input type="checkbox" class="m-dependentphone"  name="m-dependentphone[]" value="0"><input type="hidden" name="m-dependentphonehidden[]" value="0"><span>“Same as my number”, if checked this field will be the same as the primary Phone # listed on page 1.</span><p class="m-error m-dependentphone-error"  ></p></div></div><div class="col-md-1"><button type="button" class="btn btn-danger" id="m-dependentremove"><span class="glyphicon glyphicon-minus"></button></div></div>';
	var x = 1; 
	jQuery(addButton).click(function(){
        if(x < maxField){ 
            x++; 
            jQuery(wrapper).append(fieldHTML); 
			jQuery(".m-dependentdob").datepicker({  maxDate: new Date() });
        }
    });
	jQuery(wrapper).on('click', '#m-dependentremove', function(e){
        jQuery(this).closest('.dynfield').remove(); 
        x--; 
    });
	
/*form validation*/
/*page1*/
jQuery("#information-next").click(function(){
	var nameerror = "";
	var doberror = "";
	var ageerror = "";
	var addresserror = "";
	var phoneerror = "";
	var dateerror = "";
	
	var phoneregex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	var phonevalue = jQuery("#m-phone").val();
	
	var emailregex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	var emailvalue = jQuery("#m-email").val();
	
	var textregex = /^[a-zA-Z\s]*$/;;
	var namevalue = jQuery("#m-name").val();
	
	var dateregex = /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/;
	
	if(jQuery("#m-name").val() == ""){
		nameerror = "Please enter name.";
		jQuery("#m-name").focus();
		jQuery("#m-name-error").show();
		jQuery("#m-name-error").html(nameerror);	
		return false;
	}else if(!textregex.test(namevalue)){
		nameerror = "Please enter alphabets only.";
		jQuery("#m-name").focus();
		jQuery("#m-name-error").show();
		jQuery("#m-name-error").html(nameerror);	
		return false;
	}else{
		nameerror = "";
		jQuery("#m-name-error").html("");
	}
	if(jQuery("#m-email").val() == ""){
		emailerror = "Please enter email.";
		jQuery("#m-email").focus();
		jQuery("#m-email-error").show();
		jQuery("#m-email-error").html(emailerror);	
		return false;
	}else if(!emailregex.test(emailvalue)){
		emailerror = "Please enter valid email.";
		jQuery("#m-email").focus();
		jQuery("#m-email-error").show();
		jQuery("#m-email-error").html(emailerror);	
		return false;
	}else{
		emailerror = "";
		jQuery("#m-email-error").html("");
	}
	if(jQuery("#m-dob").val() == ""){
		doberror = "Please enter DOB.";
		jQuery("#m-dob").focus();
		jQuery("#m-dob-error").show();
		jQuery("#m-dob-error").html(doberror);
		return false;	
	}else if(!dateregex.test(jQuery("#m-dob").val())){
		doberror = "Please enter valid DOB.";
		jQuery("#m-dob").focus();
		jQuery("#m-dob-error").show();
		jQuery("#m-dob-error").html(doberror);
		return false;
	}else{
		doberror = "";
		jQuery("#m-dob-error").html("");
	}
	if(jQuery("#m-age").val() == ""){
		ageerror = "Please enter age.";
		jQuery("#m-age").focus();
		jQuery("#m-age-error").show();
		jQuery("#m-age-error").html(ageerror);
		return false;	
	}else if(jQuery("#m-age").val() < 0){
		ageerror = "Please enter valid age.";
		jQuery("#m-age").focus();
		jQuery("#m-age-error").show();
		jQuery("#m-age-error").html(ageerror);
		return false;
	}else{
		ageerror = "";
		jQuery("#m-age-error").html("");
	}
	if(jQuery("#m-address").val() == ""){
		addresserror = "Please enter address.";
		jQuery("#m-address").focus();
		jQuery("#m-address-error").show();
		jQuery("#m-address-error").html(addresserror);
		return false;	
	}else{
		addresserror = "";
		jQuery("#m-address-error").html("");
	}
	if(jQuery("#m-phone").val() == ""){
		phoneerror = "Please enter phone no.";
		jQuery("#m-phone").focus();
		jQuery("#m-phone-error").show();
		jQuery("#m-phone-error").html(phoneerror);
		return false;	
	}else if(!phoneregex.test(phonevalue)){ 
		phoneerror = "Please enter valid phone no.";
		jQuery("#m-phone").focus();
		jQuery("#m-phone-error").show();
		jQuery("#m-phone-error").html(phoneerror);
		return false;
	}else{
		phoneerror = "";
		jQuery("#m-phone-error").html("");
	}
    if(jQuery("#m-date").val() == ""){
		dateerror = "Please enter date.";
		jQuery("#m-date").focus();
		jQuery("#m-date-error").show();
		jQuery("#m-date-error").html(dateerror);
		return false;	
	}else if(!dateregex.test(jQuery("#m-date").val())){
		dateerror = "Please enter valid  date.";
		jQuery("#m-date").focus();
		jQuery("#m-date-error").show();
		jQuery("#m-date-error").html(dateerror);
		return false;	
	}else{
		dateerror = "";
		jQuery("#m-date-error").html("");
	}
	if(nameerror == "" && emailerror == "" && doberror == "" && ageerror == "" && addresserror == "" && phoneerror == "" && dateerror == ""){
		jQuery('#information').removeClass('active');
		jQuery('#spouse').addClass('active');
		jQuery('.progress .form-sec').attr('aria-valuenow', '40');
		jQuery('.progress .form-sec').css('width', '40%');
		jQuery('.progress .form-sec').text("40%");
	}	
});

/*page2*/
jQuery("#spouse-prev").click(function(){ 
	jQuery('#information').addClass('active');
	jQuery('#spouse').removeClass('active');
	jQuery('.progress .form-sec').attr('aria-valuenow', '20');
	jQuery('.progress .form-sec').css('width', '20%');
	jQuery('.progress .form-sec').text("20%");
});

jQuery("#m-spousedetails").change(function(){
	jQuery("#m-spousedetails-error").html("");
	if(jQuery("#m-spousedetails").val() == "yes"){
		jQuery("#spouse-info").show();
	}else if(jQuery("#m-spousedetails").val() == "no"){
		jQuery("#spouse-info").hide();
	}else{		
	}
});

jQuery("#m-spouseaddress, #m-spousephone").change(function(){
	if(jQuery(this).is(":checked")){
			jQuery(this).val("1");
			jQuery(this).siblings("input[type='hidden']").val("1");
			jQuery(this).siblings("textarea").attr("disabled", true);
			jQuery(this).siblings(".m-error").html("");
	}else{
		jQuery(this).val("0");
		jQuery(this).siblings("input[type='hidden']").val("0");
		jQuery(this).siblings("textarea").attr("disabled", false);
	}
});

jQuery("#spouse-next").click(function(){
	var spousedetailserror = "";
	var spousenameerror = "";
	var spousedoberror = "";
	var spouseageerror = "";
	var spouseaddresserror = "";
	var spousephoneerror = "";
	
	var phoneregex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	var spousephonevalue = jQuery("#m-spousephonecontent").val();
	
	var dateregex = /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/;
	
	var textregex = /^[a-zA-Z\s]*$/;;
	
	if(jQuery("#m-spousedetails").val() == ""){
		spousedetailserror = "Please select spouse's information.";	
		jQuery("#m-spousedetails").focus();
		jQuery("#m-spousedetails-error").show();
		jQuery("#m-spousedetails-error").html(spousedetailserror);
		return false;	
	}else{
		spousedetailserror = "";
		jQuery("#m-spousedetails-error").html("");
	}
	
	if(jQuery("#spouse-info").is(":visible")){
		if(jQuery("#m-spousename").val() == ""){
			spousenameerror = "Please enter spouse's name.";
			jQuery("#m-spousename").focus();
			jQuery("#m-spousename-error").show();
			jQuery("#m-spousename-error").html(spousenameerror);
			return false;	
		}else if(!textregex.test(jQuery("#m-spousename").val())){
			spousenameerror = "Please enter alphabets only.";
			jQuery("#m-spousename").focus();
			jQuery("#m-spousename-error").show();
			jQuery("#m-spousename-error").html(spousenameerror);
			return false;
		}else{
			spousenameerror = "";
			jQuery("#m-spousename-error").html("");
		}
		if(jQuery("#m-spousedob").val() == ""){
			spousedoberror = "Please enter spouse's DOB.";
			jQuery("#m-spousedob").focus();
			jQuery("#m-spousedob-error").show();
			jQuery("#m-spousedob-error").html(spousedoberror);
			return false;	
		}else if(!dateregex.test(jQuery("#m-spousedob").val())){
			spousedoberror = "Please enter vaid spouse's DOB.";
			jQuery("#m-spousedob").focus();
			jQuery("#m-spousedob-error").show();
			jQuery("#m-spousedob-error").html(spousedoberror);
			return false;
		}else{
			spousedoberror = "";
			jQuery("#m-spousedob-error").html("");
		}
		if(jQuery("#m-spouseage").val() == ""){
			spouseageerror = "Please enter spouse's age.";
			jQuery("#m-spouseage").focus();
			jQuery("#m-spouseage-error").show();
			jQuery("#m-spouseage-error").html(spouseageerror);
			return false;	
		}else if(jQuery("#m-spouseage").val() < 0){
			spouseageerror = "Please enter valid spouse's age.";
			jQuery("#m-spouseage").focus();
			jQuery("#m-spouseage-error").show();
			jQuery("#m-spouseage-error").html(spouseageerror);
			return false;	
		}else{
			spouseageerror = "";
			jQuery("#m-spouseage-error").html("");
		}
		if(!jQuery("#m-spouseaddress").is(":checked")){
			if(jQuery("#m-spouseaddresscontent").val() == ""){
				spouseaddresserror = "Please enter spouse address."
				jQuery("#m-spouseaddresscontent").focus();
				jQuery("#m-spouseaddress-error").show();
				jQuery("#m-spouseaddress-error").html(spouseaddresserror);		
				return false;	
			}else{
				spouseaddresserror = "";
				jQuery("#m-spouseaddress-error").html("");
			}
		}
		if(!jQuery("#m-spousephone").is(":checked")){
			if(jQuery("#m-spousephonecontent").val() == ""){
				spousephoneerror = "Please enter spouse phone."
				jQuery("#m-spousephonecontent").focus();
				jQuery("#m-spousephone-error").show();
				jQuery("#m-spousephone-error").html(spousephoneerror);	
                return false; 				
			}else if(!phoneregex.test(spousephonevalue)){
				spousephoneerror = "Please enter valid spouse phone."
				jQuery("#m-spousephonecontent").focus();
				jQuery("#m-spousephone-error").show();
				jQuery("#m-spousephone-error").html(spousephoneerror);	
                return false; 	
			}else{
				spousephoneerror = "";
				jQuery("#m-spousephone-error").html("");
			}
		}
		jQuery('#dependent-tab').addClass('active');
		jQuery('#spouse').removeClass('active');
		jQuery('.progress .form-sec').attr('aria-valuenow', '60');
		jQuery('.progress .form-sec').css('width', '60%');
		jQuery('.progress .form-sec').text("60%");
	}else{
		jQuery('#dependent-tab').addClass('active');
		jQuery('#spouse').removeClass('active');
		jQuery('.progress .form-sec').attr('aria-valuenow', '60');
		jQuery('.progress .form-sec').css('width', '60%');
		jQuery('.progress .form-sec').text("60%");
	}
});

/*page3*/
jQuery("#dependent-prev").click(function(){ 
	jQuery('#spouse').addClass('active');
	jQuery('#dependent-tab').removeClass('active');
	jQuery('.progress .form-sec').attr('aria-valuenow', '40');
	jQuery('.progress .form-sec').css('width', '40%');
	jQuery('.progress .form-sec').text("40%");
});	

jQuery("#m-dependentdetails").change(function(){
	jQuery("#m-dependentdetails-error").html("");
	if(jQuery("#m-dependentdetails").val() == "yes"){
		jQuery("#dependent").show();
	}else if(jQuery("#m-dependentdetails").val() == "no"){
		jQuery("#dependent").hide();
	}else{		
	}
});

jQuery("#dependent").on("change", ".m-dependentaddress, .m-dependentphone", function(){
	if(jQuery(this).is(":checked")){
			jQuery(this).val("1");
			jQuery(this).siblings("input[type='hidden']").val("1");
			jQuery(this).siblings("textarea").attr("disabled", true);
	}else{
		jQuery(this).val("0");
		jQuery(this).siblings("input[type='hidden']").val("0");
		jQuery(this).siblings("textarea").attr("disabled", false);
	}
});

jQuery("#dependent-next").click(function(event){
	var depedentdetailserror = "";
	var depedentnameerror = "";
	var depedentdoberror = "";
	var depedentageerror = "";
	
	var phoneregex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	var textregex = /^[a-zA-Z\s]*$/;;	
	var dateregex = /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/;
	
	
	if(jQuery("#m-dependentdetails").val() == ""){
		depedentdetailserror = "Please select depedent's information.";	
		jQuery("#m-dependentdetails").focus();
		jQuery("#m-dependentdetails-error").show();
		jQuery("#m-dependentdetails-error").html(depedentdetailserror);
		return false;	
	}else{
		depedentdetailserror = "";
		jQuery("#m-dependentdetails-error").html("");
	}
	
	if(jQuery("#dependent").is(":visible")){
		var depedentdetails = true;
		jQuery("#dependent input, #dependent textarea").each(function(){
			jQuery(".m-error").text('');
			//console.log(jQuery(this));
			elt = jQuery(this)[0];
			//console.log(jQuery(elt).data("name"));
			if( jQuery(elt).attr('type') != 'checkbox'){
				var depedentname = jQuery(elt).data("name");
				var depedenterror = "Please enter dependent's "+depedentname+".";
				if( jQuery(elt).val() == "" ){ 
					if(jQuery(elt).is("textarea") && jQuery(elt).siblings("input[type='checkbox']").is(":checked")){ return true; }
					jQuery(elt).focus();
					jQuery(elt).siblings('p').text( depedenterror );
					depedentdetails = false;
					return false;
				}else if(jQuery(elt).data("name") == "name"){
					if(!textregex.test(jQuery(elt).val())){
						depedenterror = "Please enter alphabets only.";
						jQuery(elt).focus();
						jQuery(elt).siblings('p').text( depedenterror );
						depedentdetails = false;
						return false;
					}
				}else if(jQuery(elt).data("name") == "dob"){
					if(!dateregex.test(jQuery(elt).val())){
						depedenterror = "Please enter valid date.";
						jQuery(elt).focus();
						jQuery(elt).siblings('p').text( depedenterror );
						depedentdetails = false;
						return false;
					}
				}else if(jQuery(elt).attr('type') == 'number' && jQuery(elt).val() < 0){
					jQuery(elt).focus();
					jQuery(elt).siblings('p').text( "Please enter valid age." );
					depedentdetails = false;
					return false;
				}else if(jQuery(elt).data("name") == "phone"){
					if(!phoneregex.test(jQuery(elt).val())){
						depedenterror = "Please enter valid phone no.";
						jQuery(elt).focus();
						jQuery(elt).siblings('p').text( depedenterror );
						depedentdetails = false;
						return false;
					}				
				}else{
					// No errors
					jQuery(elt).siblings('.m-error').text("");
				}
				
			}
		});
		if(depedentdetails == true){
			jQuery('#creditcard').addClass('active');
			jQuery('#dependent-tab').removeClass('active');
			jQuery('.progress .form-sec').attr('aria-valuenow', '80');
			jQuery('.progress .form-sec').css('width', '80%');
			jQuery('.progress .form-sec').text("80%");
		}
	}else{
		jQuery('#creditcard').addClass('active');
		jQuery('#dependent-tab').removeClass('active');
		jQuery('.progress .form-sec').attr('aria-valuenow', '80');
		jQuery('.progress .form-sec').css('width', '80%');
		jQuery('.progress .form-sec').text("80%");
	}
	
});

/*page4*/
jQuery("#creditcard-prev").click(function(){ 
	jQuery('#dependent-tab').addClass('active');
	jQuery('#creditcard').removeClass('active');
	jQuery('.progress .form-sec').attr('aria-valuenow', '60');
	jQuery('.progress .form-sec').css('width', '60%');
	jQuery('.progress .form-sec').text("60%");
});	

jQuery("#m-creditcardacceptance, #m-incidentalcharges").change(function(){
	if(jQuery(this).is(":checked")){
			jQuery(this).val("1");
			jQuery(this).siblings("input[type='hidden']").val("1");
	}else{
		jQuery(this).val("0");
		jQuery(this).siblings("input[type='hidden']").val("0");
	}
});

jQuery("#creditcard-next").click(function(){
	var monthlyamounterror = "";
	var incidentalchargeserror = "";
	var startdateerror = "";
	var cardtypeerror = "";
	var creditcardnoerror = "";
	var expdatemmerror = "";
	var expdateyyerror = "";
	var cvcerror = "";
	var cardholdererror = "";
	var creditcardacceptanceerror = "";
	
	var expmmregex = /^(0[1-9]|1[0-2])$/;
	var expmmvalue = jQuery("#m-expdatemm").val();
	var expyyregex = /^[0-9]{2}$/;
	var expyyvalue = jQuery("#m-expdateyy").val();
	var cvcregex = /^[0-9]{3}$/;
	var cvcvalue = jQuery("#m-cvc").val();
	
	var dateregex = /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/;
	
	if(jQuery("#m-monthlyamount").val() == ""){
		monthlyamounterror = "Please enter the monthly amount.";	
		jQuery("#m-monthlyamount").focus();
		jQuery("#m-monthlyamount-error").show();
		jQuery("#m-monthlyamount-error").html(monthlyamounterror);
		return false;	
	}else{
		monthlyamounterror = "";
		jQuery("#m-monthlyamount-error").html("");
	}
	
	if(!jQuery("#m-incidentalcharges").is(':checked')){
		incidentalchargeserror = "Required.";	
		jQuery("#m-incidentalcharges").focus();
		jQuery("#m-incidentalcharges-error").show();
		jQuery("#m-incidentalcharges-error").html(incidentalchargeserror);
		return false;	
	}else{
		incidentalchargeserror = "";
		jQuery("#m-incidentalcharges-error").html("");
	}
	
	if(jQuery("#m-startdate").val() == ""){
		startdateerror = "Please enter the start date.";
		jQuery("#m-startdate").focus();
		jQuery("#m-startdate-error").show();
		jQuery("#m-startdate-error").html(startdateerror);
		return false;	
	}else if(!dateregex.test(jQuery("#m-startdate").val())){
		startdateerror = "Please enter valid start date.";
		jQuery("#m-startdate").focus();
		jQuery("#m-startdate-error").show();
		jQuery("#m-startdate-error").html(startdateerror);
		return false;
	}else{
		startdateerror = "";
		jQuery("#m-startdate-error").html("");
	}
	if(jQuery("#m-cardtype").val() == ""){
		cardtypeerror = "Please enter the card type.";
		jQuery("#m-cardtype").focus();
		jQuery("#m-cardtype-error").show();
		jQuery("#m-cardtype-error").html(cardtypeerror);
		return false;	
	}else{
		cardtypeerror = "";
		jQuery("#m-cardtype-error").html("");
	}
	if(jQuery("#m-creditcardno").val() == ""){
		creditcardnoerror = "Please enter the credit card no.";
		jQuery("#m-creditcardno").focus();
		jQuery("#m-creditcardno-error").show();
		jQuery("#m-creditcardno-error").html(creditcardnoerror);
		return false;	
	}else{
		creditcardnoerror = "";
		jQuery("#m-creditcardno-error").html("");
	}
	if(jQuery("#m-expdatemm").val() == ""){
		expdatemmerror = "Please enter the expiration month.";
		jQuery("#m-expdatemm").focus();
		jQuery("#m-expdatemm-error").show();
		jQuery("#m-expdatemm-error").html(expdatemmerror);
		return false;	
	}else if(!expmmregex.test(expmmvalue)){
		expdatemmerror = "Please enter valid expiration month.";
		jQuery("#m-expdatemm").focus();
		jQuery("#m-expdatemm-error").show();
		jQuery("#m-expdatemm-error").html(expdatemmerror);
		return false;	
	}else{
		expdatemmerror = "";
		jQuery("#m-expdatemm-error").html("");
	}
	if(jQuery("#m-expdateyy").val() == ""){
		expdateyyerror = "Please enter the expiration year.";
		jQuery("#m-expdateyy").focus();
		jQuery("#m-expdateyy-error").show();
		jQuery("#m-expdateyy-error").html(expdateyyerror);
		return false;	
	}else if(!expyyregex.test(expyyvalue)){
		expdateyyerror = "Please enter valid expiration year.";
		jQuery("#m-expdateyy").focus();
		jQuery("#m-expdateyy-error").show();
		jQuery("#m-expdateyy-error").html(expdateyyerror);
		return false;		
	}else{
		expdateyyerror = "";
		jQuery("#m-expdateyy-error").html("");
	}
	if(jQuery("#m-cvc").val() == ""){
		cvcerror = "Please enter the CVC.";
		jQuery("#m-cvc").focus();
		jQuery("#m-cvc-error").show();
		jQuery("#m-cvc-error").html(cvcerror);
		return false;	
	}else if(!cvcregex.test(cvcvalue)){
		cvcerror = "Please enter valid CVC.";
		jQuery("#m-cvc").focus();
		jQuery("#m-cvc-error").show();
		jQuery("#m-cvc-error").html(cvcerror);
		return false;			
	}else{
		cvcerror = "";
		jQuery("#m-cvc-error").html("");
	}
	if(jQuery("#m-cardholdername").val() == ""){
		cardholdererror = "Please enter cardholder's name.";
		jQuery("#m-cardholdername").focus();
		jQuery("#m-cardholdername-error").show();
		jQuery("#m-cardholdername-error").html(cardholdererror);
		return false;	
	}else{
		cardholdererror = "";
		jQuery("#m-cardholdername-error").html("");
	}
		
	if(!jQuery("#m-creditcardacceptance").is(':checked')){
		creditcardacceptanceerror = "You need to authorize ACCESS FAMILY MEDICINE to automatically bill the card.";	
		jQuery("#m-creditcardacceptance").focus();
		jQuery("#m-creditcardacceptance-error").show();
		jQuery("#m-creditcardacceptance-error").html(creditcardacceptanceerror);
		return false;	
	}else{
		creditcardacceptanceerror = "";
		jQuery("#m-creditcardacceptance-error").html("");
	}
	
	
	if(monthlyamounterror == "" && incidentalchargeserror == "" && startdateerror == "" && cardtypeerror == "" && creditcardnoerror == "" && expdatemmerror == "" && expdateyyerror == "" && cvcerror == "" && cardholdererror == "" && creditcardacceptanceerror == ""){
		jQuery('#provider').addClass('active');
		jQuery('#creditcard').removeClass('active');
		jQuery('.progress .form-sec').attr('aria-valuenow', '100');
		jQuery('.progress .form-sec').css('width', '100%');
		jQuery('.progress .form-sec').text("100%");
	}
});
/*page5*/
jQuery("#provider-prev").click(function(){ 
	jQuery('#creditcard').addClass('active');
	jQuery('#provider').removeClass('active');
	jQuery('.progress .form-sec').attr('aria-valuenow', '80');
	jQuery('.progress .form-sec').css('width', '80%');
	jQuery('.progress .form-sec').text("80%");
});	
jQuery("#m-submit").click(function(){
	var providernameerror = "";
	var provideraddresserror = "";
	var providerphoneerror = "";
	var providerfaxerror = "";
	
	var providerphoneregex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	var providerphonevalue = jQuery("#m-providerphone").val();
	
	
	
	if(jQuery("#m-providername").val() == ""){
		providernameerror = "Please enter provider's name.";
		jQuery("#m-providername").focus();
		jQuery("#m-providername-error").show();
		jQuery("#m-providername-error").html(providernameerror);	
		return false;
	}else{
		providernameerror = "";
		jQuery("#m-providername-error").html("");
	}
	if(jQuery("#m-provideraddress").val() == ""){
		provideraddresserror = "Please enter provider's address.";
		jQuery("#m-provideraddress").focus();
		jQuery("#m-provideraddress-error").show();
		jQuery("#m-provideraddress-error").html(provideraddresserror);
		return false;	
	}else{
		provideraddresserror = "";
		jQuery("#m-provideraddress-error").html("");
	}
	if(jQuery("#m-providerphone").val() == ""){
		providerphoneerror = "Please enter provider's phone.";
		jQuery("#m-providerphone").focus();
		jQuery("#m-providerphone-error").show();
		jQuery("#m-providerphone-error").html(providerphoneerror);	
		return false;
	}else if(!providerphoneregex.test(providerphonevalue)){
		providerphoneerror = "Please enter valid provider's phone.";
		jQuery("#m-providerphone").focus();
		jQuery("#m-providerphone-error").show();
		jQuery("#m-providerphone-error").html(providerphoneerror);	
		return false;
	}else{
		providerphoneerror = "";
		jQuery("#m-providerphone-error").html("");
	}
	if(jQuery("#m-providerfax").val() == ""){
		providerfaxerror = "Please enter provider's fax.";
		jQuery("#m-providerfax").focus();
		jQuery("#m-providerfax-error").show();
		jQuery("#m-providerfax-error").html(providerfaxerror);
		return false;	
	}else{
		providerfaxerror = "";
		jQuery("#m-providerfax-error").html("");
	}
	

		jQuery('#reading1').addClass('active');
		jQuery('#provider').removeClass('active');
		jQuery('.form-sec').hide();
		jQuery('.reading-sec').show();	
});	

/*Patient 1 section Prev*/
jQuery("#reading1-prev").click(function(){ 
	jQuery('#provider').addClass('active');
	jQuery('#reading1').removeClass('active');
	jQuery('.reading-sec ').hide();
	jQuery('.form-sec ').show();
});

/*submit*/
jQuery("#readingsubmit").click(function(){
	var mformData = jQuery('#master-front-form').serializeArray(); 
	var readingError = "<p class='m-error'>Please ensure you have read and understand this information.</p>";
		
	if(!jQuery("#reading17-terms").is(":checked")){
		jQuery("#reading17-terms").parent().append(readingError);
	}
	else{
		jQuery("#reading17-terms").siblings("p").remove();
		jQuery.ajax({
			type : 'POST',
			url  : master_formajax.ajaxurl,
			data : {action : 'masterform', formdata: mformData},
			beforeSend : function(){ jQuery("#readingsubmit").attr("disabled", true);jQuery("#m-loader").show(); },
			success: function(response){ 
				if(response == 1){
					jQuery("#reading17").hide();
					jQuery("#m-thankyou").show();
					jQuery(".reading-sec").hide();					
				}
			}
		});
	}
});



});

/*reading page validation*/
function readingPrev(n){
	var currentPage = n+1;
	jQuery("#reading"+currentPage).hide();
	jQuery("#reading"+n).show();
}
function readingNext(n){
	var currentPage = n-1;
	jQuery("#reading"+currentPage+"-terms").siblings("p").remove();
	var readingError = "<p class='m-error'>Please ensure you have read and understand this information.</p>";
	if(!jQuery("#reading"+currentPage+"-terms").is(":checked")){
		jQuery("#reading"+currentPage+"-terms").parent().append(readingError);
	}else{
		jQuery("#reading"+currentPage).hide();
		jQuery("#reading"+n).show();
	}
}


