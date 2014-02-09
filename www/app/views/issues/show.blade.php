@extends('layouts.default')

@section('content')

    <link rel="stylesheet" href="{{ URL::to('css/issue-show.css') }}">

	<div class="container">
		<div class="clear-header">
	    <div>
		<div class="row">
			<div class="col-md-6">
			        <img class="issue-hero-image" src="{{ $issue->photo }}"></img>
			</div>
			<div class="col-md-6">
				<h3 class="issue-field-spacing">
					{{ $issue->name }}
				</h3>
				@if( Auth::user()->canEdit($issue) )
                     <a href="{{ URL::to( '/issues/' . $issue->id . '/edit' ) }}" class="issue-btn issue-field-spacing btn btn-primary btn-large">
                         <i class="fa fa-pencil"></i>
                         Edit
                     </a>
                 @else

					@if ($issue->is_tracked_by_user())
						<?php $track = Track::where('user_id', '=', Auth::user()->id)
			                ->where('issue_id', '=', $issue->id)
			                ->first(); ?>
						{{ Form::open(array('id' => 'form', 'role' => 'form', 'url' => 'tracks/' . $track->id, 'method' => 'DELETE')) }}
							{{ Form::submit('Endorsed', array('class'=>'issue-btn btn-endorsed issue-field-spacing btn btn-primary')) }}
                            <span><i class="fa fa-thumbs-up"> </i>{{ $issue->get_tracking_count() }} </span>
				    {{ Form::close() }}
					@else
						{{ Form::open(array('id' => 'form', 'role' => 'form', 'url' => 'tracks', 'method' => 'POST')) }}
			        {{ Form::hidden('issue_id', $issue->id, array('id' => 'issue_id')) }}
							{{ Form::submit('Endorse', array('class'=>'issue-btn issue-field-spacing btn btn-primary')) }}
                            <span><i class="fa fa-thumbs-up"> </i>{{ $issue->get_tracking_count() }}</span>
				    {{ Form::close() }}
					@endif

                 @endif

                 <div class="row">
                    <div class="col-md-12">
                        <p>
                            <span></span>
                            Submitted by
                            <span>{{ $issue->user->name }}</span>
                        </p>
                        @include('partials/issue-status', array('issue'=>$issue))
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ $issue->desc }}
                    </div>
                </div>
			</div>
		</div>

            <div class="row">
                <div class="col-md-3">
                    <div id="google-map"></div>
                </div>
                <div class="col-md-9">
                    @include('partials.comments', array('issue_id' => $issue->id, 'comments' => $issue->comments))
                </div>
            </div>
	<script>
	    function initPage()
	    {
            initMap();
	    }
		function initMap() {
			var marker;

			google.maps.visualRefresh = true;

			var lat = {{ $issue->latitude }};
			var lng = {{ $issue->longitude }};

			var options = {
				zoom: 15,
				center: new google.maps.LatLng(lat, lng),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false,
				streetViewControl: false
			};

			var mapElem = document.getElementById('google-map'); 
			var map = new google.maps.Map(mapElem, options);

			marker = new google.maps.Marker({
				position: new google.maps.LatLng(lat, lng),
				map: map
			});

		}

		document.addEventListener('DOMContentLoaded', initPage, false);
	</script>
@stop