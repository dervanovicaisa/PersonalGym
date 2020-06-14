@extends('layouts.main')

@section('content')
    <main >
      @include('components.languages')
      
        <div class="section">
            <section class="row  red7 " id="section-7">
              <div class="contentE ">
                <div class="w-75 mx-auto mt-5">
                    <div class="row w-100 m-3 ">
                          <div class=" logoKraj mr-4"><a href="/"><img src="/images/logos/Logo-DR.svg" alt="" /></a></div>
                          <div class="introt6 mt-auto"> 
                             
                        
                            <h1 class="naslov">OUR FIRST DATE</h1>
                      
                          </div>
                       </div>
                       <div class="row m-3 my-5">
                      <p class="opis">Dear friends! As you have came to this point, I suppose that we have a problem we need to solve. As we have a together's goal that needs to be achieved,
                        
                        I have prepared important questions so we could be able to get started as soon as possible. Earlier we start, sooner we past the goal.</p>
                      </div>
                      <div class="row m-3">
                        <p>So please, let me know...</p>
                        </div>
                    <div class="row forma">
    

    @include('layouts.form')
    @include('layouts.pt2_form')
    @include('layouts.pt3_form')

    
                      </div>
                  </div>
                </div>
            
            </section>
    </main>

@endsection