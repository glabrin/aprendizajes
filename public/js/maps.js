var map;
'use strict';
if ($('#map').length) {
  function initMap() {
    //Map location
    var MapLocation = {
      lat: -32.5049883,
      lng: -63.8809985
    };

    // Map Zooming
    var MapZoom = 6;
    
    var sedes= {
      "cordobaNorte":{
        lat:-31.3616665, 
        lng:-64.1395206
      },
      "cordobaCentro":{
        lat:-31.4243943, 
        lng:-64.1777268
      },
      "villaMaria":{
        lat:-32.4093066, 
        lng:-63.2191094
      },
      "rioCuarto":{
        lat:-33.1325486, 
        lng:-64.347191
      },
      "transito":{
        lat:-31.4255697, 
        lng:-63.1987152
      },
      "laPara":{
        lat:-30.8932191, 
        lng:-63.0064585
      },
      "carlosPaz":{
        lat:-31.4052966, 
        lng:-64.4779376
      },
      "laCalera":{
        lat:-31.339818, 
        lng:-64.3439906
      },
      "villaDolores":{
        lat:-31.9437813, 
        lng:-65.1952171
      },
      "laboulaye":{
        lat:-34.1255489, 
        lng:-63.3911186
      },
      };      
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: MapZoom,
      center: MapLocation,
      styles: [{
          "featureType": "landscape.man_made",
          "elementType": "geometry",
          "stylers": [{
            "color": "#f7f1df"
          }]
        },
        {
          "featureType": "landscape.natural",
          "elementType": "geometry",
          "stylers": [{
            "color": "#d0e3b4"
          }]
        },
        {
          "featureType": "landscape.natural.terrain",
          "elementType": "geometry",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "poi",
          "elementType": "labels",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "poi.business",
          "elementType": "all",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "poi.medical",
          "elementType": "geometry",
          "stylers": [{
            "color": "#fbd3da"
          }]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [{
            "color": "#bde6ab"
          }]
        },
        {
          "featureType": "road",
          "elementType": "geometry.stroke",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "road",
          "elementType": "labels",
          "stylers": [{
            "visibility": "off"
          }]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffe15f"
          }]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [{
            "color": "#efd151"
          }]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }]
        },
        {
          "featureType": "road.local",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "black"
          }]
        },
        {
          "featureType": "transit.station.airport",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#cfb2db"
          }]
        },
        {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [{
            "color": "#a2daf2"
          }]
        }
      ]
    });
    for (var i in sedes) {
      var marker = new google.maps.Marker({
        position: sedes[i],
        icon: '/images/menu_icons/proa_maps.png', 
        map: map
      });
    }
    
  };
}