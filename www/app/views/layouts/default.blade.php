<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Works</title>
        <link rel="shortcut icon" href="{{ URL::to('img/favicon.png') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TODO: Add local fallback for bootstrap and jQuery -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <!-- Fontawesome -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Our custom css -->
        <link rel="stylesheet" href="{{ URL::to('css/style.css') . "?v1.0" }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    <body> 
        <div id="content">
            @yield('content')
        </div>
        
        <!-- Bootstrap JS -->
        <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    </body>
</html>