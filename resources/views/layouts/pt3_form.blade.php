<div id="section_3_form" class="my-5" >
    <h1 class="blue m-3 yourdata">DESSERT </h1>
    <h1 class="blue m-3 yourdata"> YOUR EXPERIENCE IN FITNESS AND SPORTS  </h1>


    <div class="col-md-6 my-5 radio">
        <label for="yes_no_radio">Do you or did you do Fitness or Sports?</label>
        <div class="buttRadio">
            <input type="radio" name="yes_no9" id="yes9" value="yes" ></input>
            <input type="radio" name="yes_no9" id="no9" value="no" checked></input>
            <div class="switch">
                <label for="yes9">YES</label>
                <label for="no9">NO</label>
              </div>
          </div>
        <input type="text" class="form-control radioText" name="txt_yes_no9"  id="validationCustom40" placeholder="If so, which sport?*" >
    </div>

    <div class="form-row my-5 ">
        <div class="col-md-5 m-3">
          <input type="text" class="form-control" placeholder="When was the last time? " id="validationCustom41"  name = "last_time" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please provide a valid answer.
          </div>
        </div>
        <div class="col-md-5 ml-auto m-3">
          <input type="text" class="form-control" id="validationCustom42" placeholder="How often?" name = "often" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please provide a valid answer.
          </div>
        </div>
    </div>
    <div class="text-center m-5">
        <h1 class="blue starter mt-5 mb-5">  Time managmemt
        </h1>
    </div>
    <div class="col-md-12  my-5">
        <input type="text" class="form-control" id="validationCustom43" placeholder="How much time do you want to invest in your training?* " name = "time_invest" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
            Please provide a valid answer.
          </div>
      </div>
        <div class="col-md-12 my-5">
          <input type="text" class="form-control" id="validationCustom44" placeholder="What are your personal goals and desires, what do you want to achieve?*"  name = "personal_goals" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
              Please provide a valid answer.
            </div>
        </div>
        <div class="col-md-12 my-5">
            <input type="text" class="form-control" id="validationCustom45" placeholder="Miscellaneous(Other)"  name = "miscellaneus" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
                Please provide a valid answer.
              </div>
          </div>
            <div class="col-md-5 ml-auto m-3">
              <input type="date" class="form-control" id="date"  name = "date" disabled >
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                  Please provide a valid answer.
                </div>
            </div>
     
          <div class="prev_button">
            <button id="prev1" >Prev</button>
          </div> 

    <div class="intro_button submit mx-auto my-5">
        <button type="submit" type="submit">Send My Answers</button>
    </div>
</div>
  </div>
  </form>
  
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

