@include('partials.header')
	
	<div class="preloader" id="pageLoad">
		<div class="holder">
			<div class="coffee_cup"></div>
		</div>
	</div>
	<!-- main wrapper -->
	<div id="wrapper">
		<div class="page-wrapper">
			@include('partials.navbar')
			@yield('container')
		</div>
			@include('partials.main-footer')
	</div>

@include('partials.footer')