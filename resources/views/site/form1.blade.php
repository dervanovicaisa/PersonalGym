@extends('layouts.main')

@section('content')
    <main >
      @include('components.languages')
            <div class="row  red7 " id="section-7">
              <div class="contentE ">
              <div class="formaSlika "></div>

                <div class="questi mx-auto mt-5">
       
                   <!--    <div class="progress-wrap">
                        <progress max="100" value="0" id="progress"></progress>
                            <div class="progress-message" id="progress-message">Please fill out everything !</div>
                        </div> -->
                          <!-- multistep form -->
                     <form action="{{route('contact.store')}}" method="post" class="needs-validation " id="msform" >
                          {{ csrf_field() }}
                        <ul id="progressbar">
                            <li class="active">Starter</li>
                            <li>Main Course</li>
                            <li>Desert</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="row m-3 ">
                              <div class=" logoKraj  col-lg-2 col-md-2 col-sm-12 col-12 col-2">
                                <a href="/"><img src="/images/logos/Logo-DR.svg" alt="" />
                              </a>
                            </div>
                              <div class="introt6 col-lg-9 col-md-9 col-sm-12 col-12  m-auto"> 
                                  <h2 class="naslov ">OUR FIRST DATE</h2>
                                  <p class="opis">Dear friends! As you have came to this point, I suppose that we have a problem we need to solve. As we have a together's goal that needs to be achieved,
                                  I have prepared important questions so we could be able to get started as soon as possible. Earlier we start, sooner we past the goal.</p>
                              </div>
                            </div>
                              <div class="row m-3 mt-5">     </div>
                              <div class="row mb-3 mx-3">
                                <p>So please, let me know...</p>
                            </div>
                            @include('layouts.form')
                            <div class="next mb-5">
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
                        </fieldset>
                        <fieldset>
                            @include('layouts.pt2_form')
                            
                            <div class="prev_button prev previous">
                                  <svg id = "prev" xmlns="http://www.w3.org/2000/svg" width="160" height="38.918" viewBox="0 0 160 38.918">
                                    <defs>
                                      <style>
                                        .a{
                                          fill:none;
                                          stroke:#fff;
                                          stroke-linecap:round
                                          ;stroke-width:2px;
                                        }
                                        .b{
                                          fill:#fff;
                                          font-size:16px;
                                          font-family:Raleway-Medium, Raleway;
                                          font-weight:500;letter-spacing:0.15em;
                                        }</style>
                                      </defs>
                                      <g transform="translate(1 1.318)">
                                        <line class="a pravaPrev" y2="28.786" transform="translate(64.107 4.492) rotate(-90)"/>
                                        <g transform="translate(393.586 2341.385) rotate(180)" class="vrhPrev">
                                          <line class="a" x1="4.493" y1="10.199" transform="translate(322.694 2341.385) rotate(-90)"/>
                                          <line class="a" y1="10.199" x2="4.493" transform="translate(322.694 2336.893) rotate(-90)"/>
                                        </g>
                                    <text class="b" transform="translate(79 33.599)">
                                      <tspan x="-79.408" y="0">Previous section</tspan>
                                    </text>
                                  </g>
                                </svg>

                                </div>
                                <div class="next_button next">
                                  <svg id="next1" xmlns="http://www.w3.org/2000/svg" width="122" height="38.918" viewBox="0 0 122 38.918"><defs>
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
                        </fieldset>
                         <fieldset>
                                @include('layouts.pt3_form')
      
                                <div class="prev_button prev previous">
                                  <svg id = "prev" xmlns="http://www.w3.org/2000/svg" width="160" height="38.918" viewBox="0 0 160 38.918">
                                    <defs>
                                      <style>
                                        .a{
                                          fill:none;
                                          stroke:#fff;
                                          stroke-linecap:round
                                          ;stroke-width:2px;
                                        }
                                        .b{
                                          fill:#fff;
                                          font-size:16px;
                                          font-family:Raleway-Medium, Raleway;
                                          font-weight:500;letter-spacing:0.15em;
                                        }</style>
                                      </defs>
                                      <g transform="translate(1 1.318)">
                                        <line class="a pravaPrev" y2="28.786" transform="translate(64.107 4.492) rotate(-90)"/>
                                        <g transform="translate(393.586 2341.385) rotate(180)" class="vrhPrev">
                                          <line class="a" x1="4.493" y1="10.199" transform="translate(322.694 2341.385) rotate(-90)"/>
                                          <line class="a" y1="10.199" x2="4.493" transform="translate(322.694 2336.893) rotate(-90)"/>
                                        </g>
                                    <text class="b" transform="translate(79 33.599)">
                                      <tspan x="-79.408" y="0">Previous section</tspan>
                                    </text>
                                  </g>
                                </svg>

                                </div>         

            
                                <div class="intro_button  mx-auto my-5">
                                    <button class=" sendInq " type="submit" disabled>Send My Answers</button>
                                </div>
                        </fieldset>
                        </form>
         
                      </div>
                </div>
              </div>
    </main>


@endsection