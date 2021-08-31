

          <form action="{{route('contact.store')}}" method="post">
            {{ csrf_field() }}
    <h1 class="blue m-3">Your Data</h1>

    <div class="form-row">
      <div class="col-md-5 m-3">
		  <!--Makao sam navodnike poslije form control-->
        <input type="text" class="form-control"  placeholder="Last name" name = "last_name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
            Please provide a valid name.
          </div>
      </div>
      <div class="col-md-5 ml-auto m-3">
        <input type="text" class="form-control" placeholder="E-Mail" name = "email" required>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
            Please provide a valid E-Mail.
          </div>
      </div>
    </div>
    <button class="btn btnNext btn-primary" type="submit">Submit form</button>
</form>