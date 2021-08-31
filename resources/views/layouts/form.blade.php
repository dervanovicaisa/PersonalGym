
   <div id="section_form" class="">
    <h4 class="blue m-3 yourdata">{{ __('text.yourData') }}</h4>

   <div class="form-row">
     <div class="col-md-5 mt-5 m-3">
       <input type="text" class="form-control" id="validationCustom01" placeholder="{{ __('text.lastname') }}" name = "last_name" >
       <div class="valid-feedback">
        {{ __('text.looksGood') }}
       </div>
       <div class="invalid-feedback">
        {{ __('text.validate1') }}
         </div>
     </div>
     <div class="col-md-5 ml-auto mt-5 m-3">
       <input type="email" class="form-control" id="validationCustom02" placeholder="{{ __('text.email') }}" name = "email" >
       <div class="valid-feedback">
        {{ __('text.looksGood') }}
       </div>
       <div class="invalid-feedback">
        {{ __('text.validate2') }}
         </div>
     </div>
   </div>
   <div class="form-row">
     <div class="col-md-5 m-3">
       <input type="text" class="form-control" placeholder="{{ __('text.firstname') }}" id="validationCustom03" name = "first_name" >
       <div class="valid-feedback">
        {{ __('text.looksGood') }}
         </div>
       <div class="invalid-feedback">
        {{ __('text.validate3') }}
       </div>
     </div>
     <div class="col-md-5 ml-auto m-3">
       <input type="date" class="form-control" id="validationCustom04" placeholder="{{ __('text.dateofbirth') }}" name = "year" >
       <div class="valid-feedback">
        {{ __('text.looksGood') }}
       </div>
       <div class="invalid-feedback">
        {{ __('text.validate4') }}
         </div>
     </div>
   </div>
   <div class="form-row">
       <div class="col-md-5 m-3">
         <input type="number" class="form-control" id="validationCustom05" placeholder="{{ __('text.telephone') }}"  name = "telephone" >
         <div class="valid-feedback">
          {{ __('text.looksGood') }}
         </div>
         <div class="invalid-feedback">
          {{ __('text.validate5') }}
           </div>
       </div>
       <div class="col-md-5  ml-auto m-3">
         <input type="number" class="form-control" id="validationCustom06" placeholder="{{ __('text.heighInCm') }}" name = "height" >
         <div class="valid-feedback">
          {{ __('text.looksGood') }}
         </div>
         <div class="invalid-feedback">
          {{ __('text.validate6') }}
           </div>
       </div>
     </div>
   <div class="form-row">
       <div class="col-md-5 m-3">
         <input type="text" class="form-control" placeholder="{{ __('text.address') }}" id="validationCustom07"  name = "adress" >
         <div class="valid-feedback">
          {{ __('text.looksGood') }}
         </div>
         <div class="invalid-feedback">
          {{ __('text.validate7') }}
         </div>
       </div>
       <div class="col-md-5 ml-auto m-3">
         <input type="number" class="form-control" id="validationCustom08" placeholder="{{ __('text.weightInKg') }}" name = "weight" >
         <div class="valid-feedback">
          {{ __('text.looksGood') }}
         </div>
         <div class="invalid-feedback">
          {{ __('text.validate8') }}
         </div>
       </div>
  
     </div>
   <div class=" my-5 ml-0">
           <h4 class="blue starter mt-5 mb-5 ml-3">   {{ __('text.starterParagraph') }}
           </h4>
    </div>
   <div class="mx-auto mt-5">
           <div class="col-9 my-4 ml-0">
               <input type="text" class="form-control" id="validationCustom09" placeholder="{{ __('text.q1') }}" name = "howareyou" >
               <div class="valid-feedback">
                {{ __('text.looksGood') }}
               </div>
               <div class="invalid-feedback">
                {{ __('text.validate9') }}
               </div>
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q2') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no" id="yes" value="{{ __('text.yes') }}" />
                   <input type="radio" name="yes_no" id="no" value="{{ __('text.no') }}"  />
                   <div class="switch">
                       <label for="yes">{{ __('text.yes1') }}</label>
                       <label for="no">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText"name="txt_yes_no"  id="validationCustom10" placeholder="{{ __('text.q2Input') }}" >
           </div>

           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q3') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no1" id="yes1" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no1" id="no1" value="{{ __('text.no') }}" />
                   <div class="switch">
                       <label for="yes1">{{ __('text.yes1') }}</label>
                       <label for="no1">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no1" id="validationCustom11" placeholder="{{ __('text.q3Input') }}" >
           
           </div>
           <div class="col-12 my-4 ml-0 radio">
            <label for="yes_no_radio">{{ __('text.q4') }}</label>
            <div class="buttRadio">
                <input type="radio" name="yes_no91" id="yes91" value="{{ __('text.yes') }}"  />
                <input type="radio" name="yes_no91" id="no91" value="{{ __('text.no') }}" />
                <div class="switch">
                    <label for="yes91">{{ __('text.yes1') }}</label>
                    <label for="no91">{{ __('text.no1') }}</label>
                  </div>
              </div>
            <input type="text" class="form-control radioText" name="txt_yes_no1" id="validationCustom91" placeholder="{{ __('text.q4Input') }}" >
        
        </div>
           <div class="col-md-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q5') }}</label>
               <div class="buttRadio">
               <input type="radio" name="high" id="high" value="{{ __('text.high') }}" />              
               <input type="radio" name="high" id="normal" value="{{ __('text.normal') }}"/>
               <input type="radio" name="high" id="low" value="{{ __('text.no') }}"/>
               <div class=" highw">
                   <label id="highl" for="high">{{ __('text.high1') }}</label>
                   <label id="normall" for="normal">{{ __('text.normal1') }}</label>
                   <label id="lowl" for="low">{{ __('text.low') }}</label>

                 </div>
                </div>

           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q6') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no2" id="yes2" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no2" id="no2" value="{{ __('text.no') }}" />
                   <div class="switch">
                       <label for="yes2">{{ __('text.yes1') }}</label>
                       <label for="no2">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no2" id="validationCustom12" placeholder="{{ __('text.q6Input') }}" >
           </div>
               <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q7') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no3" id="yes3" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no3" id="no3" value="{{ __('text.no') }}" />
                   <div class="switch">
                       <label for="yes3">{{ __('text.yes1') }}</label>
                       <label for="no3">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no3" id="validationCustom13" placeholder="{{ __('text.q7Input') }}" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q8') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no4" id="yes4" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no4" id="no4" value="{{ __('text.no') }}" />
                   <div class="switch">
                       <label for="yes4">{{ __('text.yes1') }}</label>
                       <label for="no4">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no4" id="validationCustom14" placeholder="{{ __('text.q8Input') }}" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio"{{ __('text.q9') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no5" id="yes5" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no5" id="no5" value="{{ __('text.no') }}" />
                   <div class="switch">
                       <label for="yes5">{{ __('text.yes1') }}</label>
                       <label for="no5">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText"  name="txt_yes_no5" id="validationCustom15" placeholder="{{ __('text.q9Input') }}" >
           </div>                  
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q10') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no6" id="yes6" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no6" id="no6" value="{{ __('text.no') }}" />
                   <div class="switch">
                       <label for="yes6">{{ __('text.yes1') }}</label>
                       <label for="no6">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no6" id="validationCustom16" placeholder="{{ __('text.q10Input') }}" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q11') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no7" id="yes7" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no7" id="no7" value="{{ __('text.no') }}" />
                   <div class="switch">
                       <label for="yes7">{{ __('text.yes1') }}</label>
                       <label for="no7">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no7" id="validationCustom17"  placeholder="If yes, which?*{{ __('text.q11Input') }}" >
           </div>
           <div class="col-12 my-4 ml-0 radio">
               <label for="yes_no_radio">{{ __('text.q12') }}</label>
               <div class="buttRadio">
                   <input type="radio" name="yes_no8" id="yes8" value="{{ __('text.yes') }}"  />
                   <input type="radio" name="yes_no8" id="no8" value="{{ __('text.no') }}"  />
                   <div class="switch">
                       <label for="yes8">{{ __('text.yes1') }}</label>
                       <label for="no8">{{ __('text.no1') }}</label>
                     </div>
                 </div>
               <input type="text" class="form-control radioText" name="txt_yes_no8" id="validationCustom18" placeholder="{{ __('text.q12Input') }}" >
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

