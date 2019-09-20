@extends('front.template')

@section('pageTitle', 'Brake up | Home')

@section('mainContent')


<!-- foto home -->

<div class="container-fluid no-gutters ">
  <div class="row no-gutters">
    <img class="img-home" src="/images/home.jpg" alt="home-brakeup">
  </div>
</div>

<!-- banner instagram -->
<div id="banner-redes" class="banner-insta home no-gutters ">
  <div class="row no-gutters">
    <div class="col-12">

          <p>Follow us</p>
        	<a href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank"><i id="btn-banner" class="fab fa-whatsapp"></i></a>
        	<a href="/"><i id="btn-banner" class="fab fa-facebook"></i></a>
        	<a href="/"><i id="btn-banner" class="fab fa-instagram"></i></a>

    </div>
  </div>
</div>

<!-- boton whatsapp -->
<div class="btn-whatsapp">
  <a id="btn-wh" href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<!-- GOOGLE MAPS -->

<div id="map"></div>
<script>
  function initMap() {

    // Create a new StyledMapType object, passing it an array of styles,
    // and the name to be displayed on the map type control.
    var styledMapType = new google.maps.StyledMapType(
        [
          {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
          {
            featureType: 'administrative',
            elementType: 'geometry.stroke',
            stylers: [{color: '#c9b2a6'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'geometry.stroke',
            stylers: [{color: '#8c8c8c'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'labels.text.fill',
            stylers: [{color: '#70655a'}]
          },
          {
            featureType: 'landscape.natural',
            elementType: 'geometry',
            stylers: [{color: '#aaaaaa'}]
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [{color: '#dfaedf'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9c928f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry.fill',
            stylers: [{color: '#797e62'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#788e6f'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#a38da0'}]
          },
          {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [{color: '#f09dfa'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry.stroke',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'road.local',
            elementType: 'labels.text.fill',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'geometry',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.fill',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'geometry',
            stylers: [{color: '#f4cef9'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [{color: '#998d97'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#998d97'}]
          }
        ],
        {name: 'Styled Map'});

    // Create a map object, and include the MapTypeId to add
    // to the map type control.

    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.6277525, lng: -58.4798047},
      zoom: 11,
      mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                'styled_map']
      },
    });

    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
       var beachMarker = new google.maps.Marker({
         position: {lat: -34.6277525, lng: -58.4798047},
         map: map,
         icon: image
       });



    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgbBoiCfWxdnYNyCVc-hquYhTcc7GVYAg&callback=initMap">
</script>

<!-- formulario de contacto -->
<div class="base-form container-fluid no-gutters">
  <div class="base-textos row no-gutters">
    <div class="col-12">
        <h2 class="titulo-contacto">CONTACTO</h2>
        <p class="texto-contacto">En qué te puedo ayudar? Dejame tu mensaje y estaré respondiendo a la brevedad</p>
    </div>
  </div>
  <br>
  <div id="formulario" class="base-inputs row no-gutters">
    <div class="col-12">
      <form class="contact" action="" method="post">
        <div class="contact-form-control">
          <input id="input-sm" type="text" name="nombre" value="NOMBRE">
          <br>
          <br>
          <input id="input-sm" type="text" name="telefono" value="TELEFONO">
          <br>
          <br>
          <input id="input-sm" type="email" name="email" value="EMAIL">
          <br>

        </div>

        <br>
        <input id="input-md" type="text" name="mensaje" value="MENSAJE">


        <br>
        <br>
        <div class="">
        <button id="button-form" type="submit" name="button">ENVIAR</button>
        </div>
        <br>
        <br>
      </form>
    </div>

  </div>
</div>




<!-- SCRIPTS -->

<script src="/js/navbar.js"></script>



@endsection
