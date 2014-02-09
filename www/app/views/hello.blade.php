@extends('layouts.default')

@section('content')

    <div class="intro-suw" style="background-image: url(http://electricsaver1200.com/blog/wp-content/uploads/2013/03/fixing-light.jpg); background-size: cover;">
        <h1 class="block-suw important-suw grabber-suw title-intro-suw" id="callout">Fix the issues your employees care about most. </h1>

        <!--<a href="." class="cta-btn-suw pill-suw h2">How It Works</a>-->
        <button type="button" id="signup" class="btn-xlarge btn-custom" onclick="location.href='/users/create'">Get Started</button>

    </div>

    <div class="container" id="introduction">
    	<div class="row">
    		<div class="row">
    			<h2>HOW IT WORKS</h2>
    		</div>
    		<div class="row">
	    		<div class="col-lg-4 col-md-4 box">
	    			<h3>Column 1</h3>
	    			<img src='' alt="Picture 1" class="img-rounded"/>
	    		</div>
	    		<div class="col-lg-4 col-md-4 box">
	    			<h3>Column 2</h3>
	    			<p>Suspendisse at orci in nisi pellentesque tincidunt ac vel quam. Sed fermentum rutrum enim quis egestas. Nullam sodales pharetra nibh, et volutpat leo. Nulla scelerisque magna felis, ut facilisis lorem tristique a. Nunc vitae ante ultrices, imperdiet felis quis, semper velit. Nulla commodo, tortor nec porttitor vehicula, mi velit egestas orci, ac ultricies mauris orci vitae dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat, enim in hendrerit gravida, mauris metus varius tellus, quis sagittis purus metus ac libero. Phasellus quis erat elit. Integer at bibendum metus. Suspendisse vel massa nisi. Sed posuere id enim eget elementum.</p>
	    		</div>
	    		<div class="col-lg-4 col-md-4 box">
	    			<h3>Column 3</h3>
	    			<p>Vestibulum eget volutpat mauris. Fusce gravida nunc nec purus fringilla, et sollicitudin diam volutpat. Mauris odio risus, tincidunt ut quam sed, facilisis commodo est. Phasellus adipiscing lacus vitae nulla mollis, eu luctus purus molestie. Pellentesque massa quam, luctus a sodales congue, malesuada tincidunt velit. Phasellus ultrices tincidunt ante, eu congue elit blandit pretium. Cras consectetur ultricies nisl, eget congue arcu pulvinar in. Aenean ac lectus sed neque adipiscing mattis. In hac habitasse platea dictumst. Mauris commodo nisl at interdum auctor. Aliquam aliquam purus id leo fringilla, in aliquet mi dictum. Ut sodales dui et dignissim dictum. Suspendisse ullamcorper ante a pulvinar iaculis. Aliquam sit amet libero vel nunc vestibulum dapibus.</p>
	    		</div>
	    	</div>
    	</div>

    	<div class="row">
    		<div class="col-lg-3 col-md-3 box">
    			<h3>Column 1</h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultricies, lorem vel viverra euismod, elit velit malesuada lectus, vitae facilisis tellus odio eu risus. Curabitur lobortis vulputate sem et convallis. Phasellus non sapien id nunc adipiscing consequat sed vitae erat. Morbi vel tortor leo. Nunc quis nulla augue. Nulla pretium ac neque a sollicitudin. Duis sagittis non lectus ac lobortis. Duis volutpat, orci sed vestibulum feugiat, lectus lectus scelerisque sem, ac porta nulla tellus ac enim. Phasellus egestas quam eget fermentum tristique. Duis a semper dolor, ut aliquam purus. Morbi vulputate nisl eu sem volutpat pretium.</p>
    		</div>
    		<div class="col-lg-3 col-md-3 box">
    			<h3>Column 2</h3>
    			<p>Suspendisse at orci in nisi pellentesque tincidunt ac vel quam. Sed fermentum rutrum enim quis egestas. Nullam sodales pharetra nibh, et volutpat leo. Nulla scelerisque magna felis, ut facilisis lorem tristique a. Nunc vitae ante ultrices, imperdiet felis quis, semper velit. Nulla commodo, tortor nec porttitor vehicula, mi velit egestas orci, ac ultricies mauris orci vitae dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat, enim in hendrerit gravida, mauris metus varius tellus, quis sagittis purus metus ac libero. Phasellus quis erat elit. Integer at bibendum metus. Suspendisse vel massa nisi. Sed posuere id enim eget elementum.</p>
    		</div>
    		<div class="col-lg-3 col-md-3 box">
    			<h3>Column 3</h3>
    			<p>Vestibulum eget volutpat mauris. Fusce gravida nunc nec purus fringilla, et sollicitudin diam volutpat. Mauris odio risus, tincidunt ut quam sed, facilisis commodo est. Phasellus adipiscing lacus vitae nulla mollis, eu luctus purus molestie. Pellentesque massa quam, luctus a sodales congue, malesuada tincidunt velit. Phasellus ultrices tincidunt ante, eu congue elit blandit pretium. Cras consectetur ultricies nisl, eget congue arcu pulvinar in. Aenean ac lectus sed neque adipiscing mattis. In hac habitasse platea dictumst. Mauris commodo nisl at interdum auctor. Aliquam aliquam purus id leo fringilla, in aliquet mi dictum. Ut sodales dui et dignissim dictum. Suspendisse ullamcorper ante a pulvinar iaculis. Aliquam sit amet libero vel nunc vestibulum dapibus.</p>
    		</div>
    		<div class="col-lg-3 col-md-3 box">
    			<h3>Column 4</h3>
    			<p>Vestibulum eget volutpat mauris. Fusce gravida nunc nec purus fringilla, et sollicitudin diam volutpat. Mauris odio risus, tincidunt ut quam sed, facilisis commodo est. Phasellus adipiscing lacus vitae nulla mollis, eu luctus purus molestie. Pellentesque massa quam, luctus a sodales congue, malesuada tincidunt velit. Phasellus ultrices tincidunt ante, eu congue elit blandit pretium. Cras consectetur ultricies nisl, eget congue arcu pulvinar in. Aenean ac lectus sed neque adipiscing mattis. In hac habitasse platea dictumst. Mauris commodo nisl at interdum auctor. Aliquam aliquam purus id leo fringilla, in aliquet mi dictum. Ut sodales dui et dignissim dictum. Suspendisse ullamcorper ante a pulvinar iaculis. Aliquam sit amet libero vel nunc vestibulum dapibus.</p>
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