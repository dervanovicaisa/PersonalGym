<form action="{{route('contact.store')}}" method="post" class="needs-validation" id="application_form" novalidate>
    {{ csrf_field() }}
   <div id="section_form" class="mb-5"  >
    <h1 class="blue m-3 yourdata">Your Data</h1>

    <div class="form-row">
      <div class="col-md-5 mt-5 m-3">
        <input type="text" class="form-control" id="validationCustom01" placeholder="Last name" name = "last_name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
            Please provide a valid name.
          </div>
      </div>
      <div class="col-md-5 ml-auto mt-5 m-3">
        <input type="email" class="form-control" id="validationCustom02" placeholder="E-Mail" name = "email" required>
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
        <input type="text" class="form-control" placeholder="First name" id="validationCustom03" name = "first_name" required>
        <div class="valid-feedback">
            Looks good!
          </div>
        <div class="invalid-feedback">
          Please provide a valid First name.
        </div>
      </div>
      <div class="col-md-5 ml-auto m-3">
        <input type="date" class="form-control" id="validationCustom04" placeholder="Date of birth" name = "dob" required>
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
          <input type="number" class="form-control" id="validationCustom05" placeholder="Telephone"  name = "tel" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
              Please provide a valid Telephone.
            </div>
        </div>
        <div class="col-md-5  ml-auto m-3">
          <input type="number" class="form-control" id="validationCustom06" placeholder="Height" name = "height" required>
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
          <input type="text" class="form-control" placeholder="Adress" id="validationCustom07"  name = "adress" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please provide a valid Adress.
          </div>
        </div>
        <div class="col-md-5 ml-auto m-3">
          <input type="number" class="form-control" id="validationCustom08" placeholder="Weight" name = "weight" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please provide a valid Weight.
          </div>
        </div>
   
      </div>
    <div class="text-center m-5">
            <h1 class="blue starter mt-5 mb-5">  Starter - Your health, fitness
            </h1>
     </div>
    <div class="col-md-8 mx-auto mt-5">
            <div class="col-md-9 m-4">
                <input type="text" class="form-control" id="validationCustom09" placeholder="How are you?*" name = "howareyou" required>
                <div class="valid-feedback">
                Looks good!
                </div>
                <div class="invalid-feedback">
                Please provide a valid answer.
                </div>
            </div>
            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Are you currently under medical treatment?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no" id="yes" value="yes" ></input>
                    <input type="radio" name="yes_no" id="no" value="no"  checked></input>
                    <div class="switch">
                        <label for="yes">YES</label>
                        <label for="no">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText"name="txt_yes_no"  id="validationCustom10" placeholder="If yes, what is the reason for your medical treatment?*" >
            </div>

            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Do you smoke or have asthma/bronchitis?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no1" id="yes1" value="yes"  ></input>
                    <input type="radio" name="yes_no1" id="no1" value="no" checked></input>
                    <div class="switch">
                        <label for="yes1">YES</label>
                        <label for="no1">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText" name="txt_yes_no1" id="validationCustom11" placeholder="If yes, what is the cause?*" >
            
            </div>
            <div class="col-md-12 m-4 radio">
                <label for="yes_no_radio">Your blood pressure?*</label>
              
                <input type="radio" name="high" id="high" value="high" checked></input>              
                <input type="radio" name="high" id="normal" value="normal"></input>
                <input type="radio" name="high" id="low" value="no"></input>
                <div class="switch highw">
                    <label for="high">HIGH</label>
                    <label for="normal">NORMAL</label>
                    <label for="low">LOW</label>

                  </div>
               
            </div>
            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Do you have diabetes?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no2" id="yes2" value="yes"  ></input>
                    <input type="radio" name="yes_no2" id="no2" value="no" checked></input>
                    <div class="switch">
                        <label for="yes2">YES</label>
                        <label for="no2">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText" name="txt_yes_no2" id="validationCustom12" placeholder="If yes, which type?*" >
            </div>
                <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Heart disease?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no3" id="yes3" value="yes"  ></input>
                    <input type="radio" name="yes_no3" id="no3" value="no" checked></input>
                    <div class="switch">
                        <label for="yes3">YES</label>
                        <label for="no3">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText" name="txt_yes_no3" id="validationCustom13" placeholder="If yes, which?*" >
            </div>
            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Do you take medicine?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no4" id="yes4" value="yes"  ></input>
                    <input type="radio" name="yes_no4" id="no4" value="no" checked></input>
                    <div class="switch">
                        <label for="yes4">YES</label>
                        <label for="no4">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText" name="txt_yes_no4" id="validationCustom14" placeholder="If yes, which?*" >
            </div>
            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Are you taking any kind of supplements?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no5" id="yes5" value="yes"  ></input>
                    <input type="radio" name="yes_no5" id="no5" value="no" checked></input>
                    <div class="switch">
                        <label for="yes5">YES</label>
                        <label for="no5">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText"  name="txt_yes_no5" id="validationCustom15" placeholder="If yes, which?*" >
            </div>                  
            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Did you have any kind of surgeries?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no6" id="yes6" value="yes"  ></input>
                    <input type="radio" name="yes_no6" id="no6" value="no" checked></input>
                    <div class="switch">
                        <label for="yes6">YES</label>
                        <label for="no6">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText" name="txt_yes_no6" id="validationCustom16" placeholder="If yes, which?*" >
            </div>
            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Do you have back problems?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no7" id="yes7" value="yes"  ></input>
                    <input type="radio" name="yes_no7" id="no7" value="no" checked></input>
                    <div class="switch">
                        <label for="yes7">YES</label>
                        <label for="no7">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText" name="txt_yes_no7" id="validationCustom17"  placeholder="If yes, which?*" >
            </div>
            <div class="col-md-11 m-4 radio">
                <label for="yes_no_radio">Joint problems?*</label>
                <div class="buttRadio">
                    <input type="radio" name="yes_no8" id="yes8" value="yes"  ></input>
                    <input type="radio" name="yes_no8" id="no8" value="no" checked ></input>
                    <div class="switch">
                        <label for="yes8">YES</label>
                        <label for="no8">NO</label>
                      </div>
                  </div>
                <input type="text" class="form-control radioText" name="txt_yes_no8" id="validationCustom18" placeholder="If yes, which?*" >
        </div>

    </div>

    <div class=" next_button">
      <svg id="next" xmlns="http://www.w3.org/2000/svg" width="122" height="38.918" viewBox="0 0 122 38.918"><defs>
        <style>
        .a{
          fill:none;
          stroke:#fff;
          stroke-linecap:round;
          stroke-width:2px;
        }
        .b{
          fill:#fff;
          font-size:16px;
          font-family:Raleway-Medium, Raleway;
          font-weight:500;
          letter-spacing:0.15em;}</style>
        </defs>
        <g transform="translate(1 1.318)">
          <line class="a pravaNext" y2="28.786" transform="translate(45.107 4.493) rotate(-90)"/>
          <g transform="translate(-259 -2332.4)" class="vrhNext">
            <line class="a" x1="4.493" y1="10.199" transform="translate(322.694 2341.385) rotate(-90)"/>
            <line class="a" y1="10.199" x2="4.493" transform="translate(322.694 2336.893) rotate(-90)"/>
          </g>
        <text class="b" transform="translate(60 33.6)"><tspan x="-60.08" y="0">Next section</tspan>
        </text>
      </g>
    </svg>
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

