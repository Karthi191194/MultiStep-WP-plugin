<div class="container">
   <div class="col-xs-12">
      <h1 class="form-sec m-10">Information Gathering Section</h1>
      <h1 class="reading-sec m-10">Reading Materials Section</h1>
      <div class="progress form-sec ">
         <div class="form-sec progress-bar progress-bar-success progress-bar-striped" role="progressbar"
            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
            20% 
         </div>
      </div>
   </div>
   <form id="master-front-form">
      <div class="tab active" id="information">
         <div class="col-xs-12">
            <h3 class="m-10" >Your Information</h3>
         </div>
         <div class="col-md-6">
            <div class="form-group relative">
               <label for="name">Name</label>
               <input type="text" class="form-control" id="m-name" name="m-name" >
               <p class="m-error" id="m-name-error" ></p>
            </div>
         </div>
		<div class="col-md-6">
            <div class="form-group">
               <label for="name">E-mail</label>
               <input type="text" class="form-control" id="m-email" name="m-email" >
               <p class="m-error" id="m-email-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-dob">DOB(date of birth)</label>
               <input type="text" class="form-control" id="m-dob" name="m-dob" >
			   	<p style="margin-bottom: 0px;">*Please enter the date with <strong>mm/dd/yyyy</strong> format, if added manually.</p>
               <p class="m-error" id="m-dob-error" style="position:relative;" ></p>

            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-age">Age</label>
               <input type="number" class="form-control" id="m-age" name="m-age" min="0" >
               <p class="m-error" id="m-age-error" ></p>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="m-address">Address</label>
               <textarea class="form-control" rows="5" id="m-address" name="m-address" ></textarea>
               <p class="m-error" id="m-address-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-phone">Phone #</label>
               <input type="number" class="form-control" id="m-phone" name="m-phone" min="0" >
               <p class="m-error" id="m-phone-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="date">Date</label>
               <input type="text" class="form-control" id="m-date" name="m-date" >
			   	<p style="margin-bottom: 0px;">*Please enter the date with <strong>mm/dd/yyyy</strong> format, if added manually.</p>
               <p class="m-error" id="m-date-error" ></p>
            </div>
         </div>
         <div class="col-xs-5" style="clear:left;">
            <button type="button" class="btn btn-primary" id="information-prev" >Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>1 / 5</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="information-next" >Next</button>
         </div>
      </div>
      <div class="tab" id="spouse">
         <div class="col-xs-12">
            <h3 class="m-10" >Spouse Information</h3>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="m-spousedetails">My spouse will be included in this membership</label>
               <select class="form-control" id="m-spousedetails" name="m-spousedetails">
                  <option value=""></option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
               <p class="m-error" id="m-spousedetails-error" ></p>
            </div>
         </div>
         <div id="spouse-info" style="display:none">
            <div class="col-md-12">
               <div class="form-group">
                  <label for="m-spousename">Spouse’s Name</label>
                  <input type="name" class="form-control" id="m-spousename" name="m-spousename" >
                  <p class="m-error" id="m-spousename-error" ></p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="m-spousedob">Spouse’s  DOB(date of birth)</label>
                  <input type="text" class="form-control" id="m-spousedob" name="m-spousedob" >
				  <p style="margin-bottom: 0px;">*Please enter the date with <strong>mm/dd/yyyy</strong> format, if added manually.</p>
                  <p class="m-error" id="m-spousedob-error" ></p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="m-spouseage">Spouse’s  Age</label>
                  <input type="number" class="form-control" id="m-spouseage" name="m-spouseage" min="0" >
                  <p class="m-error" id="m-spouseage-error" ></p>
               </div>
            </div>
            <div class="col-md-6" style="clear:left;">
               <div class="form-group">
			      <label for="m-spouseaddresscontent">Spouse’s Address </label>
				  <textarea rows="1" class="form-control" id="m-spouseaddresscontent" name="m-spouseaddresscontent"></textarea>
                  <p class="m-error" id="m-spouseaddress-error" ></p>
                  <input type="checkbox" id="m-spouseaddress" name="m-spouseaddress" value="0">
                  <input type="hidden"  name="m-spouseaddresshidden" value="0">
				  <p>“Same as my address”, if checked this field will be the same as the primary address listed on page 1.</p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
			      <label for="m-spousephonecontent">Spouse’s Phone #</label>
				  <textarea rows="1" class="form-control" id="m-spousephonecontent" name="m-spousephonecontent"></textarea>
                  <p class="m-error" id="m-spousephone-error" ></p>			   
                  <input type="checkbox" id="m-spousephone" name="m-spousephone" value="0">
                  <input type="hidden" name="m-spousephonehidden" value="0">
               <p>“Same as my phone number”, if checked this field will be the same as the primary Phone # listed on page 1.</p>
               </div>
            </div>
         </div>
         <div class="col-xs-5" style="clear:left;">
            <button type="button" class="btn btn-primary" id="spouse-prev">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>2 / 5</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="spouse-next" >Next</button>
         </div>
      </div>
      <div class="tab" id="dependent-tab">
         <div class="col-xs-12">
            <h3 class="m-10" >Dependent(s) Information</h3>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="m-spousedetails">My dependent(s) will be included in this membership</label>
               <select class="form-control" id="m-dependentdetails" name="m-dependentdetails">
                  <option value=""></option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
               <p class="m-error" id="m-dependentdetails-error" ></p>
            </div>
         </div>
         <div  class="m-10" id="dependent" style="display:none;">
            <div class="col-md-2">
               <div class="form-group">
                  <label for="m-dependentname">Name</label>
                  <input type="text" class="form-control m-dependentname" placeholder="Name" data-name="name"  name="m-dependentname[]" >
                  <p class="m-error m-dependentname-error"  ></p>
               </div>
            </div>
            <div class="col-md-2">
               <div class="form-group">
                  <label for="m-dependentdob">DOB(date of birth)</label>
                  <input type="text" class="form-control m-dependentdob" placeholder="DOB"  data-name="dob"  name="m-dependentdob[]"  >
				  	<span style="margin-bottom: 0px;">*Please enter the date with <strong>mm/dd/yyyy</strong> format, if added manually.</span>
                  <p class="m-error m-dependentdob-error"  ></p>
               </div>
            </div>
            <div class="col-md-1">
               <div class="form-group">
                  <label for="m-dependentage">Age</label>
                  <input type="number" class="form-control m-dependentage"  id="m-dependentage" placeholder="Age" data-name="age" name="m-dependentage[]" min="0">
                  <p class="m-error m-dependentage-error"  ></p>
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
					<label for="">Address </label>
					<textarea rows="1" name="m-dependentaddresscontent[]" placeholder="Address" data-name="address" ></textarea>
					<input type="checkbox" class="m-dependentaddress"  name="m-dependentaddress[]" value="0">
					<input type="hidden" name="m-dependentaddresshidden[]" value="0">
					<span>“Same as my address”, if checked this field will be the same as the primary address listed on page 1.</span>
					 <p class="m-error m-dependentaddress-error"  ></p>
               </div>             
            </div>
            <div class="col-md-3">
               <div class="">
			      <label for="">Phone # </label>
				  <textarea rows="1" name="m-dependentphonecontent[]" placeholder="Phone"  data-name="phone" ></textarea>
                  <input type="checkbox" class="m-dependentphone"  name="m-dependentphone[]" value="0">
				  <input type="hidden" name="m-dependentphonehidden[]" value="0">
                  <span>“Same as my number”, if checked this field will be the same as the primary Phone # listed on page 1.</span>
				  <p class="m-error m-dependentphone-error"  ></p>
               </div>
            </div>
            <div class="col-md-1">
               <button type="button" class="btn btn-success" id="m-dependentadd" ><span class="glyphicon glyphicon-plus"></span></button>
            </div>
         </div>
         <div class="col-xs-5" style="clear:left;">
            <button type="button" class="btn btn-primary" id="dependent-prev">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>3 / 5</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="dependent-next" >Next</button>
         </div>
      </div>
      <div class="tab" id="creditcard">
         <div class="col-xs-12">
            <h3 class="m-10" >Credit Card Authorization</h3>
            <p>To enjoy the convenience of automated billing, simply complete the Credit/Debit Card Information section below and sign the form after printing. All requested information is required. Upon approval, you will have the option to make monthly payments or set up a monthly auto-deduction. Payments are made directly through our secure link accessed through your electronic statement sent to your email. Your statement will include monthly fees and incidental charges, which you will receive prior to any payments or deductions.</p>
         </div>
         <div class="col-md-12 m-20">
            <input type="checkbox" id="m-creditcardacceptance" name="m-creditcardacceptance" value="0">
            <input type="hidden"  name="m-creditcardacceptancehidden" value="0">
			<label for="m-creditcardacceptance">I authorize ACCESS FAMILY MEDICINE to automatically bill the card listed below as specified.</label>
            <p class="m-error" id="m-creditcardacceptance-error" ></p>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-monthlyamount">Monthly Amount</label>
               <div class="input-group" style="z-index:0;">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                  <input type="number" class="form-control" id="m-monthlyamount" name="m-monthlyamount" min="0">
               </div>
               <p class="m-error" id="m-monthlyamount-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <input type="checkbox" id="m-incidentalcharges" name="m-incidentalcharges" value="0">
			<input type="hidden"  name="m-incidentalchargeshidden" value="0">
            <label for="m-incidentalcharges">Incidental Charges</label>
            <p class="m-error" id="m-incidentalcharges-error" ></p>
         </div>
         <div class="col-md-6" style="clear:left;">
            <div class="form-group">
               <label for="m-startdate">Start Date</label>
               <input type="text" class="form-control" id="m-startdate" name="m-startdate"  >
			   <p style="margin-bottom: 0px;">*Please enter the date with <strong>mm/dd/yyyy</strong> format, if added manually.</p>
               <p class="m-error" id="m-startdate-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-enddate">End Date</label>
               <input type="text" class="form-control" id="m-enddate" name="m-enddate" value="Upon card member cancellation" readonly>
            </div>
         </div>
         <div class="col-md-6" style="clear:left;">
            <div class="form-group">
               <label for="m-cardtype">Card Type</label>
               <input type="text" class="form-control" id="m-cardtype" name="m-cardtype" >
               <p class="m-error" id="m-cardtype-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-creditcardno">Credit Card Number</label>
               <input type="text" class="form-control" id="m-creditcardno" name="m-creditcardno" >
               <p class="m-error" id="m-creditcardno-error" ></p>
            </div>
         </div>
         <div class="col-md-2" style="clear:left;">
            <div class="form-group">
               <label for="m-expdatemm">Expiration Date [MM]</label>
               <input type="number" class="form-control" id="m-expdatemm" name="m-expdatemm" min="01"  placeholder="MM" >
               <p class="m-error" id="m-expdatemm-error" ></p>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <label for="m-expdateyy">Expiration Date [YY]</label>
               <input type="number" class="form-control" id="m-expdateyy" name="m-expdateyy" min="00"  placeholder="YY" >
               <p class="m-error" id="m-expdateyy-error" ></p>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <label for="m-cvc">CVC (Security Code)</label>
               <input type="number" class="form-control" id="m-cvc" name="m-cvc"  min="0"  placeholder="CVC" >
               <p class="m-error" id="m-cvc-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-cardholdername">Cardholder’s Name (as it appears on the card)</label>
               <input type="text" class="form-control" id="m-cardholdername" name="m-cardholdername"  >
               <p class="m-error" id="m-cardholdername-error" ></p>
            </div>
         </div>
         <div class="col-xs-5" style="clear:left;" >
            <button type="button" class="btn btn-primary" id="creditcard-prev">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>4 / 5</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="creditcard-next" >Next</button>
         </div>
      </div>
      <div class="tab" id="provider">
         <div class="col-xs-12">
            <h3 class="m-10" >
               Previous Provider Information
            </h3>
            <p>In order to get your medical records, please provide the information for your Previous Primary Care Provider.</p>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="m-providername">Provider’s Name</label>
               <input type="name" class="form-control" id="m-providername" name="m-providername" >
               <p class="m-error" id="m-providername-error" ></p>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="m-provideraddress">Provider’s Address</label>
               <textarea class="form-control" rows="5" id="m-provideraddress" name="m-provideraddress" ></textarea>
               <p class="m-error" id="m-provideraddress-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-providerphone">Provider’s Phone #</label>
               <input type="number" class="form-control" id="m-providerphone" name="m-providerphone" min="0" >
               <p class="m-error" id="m-providerphone-error" ></p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="m-providerfax">Provider’s Fax #</label>
               <input type="text" class="form-control" id="m-providerfax" name="m-providerfax" >
               <p class="m-error" id="m-providerfax-error" ></p>
            </div>
         </div>
         <div class="col-xs-5" style="clear:left;">
            <button type="button" class="btn btn-primary" id="provider-prev">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>5 / 5</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="m-submit" >Next</button>
         </div>
      </div>
   </form>
   <div id="reading">
      <div class="tab" id="reading1">
         <div class="col-xs-12">
            <h3 class="m-10" >Patient Agreement: Background</h3>
         </div>
         <div class="col-md-12">
            <ul>
               <li>
                  <p>The CLINIC is a Direct Pay primary care practice (DPC), which delivers primary care services through its physician, Dr. Todd Johnson (Physician). In exchange for certain fees, the CLINIC, agrees to provide You with the Services described in this Agreement at the CLINIC, located at 8101 O Street, Suite 302, Lincoln, Nebraska 68510 on the terms and conditions contained in this Agreement.</p>
               </li>
            </ul>
         </div>
         <div class="col-md-12">
            <input type="checkbox" id="reading1-terms"><label for="reading1-terms">I have read and understand this information.</label>
         </div>
         <div class="col-xs-5" style="clear:left;">
            <button type="button" class="btn btn-primary" id="reading1-prev" >Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>1 / 17</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="reading1-next" onclick="readingNext(2)" >Next</button>
         </div>
      </div>
      <div class="tab" id="reading2">
         <div class="col-xs-12">
            <h3 class="m-10" >Patient Agreement: Definitions</h3>
         </div>
         <div class="col-md-12">
            <ul>
            <li>
               <p>1. Patient. In this Agreement, “Patient” means the persons for whom the Physician shall provide care, and who have signed this agreement or are listed on the document attached as Appendix B, which is a part of this agreement.</p>
            </li>
            <li>
               <p>2. Services. In this Agreement, “Services”, means the collection of services, offered to you by Us in this Agreement. These Services are listed in Appendix A(1), which is attached and a part of this Agreement.</p>
            </li>
            <ul>
         </div>
         <div class="col-md-12">
            <input type="checkbox" id="reading2-terms"><label for="reading2-terms">I have read and understand this information.</label>
         </div>
         <div class="col-xs-5" style="clear:left;">
            <button type="button" class="btn btn-primary" id="reading2-prev" onclick="readingPrev(1)">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>2 / 17</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="reading2-next" onclick="readingNext(3)">Next</button>
         </div>
      </div>
      <div class="tab" id="reading3">
         <div class="col-xs-12">
            <h3 class="m-10" >Patient Agreement</h3>
         </div>
         <div class="col-md-12">
            <ul>
            <li>
               <p>3. Term. This Agreement will last for one year, starting on completion of these forms.</p>
            </li>
            <li>
               <p>4. Renewal. The Agreement will automatically renew each year on the anniversary date of the agreement, unless either party cancels the Agreement by giving 30 days written cancellation notice.
            </li>
            <li>
               <p>5. Termination. Regardless of anything written above, You always have the right to cancel this at will with written notice. Either party can end this agreement at any time by giving the other party 30 days written notice.
            </li>
            <li>
               <p>6. Payments and Refunds – Amount and Methods. In exchange for the Services (see Appendix A(1) of patient agreement), You agree to pay Us, a monthly fee in the amount that appears in Appendix C, which is attached and is part of this Agreement.
               <ul>
                  <li>
                     <p>a) This monthly fee is payable when you sign the Agreement, and is due no later than the last business day of each month thereafter.</p>
                  </li>
                  <li>
                     <p>b) The Parties agree that the required method of monthly payment shall be by automatic payment through a debit or credit card.</p>
                  </li>
                  <li>
                     <p>c) If this Agreement is cancelled by either party before the Agreement ends, We will review and settle your account as follows:
                     <ul>
                        <li></p>
                           (i) We will refund to You the unused portion of your fees on a per diem basis; or</p>
                        </li>
                        <li>
                           <p>(ii) If the Value of the Services you received over the term of the Agreement exceeds the amount You paid in membership fees, You shall reimburse the CLINIC in an amount equal to the difference between the value of the services received and the amount You paid in membership fees over the term of the Agreement. The Parties agree that the value of the services is equal to the CLINIC’s usual and customary fee-for-service charges. A copy of these fees is available on request.
                           <p>
                        </li>
                     </ul>
                     </p>
                  </li>
                  </p></li>
               </ul>
         </div>
         <div class="col-md-12">
         <input type="checkbox" id="reading3-terms"><label for="reading3-terms">I have read and understand this information.</label>
         </div>
         <div class="col-xs-5" style="clear:left;">
         <button type="button" class="btn btn-primary" id="reading3-prev" onclick="readingPrev(2)">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>3 / 17</em></div>
         <div class="col-xs-5" style="text-align:right;">
         <button type="button" class="btn btn-primary" id="reading3-next" onclick="readingNext(4)">Next</button>
         </div>
      </div>
      <div class="tab" id="reading4">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p>7. Non-Participation in Insurance. After completion of this online form and printing it to sign, your initials on this clause of the Agreement acknowledges the Patient’s understanding that neither the CLINIC, nor its Physician, participate in any health insurance or HMO plans or panels and have opted out of Medicare. As such, we will not bill health insurance carriers. You will be responsible for any care which is not included in this Agreement or not personally provided by Clinic. The Clinic makes no representation that the fees paid under this Agreement are covered by the Patient’s health insurance or other third party payment plans. Patient may submit bills to Patient’s health plan. It is the Patient’s responsibility to determine whether reimbursement is available from a private, nongovernmental insurance plan or HSA and to submit any required billing. </p></li>
      <ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading4-terms"><label for="reading4-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading4-prev" onclick="readingPrev(3)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>4 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading4-next" onclick="readingNext(5)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading5">
         <div class="col-xs-12">
            <h3 class="m-10" >Patient Agreement</h3>
         </div>
         <div class="col-md-12">
            <ul>
            <li>
               <p>8. Medicare. This agreement acknowledges the Patient’s understanding that the Physician has opted out of Medicare, and as a result, Medicare cannot be billed for any services performed for the Patient by the Physician. The Patient agrees not to bill Medicare or attempt to obtain Medicare reimbursement for any such services. If the Patient is eligible for Medicare, or becomes eligible during the term of this Agreement, then s/he will sign the Medicare Opt Out and Waiver Agreement attached as Appendix D and incorporated by reference. The Patient shall sign and renew the Medicare Opt Out and Waiver Agreement every two years, as required by law. </p>
            </li>
            <ul>
         </div>
         <div class="col-md-12">
            <input type="checkbox" id="reading5-terms"><label for="reading5-terms">I have read and understand this information.</label>
         </div>
         <div class="col-xs-5" style="clear:left;">
            <button type="button" class="btn btn-primary" id="reading5-prev" onclick="readingPrev(4)">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>5 / 17</em></div>
         <div class="col-xs-5" style="text-align:right;">
            <button type="button" class="btn btn-primary" id="reading5-next" onclick="readingNext(6)">Next</button>
         </div>
      </div>
      <div class="tab" id="reading6">
         <div class="col-xs-12">
            <h3 class="m-10" >Patient Agreement</h3>
         </div>
         <div class="col-md-12">
            <ul>
            <li>
               <p>9. This Is Not Health Insurance. Your initials on this clause of the Agreement acknowledges Your understanding that this Agreement is not an insurance plan or a substitute for health insurance. The Patient understands that this Agreement does not replace any existing or future health insurance or health plan coverage that Patient may carry. The Agreement does not include hospital services, or any services not personally provided by the CLINIC, or its employees. The Patient acknowledges that the CLINIC has advised the patient to obtain or keep in full force, health insurance that will cover the Patient for healthcare not personally delivered by the CLINIC, and for hospitalizations and catastrophic events. </p>
            </li>
            <li>
               <p><strong>NOTICE: </strong>This direct primary care agreement does not constitute insurance and is not a medical plan that provides health insurance coverage for purposes of any federal mandates. This direct primary care agreement only provides for the primary care services described in the agreement. It is recommended that insurance be obtained to cover medical services not provided for under this direct primary care agreement. You are always personally responsible for the payment of any additional medical expenses you may incur.</p>
            <li>
               <ul>
         </div>
         <div class="col-md-12">
         <input type="checkbox" id="reading6-terms"><label for="reading6-terms">I have read and understand this information.</label>
         </div>
         <div class="col-xs-5" style="clear:left;">
         <button type="button" class="btn btn-primary" id="reading6-prev" onclick="readingPrev(5)">Previous</button>
         </div>
         <div class="col-xs-2" style="text-align:center"><em>6 / 17</em></div>
         <div class="col-xs-5" style="text-align:right;">
         <button type="button" class="btn btn-primary" id="reading6-next" onclick="readingNext(7)">Next</button>
         </div>
      </div>
      <div class="tab" id="reading7">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p>10. Communications. The Patient acknowledges that although the CLINIC shall comply with HIPAA privacy requirements, communications with the Physician using e-mail, facsimile, video chat, cell phone, texting, and other forms of electronic communication can never be absolutely guaranteed to be secure or confidential methods of communications. As such, Patient expressly waives the Physician’s obligation to guarantee confidentiality with respect to the above means of communication. Patient further acknowledges that all such communications may become a part of the medical record. By providing an e-mail address on the attached Appendix B, the Patient authorizes the CLINIC, and its Physicians to communicate with him/her by e-mail regarding the Patient’s “protected health information” (PHI).1 The Patient further acknowledges that:<ul><li><p>(a) E-mail is not necessarily a secure medium for sending or receiving PHI and, there is always a possibility that a third party may gain access;</p><li><li><p>(b) Although the Physician will make all reasonable efforts to keep e-mail communications confidential and secure, neither the CLINIC, nor the Physician can assure or guarantee the absolute confidentiality of e-mail communications;</p><li><li><p>(c) At the discretion of the Physician, e-mail communications may be made a part of Patient’s permanent medical record; and,</p><li><li><p>(d) You understand and agree that e-mail is not an appropriate means of communication in an emergency, for time-sensitive problems, or for disclosing sensitive information. <strong>In an emergency, or a situation that You could reasonably expect to develop into an emergency, You understand and agree to call 911 or the nearest Emergency room, and follow the directions of emergency personnel.</strong></p><li><li><p>(e) Email Usage. If You do not receive a response to an e-mail message within 24 hours, You agree that you will contact the Physician by telephone or other means.</p><li><li><p>(f) Technical Failure. Neither the CLINIC, nor the Physician will be liable for any loss, injury, or expense arising from a delay in responding to Patient, when that delay is caused by technical failure. Examples of technical failures (i) failures caused by an internet service provider, (ii) power outages, (iii) failure of electronic messaging software, or e-mail provider (iv) failure of the CLINIC’s computers or computer network, or faulty telephone or cable data transmission, (iv) any interception of email communications by a third party which is unauthorized by the CLINIC; or (v) Patient failure to comply with the guidelines for use of e-mail described in this Agreement.</p><li></ul></p><li>
      </ul>
      <ul>
      <li>
      <i>
      As that term is defined in the Health Insurance Portability and Accountability Act (HIPAA) of 1996 and its implementing regulations.
      </i>
      </li>
      </ul>
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading7-terms"><label for="reading7-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading7-prev" onclick="readingPrev(6)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>7 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading7-next" onclick="readingNext(8)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading8">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p>11. Change of Law. If there is a change of any relevant law, regulation or rule, federal, state or local, which affects the terms of this Agreement, the parties agree to amend this Agreement to comply with the law.
      </p></li>
      <li><p>12. Severability. If any part of this Agreement is considered legally invalid or unenforceable by a court of competent jurisdiction, that part will be amended to the extent necessary to be enforceable, and the remainder of the contract will stay in force as originally written.
      </p><li><li><p>13. Reimbursement for Services Rendered. If this Agreement is held to be invalid for any reason, and the CLINIC is required to refund fees paid by You, You agree to pay the CLINIC an amount equal to the fair market value of the medical services You received during the time period for which the refunded fees were paid.</p></li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading8-terms"><label for="reading8-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading8-prev" onclick="readingPrev(7)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>8 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading8-next" onclick="readingNext(9)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading9">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p>14. Amendment. No amendment of this Agreement shall be binding on a party unless it is in writing and signed by all the parties. Except for amendments made in compliance with Section 11. </p></li>
      <li><p>Assignment. This Agreement, and any rights You may have under it, may not be assigned or transferred by You.</p><li>
      <li><p>16. Legal Significance. You acknowledge that this Agreement is a legal document and gives the parties certain rights and responsibilities. You also acknowledge that You have had a reasonable time to seek legal advice regarding the Agreement and have either chosen not to do so or have done so and are satisfied with the terms and conditions of the Agreement.</p></li>
      <li><p>17. Miscellaneous. This Agreement shall be construed without regard to any rules requiring that it be construed against the party who drafted the Agreement. The captions in this Agreement are only for the sake of convenience and have no legal meaning.</p></li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading9-terms"><label for="reading9-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading9-prev" onclick="readingPrev(8)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>9 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading9-next" onclick="readingNext(10)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading10">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p>18. Entire Agreement. This Agreement contains the entire agreement between the parties and replaces any earlier understandings and agreements whether they are written or oral.
      </p></li>
      <li><p>19. No Waiver. In order to allow for the flexibility of certain terms of the Agreement, each party agrees that they may choose to delay or not to enforce the other party’s requirement or duty under this agreement (for example notice periods, payment terms, etc.). Doing so will not constitute a waiver of that duty or responsibility. The party will have the right to enforce such terms again at any time.</p><li>
      <li><p>20. Jurisdiction. This Agreement shall be governed and construed under the laws of the State of Nebraska. All disputes arising out of this Agreement shall be settled in the court of proper venue and jurisdiction for the CLINIC in Lincoln, Nebraska.</p></li>
      <li><p>21. Service. All written notices are deemed served if sent to the address of the party written above or appearing in Appendix B by first class U.S. mail.</p></li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading10-terms"><label for="reading10-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading10-prev" onclick="readingPrev(9)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>10 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading10-next" onclick="readingNext(11)" >Next</button>
      </div>
      </div>
      <div class="tab" id="reading11">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement: Appendix A, SERVICES</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li>1. Medical Services. Medical Services under this agreement are those Primary Care medical services that the Physician is permitted to perform under the laws of the State of Nebraska, are consistent with Physician’s training and experience, are usual and customary for a family medicine physician to provide, and include the following:2 • Acute and Non-acute Office Visits • Well-Woman Care/ Pap Smear* • Well-Baby Care • Osteopathic Manipulative Treatment (OMT)* • Acupuncture* • Electrocardiogram (EKG)* • Blood Pressure Monitoring • Diabetic Monitoring • Spirometry* • Breathing Treatments (nebulizer or inhaler with spacer)* • Urinalysis* • Rapid Test for Strep Throat* • Removal of skin lesions/warts* • Simple aspiration/injection of joint* • Cortisone Allergy Shot* • Antibiotic Injection* • Removal of Cerumen (ear wax)* • Ingrown Nail Removal* • Wound Repair and Sutures* • Abscess Incision and Drainage* • Drawing basic labs. Labs and testing that cannot be performed in-house will be offered at a discounted rate through select vendors.* • The convenience of access to many commonly prescribed prescription medications at greatly reduced prices, dispensed on premises.** *Patient is responsible for all costs associated with any procedures, laboratory testing, and specimen analysis. **Prescription medications and DME dispensed by the CLINIC pharmacy are subject to an additional charge, for which the Patient is responsible. The Patient is also entitled to a personalized, annual in-depth “wellness examination and evaluation,” which shall be performed by the Physician, and may include the following, as appropriate: • Detailed review of medical, family, and social history and update of medical record; Personalized Health Risk Assessment utilizing current screening guidelines; • Preventative health counseling, which may include: weight management, smoking cessation, behavior modification, stress management, etc.; • Custom Wellness Plan to include recommendations for immunizations, additional screening tests/evaluations, fitness and dietary plans; • Complete physical exam & form completion as needed.</p><li>
      </ul>
      <ul>
      <li><i>As deemed appropriate and medically necessary by the Physician.</i></li>
      </ul>				
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading11-terms"><label for="reading11-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading11-prev" onclick="readingPrev(10)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>11 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading11-next" onclick="readingNext(12)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading12">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement: Appendix A, SERVICES CONT’D</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p></p><li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading12-terms"><label for="reading12-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading12-prev" onclick="readingPrev(11)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>12 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading12-next" onclick="readingNext(13)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading13">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement: Fee Itemization</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p>FEE ITEMIZATION 0-19 years of age $10 per month* 0-19 years of age $50 per month** 20-44 years of age $50 per month 45-64 years of age $75 per month 65+ years of age $100 per month Re-Enrollment Fee $200 per household*** *With the enrollment of at least one adult member. **Without a fully enrolled adult member. ***Non-refundable fee. Should your membership lapse or be terminated, the re-enrollment fee must be paid again for membership to become active.</p></li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading13-terms"><label for="reading13-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading13-prev" onclick="readingPrev(12)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>13 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading13-next" onclick="readingNext(14)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading14">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement: Medicate Opt Out and Waiver Agreement</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li>
      <p></p>
      <li>
      </ul>
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading14-terms"><label for="reading14-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading14-prev" onclick="readingPrev(13)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>14 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading14-next" onclick="readingNext(15)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading15">
      <div class="col-xs-12">
      <h3 class="m-10" >Patient Agreement: Physician Responsibilities</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p></p><li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading15-terms"><label for="reading15-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading15-prev" onclick="readingPrev(14)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>15 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading15-next" onclick="readingNext(16)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading16">
      <div class="col-xs-12">
      <h3 class="m-10" >HIPPA Notice</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p></p><li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading16-terms"><label for="reading16-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading16-prev" onclick="readingPrev(15)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>16 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-primary" id="reading16-next" onclick="readingNext(17)">Next</button>
      </div>
      </div>
      <div class="tab" id="reading17">
      <div class="col-xs-12">
      <h3 class="m-10" >HIPPA Notice</h3>
      </div>
      <div class="col-md-12">
      <ul>
      <li><p></p><li>
      </ul>	
      </div>
      <div class="col-md-12">
      <input type="checkbox" id="reading17-terms"><label for="reading17-terms">I have read and understand this information.</label>
      </div>
      <div class="col-xs-5" style="clear:left;">
      <button type="button" class="btn btn-primary" id="reading17-prev" onclick="readingPrev(16)">Previous</button>
      </div>
      <div class="col-xs-2" style="text-align:center"><em>17 / 17</em></div>
      <div class="col-xs-5" style="text-align:right;">
      <button type="button" class="btn btn-success" id="readingsubmit" >Submit</button>
		</div>
		 <div class="p-15" id="m-loader" style="display:none;clear:both;">
			<img src="<?php echo plugin_dir_url( __FILE__ ).'assests/mloader.gif'; ?>">
			<p class="loader-text">The information have been updating. Please wait...</p>
		</div>	
   </div>
   	  <div class="tab" id="m-thankyou">
	  <div class="col-md-12" style="text-align:center;">
	  <h2 class="m-10">The form have been submitted successfully!</h2>
	  <h4>Please check your mail for PDF link.</h4>
	  </div>
	  </div>
</div>

<!-- 
	content pending - reading 12 page, reading 14 page, reading 15 page, reading 16 page, reading 17 page
	total rate - reading 13 page
-->