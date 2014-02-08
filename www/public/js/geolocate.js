function getPositionByIP(onSuccess, onFail) {
	$.get("http://ipinfo.io", function(response) {
        var loc = response.loc.split(",");

        if(onSuccess) {
        	onSuccess.call(this, {
        		coords: {
        			latitude: parseFloat(loc[0]),
        			longitude: parseFloat(loc[1])
        		}
        	})
        }
    }, "jsonp");
}

function getCurrentPosition(onSuccess, onFail) {
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(onSuccess, function failToIP() {
			getPositionByIP(onSuccess, onFail);
		});
	}
	else {
		getPositionByIP(onSuccess, onFail);
	}
}