@extends('layouts.default')

@section('content')
    <div class="intro-suw" style="background-image: url(http://blog.mlive.com/grpress/2008/03/1pothole.jpg); background-size: cover;">
        <h1 class="block-suw important-suw grabber-suw title-intro-suw" id="callout">Endorse an idea for improving your community. </h1>
        
        <!--<a href="." class="cta-btn-suw pill-suw h2">How It Works</a>-->
        <button type="button" role="button" class="btn btn-xlarge btn-primary">How It Works</button>
    
        <div class="modal" id="login">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        				<h4 class="modal-title">Login</h4>
        			</div>

        			<div class="modal-body">
        				<form class="form-horizontal" role="form" method="" action="">
							  <div class="form-group">
							    <label for="inputEmail" class="col-sm-2 col-lg-5 control-label">Email</label>
								    <div class="col-sm-10 col-lg-5">
								      <input type="email" class="form-control" id="inputEmail" placeholder="email">
								    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword" class="col-sm-2 col-lg-5 control-label">Password</label>
							    <div class="col-sm-10 col-lg-5">
							      <input type="password" class="form-control" id="inputPassword" placeholder="password">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="passwordConfirmation" class="col-sm-2 col-lg-5 control-label"></label>
							    <div class="col-sm-10 col-lg-5">
							      <input type="password" class="form-control" id="passwordConfirmation" placeholder="confirm password">
							    </div>
							  </div>


							  <div class="form-group">
							  	<button type="submit" class="btn btn-primary">Login</button>
							  </div>
						</form>
        			</div>

        		</div>
        	</div>
        </div>



    </div>


    

@stop

@section('login')
	
@stop