@extends('layouts.main')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/fullpage.css" />
<div id="fullpage" class="fp">
	<div class="section a1a">Some section</div>
	<div class="section a2a">Some section</div>
	<div class="section a3a">Some section</div>
	<div class="section"></div>

	<div class="section a4a">Some section</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/fullpage.js"></script>
<script>
	
	new fullpage('#fullpage', { 
    
});

</script>
@endsection