function initMap() {

    //map options
    let options = {
        zoom: 8,
        center: {
            lat: 42.3601,
            lng: 71.0589
        }
    }

    //new map
    const mapContainer = document.querySelector("#map");
    let map = new google.maps.Map(mapContainer, options);

    //listen for click on elements

    const NY = document.querySelector("#NY");
    const CA = document.querySelector("#CA");
    const FL = document.querySelector("#FL");
    const KY = document.querySelector("#KY");

    const swap = [NY, CA, FL, KY];
    swap.forEach(element => {
        element.addEventListener("click", changeLoc);
    });

    function changeLoc() {
        // console.log(this.id);
        switch (this.id) {
            case "NY":
                map.setZoom(11);
                map.setCenter(new google.maps.LatLng(markers[0].coords.lat, markers[0].coords.lng));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
            case "CA":
                map.setZoom(11);
                map.setCenter(new google.maps.LatLng(markers[1].coords.lat, markers[1].coords.lng));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
            case "FL":
                map.setZoom(11);
                map.setCenter(new google.maps.LatLng(markers[2].coords.lat, markers[2].coords.lng));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
            default:
                map.setZoom(11);
                map.setCenter(new google.maps.LatLng(markers[3].coords.lat, markers[3].coords.lng));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
        }
    }


    //Array of markers
    let markers = [{
        coords: {
            lat: 40.730610,
            lng: -73.935242
        }
    }, {
        coords: {
            lat: 37.7828,
            lng: -122.4111
        }
    }, {

        coords: {
            lat: 28.5503,
            lng: -81.3113
        }
    }, {

        coords: {
            lat: 38.166690,
            lng: -85.681349
        }
    }];
    //console.log(markers[0].coords.lat);

    //loop
    for (let i = 0; i < markers.length; i++) {
        addMarker(markers[i]);
    }


    //Add Marker Function
    function addMarker(props) {
        let marker = new google.maps.Marker({
            draggable: false,
            map: map,
            position: props.coords
        });
    }
}