<!DOCTYPE html>
<html>
	@include('layouts.parts.head')
    <body>
		@include('layouts.parts.beginbody')
		@if (isset($navigations) && isset($navigations['super']))
			@include('modules.navigations.supernav')
		@endif
		@if(isset($slideshow))
			@include('modules.slideshow',['slideshow'=>$slideshow,'id'=>'homepage'])
		@endif
		
		<div class="container">
				@include('layouts.parts.header')
				@yield('header')
		</div>
		<div class="container">
			@yield('content')
		</div>
			
		@include('layouts.parts.endbody')
    </body>
</html>