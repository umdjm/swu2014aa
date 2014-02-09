<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Fix Worthy</title>
        <link rel="shortcut icon" href="{{ URL::to('favicon.ico') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TODO: Add local fallback for bootstrap and jQuery -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <!-- Fontawesome -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Our custom css -->
        <link rel="stylesheet" href="{{ URL::to('css/style.css') . "?v1.0" }}">
        <link rel="stylesheet" href="{{ URL::to('css/jquery.dynatable.css')}}">
        <link rel="stylesheet" href="{{ URL::to('css/dc.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="{{ URL::to('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::to('js/shared.js')}}"></script>
        <script src="{{ URL::to('js/geolocate.js')}}"></script>
        <script src="{{ URL::to('js/crossfilter.js')}}"></script>
        <script src="{{ URL::to('js/d3.js')}}"></script>
        <script src="{{ URL::to('js/dc.js')}}"></script>
        <script type="text/javascript" src="http://www.google.com/jsapi?key=AIzaSyAeSzS1e65KEZkl9ENwN83zAJ64HfuYrQ4"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=visualization&.js"></script>
        <!-- Noty -->
        <script type="text/javascript" src="{{ URL::to('js/noty/packaged/jquery.noty.packaged.min.js') }}"></script>
    </head>
    <body>

            @if(Session::has('flash_success'))
                <script>
                    var n = noty({ 
                        text: "{{ Session::get('flash_success') }}",
                        type: "success",
                        timeout: 5000,
                        closeWith: ['click', 'hover']
                    });
                </script>
            @endif

            @if (Session::has('flash_error'))
                <script>
                    var n = noty({ 
                        text: "{{ Session::get('flash_error') }}",
                        type: "error",
                        timeout: 5000,
                        closeWith: ['click', 'hover']
                    });
                </script>
            @endif


            <nav id="page_header" class="block-suw navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/"><img src="{{ URL::to('/FW-logo.png')}}" /img></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/issues">Issues</a></li>
                    <li><a href="reports">Reports</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">How Issues Get Fixed</a></li>
                        <li><a href="#">How do Ideas Get Funded</a></li>
                      </ul>
                    </li>
                    @if(Auth::check())
                        <li><a href="{{ Url::to('logout') }}">Logout</a></li>
                    @else
                        <li><a href="#login" data-toggle='modal'>Login</a></li>
                    @endif
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        <div id="content">
            @yield('content')
        </div>
        
        <div id="footer">
            <div class="container" id="footer">
                <div class="row">
                    <br />
                    <p>&copy; Fix Worthy 2014</p>
                </div>
            </div>
        </div>

        <!-- login modal -->
        <div class="modal fade" id="login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>

                    <div class="modal-body">
                        <form class="form-horizontal" role="form" method="POST" action="/login">
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-5 col-md-5 control-label hidden-xs hidden-sm">Email</label>
                                    <div class="col-sm-12 col-xs-12 col-lg-5 col-md-5">
                                      <input type="email" class="form-control" id="inputEmail" placeholder="email" name="email">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-5 col-md-5 control-label hidden-xs hidden-sm">Password</label>
                                <div class="col-sm-12 col-xs-12 col-lg-5 col-md-5">
                                  <input type="password" class="form-control" id="inputPassword" placeholder="password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-actions ">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>



        <!-- Bootstrap JS -->
        <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    

    </body>
</html>