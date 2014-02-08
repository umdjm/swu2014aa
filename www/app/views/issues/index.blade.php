@extends('layouts.default')

@section('content')



<div id="map-row" class="row">
  <div class="col-md-4">
    <div id="map-div"></div>
  </div>
  <div class="col-md-3">
     <img src="http://www.metro.us/wp-content/uploads/2013/03/pothole.jpg" class="img-rounded"> </img>
  </div>
  <div class="col-md-5">
      <h3 id="issue-title">Pothole on Amherst</h3>
      <p id="issue-address">16011 Amherst, Beverly Hills MI </p>
      <p id="issue-description">The pothole on Amherst wrecked my car and I can't get the city to respond. </p>
      <p><a class="btn btn-primary btn-lg" role="button">Endorse <span id="issue-votes" class="badge">42</span></a></p>
  </div>
</div>

<div class="row">
<div class="col-md-12">
  <div id="tablecontainer">
    <table id="dc-data-table" class="list table table-striped table-bordered">
      <thead>
      <tr>
        <th data-dynatable-column="name">Issue Name</th>
        <th data-dynatable-column="address">Address</th>
        <th data-dynatable-column="votes">Votes</th>
      </tr>
      </thead>
    </table>
  </div>
</div>


 <script>
  var points;
  var markers = [];
function initData()
{
      points = [
      {name: "Pothole on Amherst", address:"16011 Amherst", lat: 42.521089, lng: -83.20907799999998, votes: 112},
      {name: "Broken Fence near Greenfield Elementary", address:"248 Woodward", lat: 42.4864196243879135, lng: -83.2806066962856802, votes: 59}
      ];
      initMap();
      initTable();

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

  var centerPos = new google.maps.LatLng(42.4864196243879135, -83.2806066962856802);
  var mapOptions = {
    zoom: 10,
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