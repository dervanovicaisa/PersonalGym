
   <div id="section_form" class="">
    <h4 class="blue m-3 yourdata">Your Data</h4>

   <div class="form-row">
     <div class="col-md-5 mt-5 m-3">
       <input type="text" class="form-control" id="validationCustom01" placeholder="Last name" name = "last_name" >
       <div class="valid-feedback">
         Looks good!
       </div>
       <div class="invalid-feedback">
           Please provide a valid name.
         </div>
     </div>
     <div class="col-md-5 ml-auto mt-5 m-3">
       <input type="email" class="form-control" id="validationCustom02" placeholder="E-Mail" name = "email" >
       <div class="valid-feedback">
         Looks good!
       </div>
       <div class="invalid-feedback">
           Please provide a valid email.
         </div>
     </div>
   </div>
   <div class="form-row">
     <div class="col-md-5 m-3">
       <input type="text" class="form-control" placeholder="First name" id="validationCustom03" name = "first_name" >
       <div class="valid-feedback">
           Looks good!
         </div>
       <div class="invalid-feedback">
         Please provide a valid First name.
       </div>
     </div>
     <div class="col-md-5 ml-auto m-3">
       <input type="date" class="form-control" id="validationCustom04" placeholder="Date of birth" name = "year" >
       <div class="valid-feedback">
         Looks good!
       </div>
       <div class="invalid-feedback">
           Please provide a valid Date of birth.
         </div>
     </div>
   </div>
   <div class="form-row">
       <div class="col-md-5 m-3">
         <input type="number" class="form-control" id="validationCustom05" placeholder="Telephone"  name = "telephone" >
         <div class="valid-feedback">
           Looks good!
         </div>
         <div class="invalid-feedback">
             Please provide a valid Telephone.
           </div>
       </div>
       <div class="col-md-5  ml-auto m-3">
         <input type="number" class="form-control" id="validationCustom06" placeholder="Height in cm" name = "height" >
         <div class="valid-feedback">
           Looks good!
         </div>
         <div class="invalid-feedback">
             Please provide a valid Height.
           </div>
       </div>
     </div>
   <div class="form-row">
       <div class="col-md-5 m-3">
         <input type="text" class="form-control" placeholder="Adress" id="validationCustom07"  name = "adress" >
         <div class="valid-feedback">
           Looks good!
         </div>
         <div class="invalid-feedback">
           Please provide a valid Adress.
         </div>
       </div>
       <div class="col-md-5 ml-auto m-3">
         <input type="number" class="form-control" id="validationCustom08" placeholder="Weight in kg" name = "weight" >
         <div class="valid-feedback">
           Looks good!
         </div>
         <div class="invalid-feedback">
           Please provide a valid Weight.
         </div>
       </div>
  
     </div>
   <div class=" my-5 ml-0">
           <h4 class="blue starter mt-5 mb-5 ml-3">  Starter - Your health, fitness
           </h4>
    </div>
   <div class="mx-auto mt-5">
           <div class="col-9 my-4 ml-0">
               <input type="text" class="form-control" id="validationCustom09" placeholder="How are you?*" name = "howareyou" >
               <div class="valid-feedback">
               Looks good!
               </div>
               <div class="invalid-feedback">
               Please provide a valid answer.
               </div>
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Are you currently under medical treatment?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no" id="yes" value="yes" />
                   <input type="radio" name="yes_no" id="no" value="no"  />
                   <div class="switch">
                       <label for="yes">YES</label>
                       <label for="no">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText"name="txt_yes_no"  id="validationCustom10" placeholder="If yes, what is the reason for your medical treatment?*" >
           </div>

           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Do you smoke ?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no1" id="yes1" value="yes"  />
                   <input type="radio" name="yes_no1" id="no1" value="no" />
                   <div class="switch">
                       <label for="yes1">YES</label>
                       <label for="no1">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no1" id="validationCustom11" placeholder="If yes, what is the cause?*" >
           
           </div>
           <div class="col-12 my-4 ml-0 radio">
            <label for="yes_no_radio">Do you have asthma/bronchitis ?*</label>
            <div class="buttRadio">
                <input type="radio" name="yes_no91" id="yes91" value="yes"  />
                <input type="radio" name="yes_no91" id="no91" value="no" />
                <div class="switch">
                    <label for="yes91">YES</label>
                    <label for="no91">NO</label>
                  </div>
              </div>
            <input type="text" class="form-control radioText" name="txt_yes_no1" id="validationCustom91" placeholder="If yes, what is the cause?*" >
        
        </div>
           <div class="col-md-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Your blood pressure?*</label>
               <div class="buttRadio">
               <input type="radio" name="high" id="high" value="high" />              
               <input type="radio" name="high" id="normal" value="normal"/>
               <input type="radio" name="high" id="low" value="no"/>
               <div class=" highw">
                   <label for="high">HIGH</label>
                   <label for="normal">NORMAL</label>
                   <label for="low">LOW</label>

                 </div>
                </div>

           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Do you have diabetes?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no2" id="yes2" value="yes"  />
                   <input type="radio" name="yes_no2" id="no2" value="no" />
                   <div class="switch">
                       <label for="yes2">YES</label>
                       <label for="no2">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no2" id="validationCustom12" placeholder="If yes, which type?*" >
           </div>
               <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Heart disease?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no3" id="yes3" value="yes"  />
                   <input type="radio" name="yes_no3" id="no3" value="no" />
                   <div class="switch">
                       <label for="yes3">YES</label>
                       <label for="no3">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no3" id="validationCustom13" placeholder="If yes, which?*" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Do you take medicine?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no4" id="yes4" value="yes"  />
                   <input type="radio" name="yes_no4" id="no4" value="no" />
                   <div class="switch">
                       <label for="yes4">YES</label>
                       <label for="no4">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no4" id="validationCustom14" placeholder="If yes, which?*" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Are you taking any kind of supplements?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no5" id="yes5" value="yes"  />
                   <input type="radio" name="yes_no5" id="no5" value="no" />
                   <div class="switch">
                       <label for="yes5">YES</label>
                       <label for="no5">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText"  name="txt_yes_no5" id="validationCustom15" placeholder="If yes, which?*" >
           </div>                  
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Did you have any kind of surgeries?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no6" id="yes6" value="yes"  />
                   <input type="radio" name="yes_no6" id="no6" value="no" />
                   <div class="switch">
                       <label for="yes6">YES</label>
                       <label for="no6">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no6" id="validationCustom16" placeholder="If yes, which?*" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Do you have back problems?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no7" id="yes7" value="yes"  />
                   <input type="radio" name="yes_no7" id="no7" value="no" />
                   <div class="switch">
                       <label for="yes7">YES</label>
                       <label for="no7">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no7" id="validationCustom17"  placeholder="If yes, which?*" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">Joint problems?*</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no8" id="yes8" value="yes"  />
                   <input type="radio" name="yes_no8" id="no8" value="no"  />
                   <div class="switch">
                       <label for="yes8">YES</label>
                       <label for="no8">NO</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no8" id="validationCustom18" placeholder="If yes, which?*" >
       </div>
   </div>

   </div>
 <script>
 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (function() {
   'use strict';
   window.addEventListener('load', function() {
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.getElementsByClassName('needs-validation');
     // Loop over them and prevent submission
     var validation = Array.prototype.filter.call(forms, function(form) {
       form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
       }, false);
     });
   }, false);
 })();
 </script>

