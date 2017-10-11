<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        
        <!-- CORE CSS -->
        
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">	   
          <link href="/css/theme.css" rel="stylesheet">  
	
	</style>
	    <!-- PLUGINS -->
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet">        
        
        <script src="{{ asset('js/app.js') }}"></script>
        
        
    </head>
    <body>
        <div id="app">
            @include('inc.navbar')
            <div class='container'>
                @include('inc.messages')
                @yield('content')
            </div>            
        </div>           
    </body>
    <footer>
        @include('inc.footer')
    </footer>        
</html>
