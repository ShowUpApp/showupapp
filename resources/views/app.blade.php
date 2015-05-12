<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	 <nav id="menu" class="slideout-menu">
      <h2>Reviews</h2>
      <h2>{!! link_to('/shows', 'Shows') !!}</a></h2>
      <h2>Creative</h2>
      <h2>About</h2>
      <h2>Sign Out</h2>
    </nav>

    <main id="panel" class="slideout-panel">
      <header>
        <button class="toggle-button">☰</button>
      </header>
      <div id="Content">
        @yield('content')
      </div>
    </main>

	

	<!-- Scripts -->
    <script src="{{ asset('/js/vendor.js') }}"></script>
    <script>
      var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
      });

      // Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });
    </script>
</body>
</html>
