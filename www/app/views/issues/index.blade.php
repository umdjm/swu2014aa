@extends('layouts.default')

@section('content')

        <link rel="stylesheet" href="{{ URL::to('css/issue-index.css') }}">


<div class="row intro-header">
  <div class="col-md-8">
    <h1>What do you think is FixWorthy?<h1>
  </div>
  <div class="col-md-4">
       <img src="http://logonoid.com/images/university-of-michigan-logo.png">
  </div>
</div>

<div class="row issue-header">
  <div class="col-md-2">
        <button type="button" class="btn btn-default btn-selected">Open</button>
        <button type="button" class="btn btn-default">Fixed</button>
  </div>
  <div class="col-md-3">
      <div class="row">
            <div class="col-md-4">
                <label class="important h4 understated control-label">Category</label>
            </div>
            <div class="col-md-8">
                  <select class="form-control">
                              <option>Broken</option>
                              <option>Dirty</option>
                              <option>Graffiti</option>
                  </select>
            </div>
      </div>
  </div>
  <div class="col-md-3">
      <div class="row">
            <div class="col-md-2">
              <label class="important h4 understated control-label" for="issue-sort">Sort</label>
            </div>
            <div class="col-md-10">
                <select class="form-control">
                      <option>By Opened Date</option>
                      <option>By Status</option>
                      <option>By Priority</option>
                </select>
            </div>
      </div>
  </div>
  <div class="col-md-4">
      <input id="search-box" type="text" placeholder="Search Issues">
  </div>
</div>



<div class="wrapper" id="idea-wrapper">
<ol id="idea-list" class="block-list grid main-grid">

    <li data-count="2" data-totalcount="12" class="grid-block pill">
    	<article class="grid-idea">
            <a class="cover" href="/issues/create">
    			<img src="{{ URL::to('imgs/post-an-issue.png')}}" class="pill grid-img photo" alt="IdeaPot" width="500px" height="1000px">
            </a>
    	</article>
    </li>
  @foreach ($issues as $issue)

    <li data-count="2" data-totalcount="12" class="grid-block pill">
    	<article class="grid-idea">
            <a class="cover" href="/issues/{{ $issue->id }}">

                <div class="circleBase idea-status status-{{ $issue->priority_string() }}" >
                </div>
                <h1 class="important h4 overlay issue-name" >{{ $issue->name }}</h1>
    			<img src="{{ $issue->photo }}" class="pill grid-img photo" alt="IdeaPot" width="1000px" height="1000px">
    			<div class="pill overlay description">
                    Priority:{{ $issue->priority_string() }}
                    <p>{{ $issue->desc }}</p>
                </div>
            </a>
    	</article>
    </li>
  @endforeach
</ol>

 <script>
function initPage()
{
    $('[data-toggle="tooltip"]').tooltip({});
}

    document.addEventListener('DOMContentLoaded', initPage, false);
 </script>
@stop