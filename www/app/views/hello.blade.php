@extends('layouts.default')

@section('content')
	<div>
	    <div id="get-started" class="intro-suw" style="background-image: url({{ URL::to('imgs/main_page.jpg') }}); background-size: cover;">
	        <h1 class="block-suw important-suw grabber-suw title-intro-suw" id="callout">Take Pictures. Solve Problems.</h1>

	        <!--<a href="." class="cta-btn-suw pill-suw h2">How It Works</a>-->
	        <button type="button" id="signup" class="btn-xlarge btn-custom" onclick="location.href='/users/create'">Get Started</button>
	        <!-- <a href="{{ URL::to('users/create') }}" class="btn-xlarge btn-custom">Get Started</a> -->

	    </div>

	    <div class="container" id="introduction">
	    	<div class="row">
	    		<div class="row" id="about">
	    			<h2>How it works for students and staff</h2>
	    		</div>
	    		<div class="row">
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/1-issue.png') }}" alt="Picture 1" class="img-rounded img-responsive" />
		    			</div>
		    			<h3>Find an issue</h3>
		    			<p>Do you have an issue that is FixWorthy? Maybe you've got a cockroach problem in your dorm shower or a broken door knob. We know you experience issues on campus and you want to send proof to the problem solvers.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/2-take-a-pic.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>Take a pic</h3>
		    			<p>Show us your issue by taking a pic or uploading a photo then view, follow, and discuss other issues around campus.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/3-get-it-solved.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>Get your issues solved!</h3>
		    			<p>We want to help make your troubles go away. Once the issue has been fixed, you'll be notified and the issue will be closed!</p>
		    		</div>
		    	</div>
	    	</div>

	    	<div class="row">
	    		<div class="row" id="about">
	    			<div class="row">
	    				<h2>How it works for universities</h2>
	    			</div>
	    		</div>
	    		<div class="row">
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/1-review-issues.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>Organize your issues</h3>
		    			<p>Review and prioritize the issues your students and staff submit in real-time.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/2-assign-track-analyze.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>Assign & Track</h3>
		    			<p>Assign tasks to maintenance professionals and track progress using our analytics dashboard.</p>
		    		</div>
		    		<div class="col-lg-4 col-md-4 box">
		    			<div class="round-img">
		    				<img src="{{ URL::to('media/3-close-the-issue.png') }}" alt="Picture 1" class="img-rounded img-responsive" style="margin:0 auto;"/>
		    			</div>
		    			<h3>Close the issue!</h3>
		    			<p>Once the issue is resolved, close it to keep everyone on the same page.</p>
		    		</div>
		    	</div>
	    	</div>


	    </div>
	 </div>

	 <!-- Begin green band for pricing -->
	 <div class="pricing" id="pricing">
	 	<div class="row">
	 		<h1>Pricing</h1>
	 	</div>
	 	<div class="row">
	 		<div class="hidden-lg hidden-md">
	 			<hr>
	 		</div>
	 		<div class="col-lg-3">
	 			<h4>Under 2,000 Students</h4>
	 			<h2>Free!</h2>
	 		</div>
	 		<div class="hidden-lg hidden-md">
	 			<hr>
	 		</div>
	 		<div class="col-lg-3">
	 			<h4>Under 10,000 Students</h4>
	 			<h2>$200 / month</h2>
	 		</div>
	 		<div class="hidden-lg hidden-md">
	 			<hr>
	 		</div>
	 		<div class="col-lg-3">
	 			<h4>Under 20,000 Students</h4>
	 			<h2>$400 / month</h2>
	 		</div>
	 		<div class="hidden-lg hidden-md">
	 			<hr>
	 		</div>
	 		<div class="col-lg-3">
	 			<h4>Over 20,000 Students</h4>
	 			<h2>$550 / month</h2>
	 		</div>
	 	</div>
	 </div>

@stop



