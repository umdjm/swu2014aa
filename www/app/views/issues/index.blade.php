@extends('layouts.default')

@section('content')

        <link rel="stylesheet" href="{{ URL::to('css/issue-index.css') }}">

<div class="container">
  <div class="row intro-header">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
      <h1>What do you think is FixWorthy?<h1>
    </div>
  </div>
<!--
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
-->
  <div id="tabbed-list">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#all" data-toggle="tab">All</a></li>
      <li><a href="#following" data-toggle="tab">Following</a></li>
      <li><a href="#my-issues" data-toggle="tab">My Issues</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="all">
        @include('partials.indexes/issues', array('issues' => $all))
      </div>
      <div class="tab-pane" id="following">
        @include('partials.indexes/issues', array('issues' => $following))
      </div>
      <div class="tab-pane" id="my-issues">
        @include('partials.indexes/issues', array('issues' => $mine))
      </div>
    </div>
  </div><!-- end tabbed list -->
</div>

 <script>
function initPage()
{
    $('[data-toggle="tooltip"]').tooltip({});
}

    document.addEventListener('DOMContentLoaded', initPage, false);
 </script>
@stop