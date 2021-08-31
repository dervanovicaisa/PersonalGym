<div id="section_3_form" class="my-5" >
    <h4 class="blue m-3 yourdata">{{ __('text.dessert') }} </h4>
    <h4 class="blue m-3 yourdata"> {{ __('text.yourParagraph') }}</h4>


    <div class="col-md-6 my-5 radio">
        <label for="yes_no_radio">{{ __('text.q25') }}</label>
        <div class="buttRadio">
            <input type="radio" name="yes_no9" id="yes9" value="yes" />
            <input type="radio" name="yes_no9" id="no9" value="no" checked/>
            <div class="switch">
                <label for="yes9">{{ __('text.yes1') }}</label>
                <label for="no9">{{ __('text.no1') }}</label>
              </div>
          </div>
        <input type="text" class="form-control radioText" name="txt_yes_no9"  id="validationCustom40" placeholder="{{ __('text.q25Input1') }}" >
    </div>

    <div class="form-row my-5 ">
        <div class="col-md-5 m-3">
          <input type="text" class="form-control" placeholder="{{ __('text.q25Input2') }} " id="validationCustom41"  name = "last_time" required>
          <div class="valid-feedback">
            {{ __('text.looksGood') }}
          </div>
          <div class="invalid-feedback">
            {{ __('text.validate9') }}
          </div>
        </div>
        <div class="col-md-5 ml-auto m-3">
          <input type="text" class="form-control" id="validationCustom42" placeholder="{{ __('text.q25Input3') }}" name = "often" required>
          <div class="valid-feedback">
             {{ __('text.looksGood') }}
          </div>
          <div class="invalid-feedback">
            {{ __('text.validate9') }}
          </div>
        </div>
    </div>
    <div class="text-center m-5">
        <h4 class="blue starter mt-5 mb-5">  {{ __('text.timeManagment') }}
        </h4>
    </div>
    <div class="col-md-12  my-5">
        <input type="text" class="form-control" id="validationCustom43" placeholder="{{ __('text.q25Input4') }}" name = "time_invest" required>
        <div class="valid-feedback">
          {{ __('text.looksGood') }}
        </div>
        <div class="invalid-feedback">
          {{ __('text.validate9') }}
          </div>
      </div>
        <div class="col-md-12 my-5">
          <input type="text" class="form-control" id="validationCustom44" placeholder="{{ __('text.q25Input5') }}"  name = "personal_goals" required>
          <div class="valid-feedback">
            {{ __('text.looksGood') }}
          </div>
          <div class="invalid-feedback">
            {{ __('text.validate9') }}
            </div>
        </div>
        <div class="col-md-12 my-5">
            <input type="text" class="form-control" id="validationCustom45" placeholder="{{ __('text.q25Input6') }}"  name = "miscellaneus" required>
            <div class="valid-feedback">
              {{ __('text.looksGood') }}
            </div>
            <div class="invalid-feedback">
              {{ __('text.validate9') }}
              </div>
          </div>
            <div class="col-md-5 ml-auto m-3">
              <input type="date" class="form-control" id="date"  name = "date" disabled >
              <div class="valid-feedback">
                {{ __('text.looksGood') }}
              </div>
              <div class="invalid-feedback">
                {{ __('text.validate9') }}
                </div>
            </div>
     

 
</div>

  
  <script>
    let d = new Date();
let datestring =
    d.getFullYear().toString() +
    "-" +
    (d.getMonth() + 1).toString().padStart(2, "0") +
    "-" +
    d
        .getDate()
        .toString()
        .padStart(2, "0");
document.getElementById("date").value = datestring;

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

