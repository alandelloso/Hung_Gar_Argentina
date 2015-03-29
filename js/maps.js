$(document).on('ready', myMaps);

function myMaps() {

google.maps.event.addDomListener(window, 'load', initialize);

}

function initialize(condition) {

  var laPlata = new google.maps.LatLng(-34.917748,-57.943246);
  var capital = new google.maps.LatLng(-34.6358471,-58.4022663);

  var myOptions1 = {
    zoom: 16,
    center: laPlata,
    scrollwheel: false,
    draggable: false
  }

  var myOptions2 = {
    zoom: 16,
    center: capital,
    scrollwheel: false,
    draggable: false
  }

  var map1 = new google.maps.Map(document.getElementById("map-canvas"), myOptions1);

  var map2 = new google.maps.Map(document.getElementById("map-canvas2"), myOptions2); 


  var marker1 = new google.maps.Marker({
    position: laPlata,
    map: map1,
    title: "Sede Central"
  });



  var marker2 = new google.maps.Marker({
    position: capital,
    map: map2,
    title: "Sede Capital"
  });

  if($(window).width() >= 1065) {
    map1.set('draggable', true);
    map2.set('draggable', true);
  }

}

