
function GetLocationFromIP()
{
    $.get("http://ipinfo.io", function(response) {
        var loc = response.loc.split(",");

        var lat = parseFloat(loc[0]);
        var lng = parseFloat(loc[1]);
        console.log({lat: lat, lng: lng});

    }, "jsonp");
}