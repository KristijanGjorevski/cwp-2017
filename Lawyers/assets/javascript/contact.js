function initMap() {

    //map options
    let options = {
        zoom: 10,
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
        console.log(this.id);
        switch (this.id) {
            case "NY":
                map.setZoom(18);
                map.setCenter(new google.maps.LatLng(40.7061, -70.9495));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
            case "CA":
                map.setZoom(18);
                map.setCenter(new google.maps.LatLng(37.7828, -122.4111));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
            case "FL":
                map.setZoom(18);
                map.setCenter(new google.maps.LatLng(28.5503, -81.3113));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
            default:
                map.setZoom(18);
                map.setCenter(new google.maps.LatLng(38.166690, -85.681349));
                map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                break;
        }
    }

    /*
    //add marker
    let marker = new google.maps.Marker({
        position: {
            lat: 42.4668,
            lng: -70.9495
        },
        icon: "",
        draggable: true,
        map: map
    });

    var infoWindow = new google.maps.InfoWindow({
        content: "<h1>Lawyer & Attorney</h1>"
    });

    marker.addListener("click", function() {
        infoWindow.open(map, marker);
    });
    */
    //Array of markers
    let markers = [{
        coords: {
            lat: 40.7061,
            lng: -70.9495
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