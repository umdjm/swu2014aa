@extends('layouts.default')

@section('content')


<div class="row">
  <div class="col-md-12">
   <h1>Current Issues in the Ann Arbor Community</h1>
  </div>
</div>

<div id="map-row" class="row">
  <div class="col-md-12 col-sm-12">
    <div id="map-div"></div>
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