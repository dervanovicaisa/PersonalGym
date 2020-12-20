
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF MAIL</title>
   
</head>
<body>
  
    <style>
      
@page {
  size: A4;
}
            .content{
            color: black;
            width: 100%;
            border: 1px solid black;
            border-radius: 5px;1
            margin: 20px;
            font-family: 'Menlo';
        }
        .main{
           
            margin: auto;
        }
        h4{
           
        }
        .naslov{
            text-align: center;
            padding: 20px;
            border-radius: 20px;
            background-color: #eeeeee;
        }
        .p{
            opacity: 0.8;
        }
        .page-break{
            page-break-after: always;
        }
  .inline{
    clear:both; 
    position:relative;

  }
        .lapo{
          position:absolute; 
          left:0pt; width:192pt;
        }
        .rapo{
          margin-left:250pt;
        }
    </style>
    <div class="content">
        <div class="main">
<div class="naslov"><h2>YOUR DATA</h2>
</div>
<div class= "inline">
      <div class= "lapo">
        <h4 > Last name  : {{$last_name }} </h4>
        <h4>First name   : {{$first_name }} </h4>
        <h4>Date of birth   : {{$dob }}</h4>
        <h4>Adress : {{$adress }} </h4> 
    </div> 
    <div class= "rapo">
      <h4>E-Mail   : {{$email }}</h4>
      <h4>Telephone   : {{$tel }} </h4>
      <h4>Height : {{$height }}</h4>
      <h4>Weight : {{$weight }}</h4>
    </div>
</div>

<div class="page-break"></div>

    <h2 class="naslov" >STARTER - YOUR HEALTH, FITNESS</h2>

<div ><h4>How are you?*    : {{$howareyou }}</h4></div>

<div ><h4>Are you currently under medical treatment?*</h4>
<p>If yes, what is the reason for your medical treatment?*</p>
<h4>  {{$yes_no }} : {{$txt_yes_no }} </h4></div>
 <div ><h4>Do you smoke or have asthma/bronchitis?*</h4>
<p>If yes, what is the cause?*</p>
  <h4> {{$yes_no1 }} : {{$txt_yes_no1 }}  </h4></div>
  <div ><h4>Your blood pressure?*</h4>
  <h4> {{$high }}</h4></div>
  <div ><h4>Do you have diabetes?*</h4>
<p>If yes, which type?*</p>
  <h4> {{$yes_no2 }} : {{$txt_yes_no2 }} </h4></div>
  <div ><h4>Heart disease?*</h4>
<p>If yes, which?*</p>
  <h4> {{$yes_no3 }} : {{$txt_yes_no3 }} </h4></div>
  <div ><h4>Do you take medicine?*</h4>
<p>If yes, which?*</p>
  <h4> {{$yes_no4 }} : {{$txt_yes_no4 }} </h4></div>
  <div ><h4>Are you taking any kind of supplements?*</h4>
<p>If yes, which?*</p>
 <h4>  {{$yes_no5 }} : {{$txt_yes_no5 }} </h4></div>
 <div ><h4>Did you have any kind of surgeries?*</h4>
<p>If yes, which?*</p>
 <h4>  {{$yes_no6 }} : {{$txt_yes_no6 }} </h4></div>
 <div ><h4>Do you have back problems?*</h4>
<p>If yes, which?*</p>
  <h4> {{$yes_no7 }} : {{$txt_yes_no7 }} </h4></div>
  <div ><h4>Joint problems?*</h4>
<p>If yes, which?*</p>
  <h4> {{$yes_no8 }} : {{$txt_yes_no8 }} </h4></div>
  <div class="page-break"></div>
  <h2 class="naslov" >MAIN</h2>


<div>
    <h4>How many hours do you sleep deep and good?</h4>
    <h4>  {{$pitanje1 }}</h4>
</div>
<div>
    <h4>Sleep regularly and before midnight?</h4>
    <h4>  {{$pitanje2 }}</h4>
</div>
<div>
    <h4>Do you feel rested, relaxed and frash when you wake up in the morning?</h4>
    <h4>  {{$pitanje3 }}</h4>
</div>
<div>
    <h4>How many hours do you work per week?</h4>
    <h4>  {{$pitanje4 }}</h4>
</div>
<div>
    <h4>Do you feel relaxed, strong, full of energy, in control, creative, thirst for action?</h4>
    <h4>  {{$pitanje5 }}</h4>
</div>
<div>
    <h4>How often do you feel pressure, loss of control, negative feelings, hopelessness, anger, affraid of the future?</h4>
    <h4>  {{$pitanje6 }}</h4>
</div>
<div>
    <h4>How many hours do you move per week? (Only at least 30 minutes counts)</h4>
    <h4>  {{$pitanje7 }}</h4>
</div>
<div>
    <h4>How is the intensity mostly when doing sports or other physical activities?</h4>
    <h4>  {{$pitanje8 }}</h4>
</div>
<div>
    <h4>Do you regularly do health-promoting strength training under competent guidance?</h4>
    <h4>  {{$pitanje9 }}</h4>
</div>
<div>
    <h4>How many servings of fresh fruit, lettuce, vegetables, sprouts and seeds do you eat every day?</h4>
    <h4>  {{$pitanje10 }}</h4>
</div>
<div>
    <h4>Do you drink 2-3 litres of still water a day?</h4>
    <h4>  {{$pitanje11 }}</h4>
</div>
<div>
    <h4>Do you have high blood pressure, high colesterol, high <br> triglycerides, and/or high blood sugar?</h4>
    <h4>  {{$pitanje12 }}</h4>
</div>
<div>
    <h4>Abdominal circumference: Stand upright in a relaxed  <br>manner, place the measuring tape horizontally around the <br> belly near the belly button, exhale and relax.</h4>
    <h4>  {{$pitanje13 }}</h4>
</div>
  <div class="page-break"></div>

    <h2 class="naslov" >Dessert</h2>

<div ><h4>Do you or did you do Fitness or Sports?
  *</h4>
  <p>If so, which sport?*</p>
    <h4> {{$yes_no9 }} : {{$txt_yes_no9 }} </h4></div>
    <div><h4>When was the last time?   : {{$last_time }}</h4></div>
    <div><h4>How often?  : {{$often }}</h4></div>
    <h3 class="naslov" >Time Managment</h3>

    <div><h4>How much time do you want to invest in your training?  : {{$time_invest }}</h4></div>
    <div><h4>What are your personal goals and desires, what do you want to achieve?  : {{$personal_goals }}</h4></div>
    <div><h4>Miscellaneous(Other)  : {{$miscellaneus }}</h4></div>
 
    <div class= "inline">
      <div class= "lapo">
        <h4>Signature  : </h4>
    </div> 
    <div class= "rapo">
      <h4>Date  : {{$date }}</h4>
    </div>
</div>
</div>
</div>
</body>

</html>