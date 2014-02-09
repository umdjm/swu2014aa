@extends('layouts.default')

@section('content')

        <link rel="stylesheet" href="{{ URL::to('css/issue-index.css') }}">


<div class="row issue-header">
  <div class="col-md-2">
        <button type="button" class="btn btn-default btn-selected">Open</button>
        <button type="button" class="btn btn-default">Fixed</button>
  </div>
  <div class="col-md-3">
      <div class="row">
            <div class="col-md-3">
                <label class="important h4 understated control-label">Category</label>
            </div>
            <div class="col-md-9">
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
            <div class="col-md-3">
              <label class="important h4 understated control-label" for="issue-sort">Sort</label>
            </div>
            <div class="col-md-9">
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
    			<img src="{{ URL::to('imgs/post-an-issue.png')}}" class="pill grid-img photo" alt="IdeaPot" width="1000px" height="1000px">
            </a>
    	</article>
    </li>
  @foreach ($issues as $issue)

    <li data-count="2" data-totalcount="12" class="grid-block pill">
    	<article class="grid-idea">
            <a class="cover" href="/issues/{{ $issue->id }}">
                <h1 class="important h4 overlay">{{ $issue->name }}</h1>
    			<img src="{{ $issue->photo }}" class="pill grid-img photo" alt="IdeaPot" width="1000px" height="1000px">
            </a>
    	</article>
    </li>
  @endforeach
</ol>

 <script>
  var points;
  var markers = [];
function initData()
{
      points = [
      {name: "Palmer Commons Pothole", address:"100 Washtenaw Ave, Ann Arbor, MI 48109", lat: 42.3241, lng: -83.7113, votes: 112},
      {name: "Light Broken at Big House", address:"1201 S Main St, Ann Arbor, MI 48104", lat: 42.265922, lng: -83.748776, votes: 59}
      ];
      initMap();
      initTable();
      GetLocationFromIP();
}

function initTable()
{
    $('#dc-data-table').dynatable({
      features: {
        paginate: true,
        sort: true,
        pushState: false,
        search: false,
        recordCount: true,
        perPageSelect: false
      },
        dataset: {
            records: points,
            perPageDefault: 5,
            perPageOptions: [5, 10, 15]
        }
    });
    $('#dc-data-table tbody tr').click(chooseIssue);
    $('#dc-data-table tbody tr:nth-child(1)').click();
}
function chooseIssue(event)
{
    var title = $(this).find("td:nth-child(1)").text();
    var address = $(this).find("td:nth-child(2)").text();
    var votes = $(this).find("td:nth-child(3)").text();
    $("#issue-title").text(title);
    $("#issue-address").text(address);
    $("#issue-votes").text(votes);

}
function initMap() {
  google.maps.visualRefresh = true;

  var centerPos = new google.maps.LatLng(42.3, -83.73);
  var mapOptions = {
    zoom: 11,
    center: centerPos,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapTypeControl: false,
    streetViewControl: false
  };
  map = new google.maps.Map(document.getElementById('map-div'), mapOptions);

    // create array of markers from points and add them to the map
    for (var i = 0; i < points.length; i++) {
      var point = points[i];
      var position = new google.maps.LatLng(point.lat, point.lng);;

      markers[i] = new google.maps.Marker({
        position: position,
        map: map,
        title: point.name + ',' + point.address
      });
    }
}

    document.addEventListener('DOMContentLoaded', initData, false);
 </script>
@stop