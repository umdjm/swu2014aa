
function GetLocationFromIP(callback)
{
    $.get("http://ipinfo.io", function(response) {
        var loc = response.loc.split(",");

        if(callback) {
        	callback.call(this, {
        		coords: {
        			latitude: parseFloat(loc[0]),
        			longitude: parseFloat(loc[1])
        		}
        	})
        }
    }, "jsonp");
}