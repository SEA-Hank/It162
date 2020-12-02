window.mapInstance = {
    desktopCenter: {
        lat: 47.601530,
        lng: -122.257513
    },

    phoneCenter: {
        lat: 47.665780,
        lng: -122.625176
    },
    map: null,
    center: function () {
        let isDesktop = window.document.body.clientWidth > 600;
        console.log(isDesktop);
        return isDesktop ? this.desktopCenter : this.phoneCenter;
    }
};

var initMap = function () {
    mapInstance.map = new google.maps.Map(document.getElementById("map"), {
        zoom: 8,
        center: mapInstance.center(),
        zoomControl: false,
        streetViewControl: false,
        scaleControl: false,
        draggable: false,
        fullscreenControl: false,
        mapTypeControl: false
    });
    let flightPlanCoordinates = [{

            lat: 48.541924,
            lng: -122.366357
        },
        {
            lat: 48.090474,
            lng: -123.415119
        },
        {

            lat: 46.983643,
            lng: -123.408668
        },
        {
            lat: 46.720758,
            lng: -122.429408
        },
        {
            lat: 47.330741,
            lng: -121.807829
        }, {
            lat: 48.009455,
            lng: -121.758595
        }
    ];
    let flightPath = new google.maps.Polygon({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColor: "#f96302",
        strokeOpacity: 1.0,
        strokeWeight: 3,
        fillColor: "#f39233",
        fillOpacity: 0.3
    });
    flightPath.setMap(mapInstance.map);
}
window.addEventListener('resize', function () {
    let center = mapInstance.center();
    mapInstance.map.setCenter(center);
});