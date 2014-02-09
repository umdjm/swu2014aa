@extends('layouts.default')

@section('content')
	<div>
	    <div id="get-started" class="intro-suw" style="background-image: url(http://electricsaver1200.com/blog/wp-content/uploads/2013/03/fixing-light.jpg); background-size: cover;">
	        <h1 class="block-suw important-suw grabber-suw title-intro-suw" id="callout">Take Pictures. Solve Problems.</h1>

	        <!--<a href="." class="cta-btn-suw pill-suw h2">How It Works</a>-->
	        <button type="button" id="signup" class="btn-xlarge btn-custom" onclick="location.href='/users/create'">Get Started</button>
	        <!-- <a href="{{ URL::to('users/create') }}" class="btn-xlarge btn-custom">Get Started</a> -->

	    </div>

	    <div class="container" id="introduction">
	    	<div class="row">
	    		<div class="row" id="about">
	    			<h2>HOW IT WORKS for students</h2>
	    		</div>
	    		<div class="row">
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/1-issue.png') }}" alt="Picture 1" class="img-rounded img-responsive" />
		    			</div>
		    			<h3>You've got issues.</h3>
		    			<p>Do you have an issue that is FixWorthy? Maybe you've got a cockroach problem in your dorm shower or a broken door knob. We know you experience issues on your campus and you want to send proof to those who can solve that problem.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/2-take-a-pic.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>take a pic</h3>
		    			<p>Show us your issue. Take a pic or upload a photo to our issue form. Select your location, give it a priority and post the issue. You can follow and view other issues on your campus, track the progress and see it solved.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/3-get-it-solved.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>get your issues solved</h3>
		    			<p>We want to help make your troubles go away. Onec your issue has been fixed, you will be notified and the issue will be closed.</p>
		    		</div>
		    	</div>
	    	</div>

	    	<div class="row">
	    		<div class="row" id="about">
	    			<div class="row">
	    				<h2>HOW IT WORKS for universities</h2>
	    			</div>
	    		</div>
	    		<div class="row">
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/1-review-issues.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>get your issues solved</h3>
		    			<p>We want to help make your troubles go away. Onec your issue has been fixed, you will be notified and the issue will be closed.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/2-assign-track-analyze.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>get your issues solved</h3>
		    			<p>We want to help make your troubles go away. Onec your issue has been fixed, you will be notified and the issue will be closed.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/3-close-the-issue.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>get your issues solved</h3>
		    			<p>We want to help make your troubles go away. Onec your issue has been fixed, you will be notified and the issue will be closed.</p>
		    		</div>
		    	</div>
	    	</div>


	    </div>
	 </div>

	 <!-- Begin green band for pricing -->
	 <div class="pricing">
	 	<div class="row">
	 		<div class="col-lg-8 col-lg-offset-2">
	 			<h4>- PRICING STARTS AT -</h4>
	 			<h2>$250 / MONTH</h2>
	 		</div>
	 	</div>
	 </div>

@stop


@section('footer')
	<div class="container" id="footer">
		<div class="row">
			<p>&copy; Fix Worthy 2014</p>
		</div>
	</div>

	
@stop

