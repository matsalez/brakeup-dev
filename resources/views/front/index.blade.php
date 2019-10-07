@extends('front.template')

@section('pageTitle', 'Brake up | Home')

@section('mainContent')


<!-- foto home -->
<br>
<br>
<br>
<div class="container-fluid no-gutters ">
  <div class="row no-gutters">
    <img class="img-home" src="/images/home.jpg" alt="home-brakeup">
  </div>
</div>

<!-- banner instagram -->
<div class="banner-insta home no-gutters ">
  <div class="row no-gutters">
    <div id="banner-redes" class="col-12">
          <div class="">
            <p> Seguinos en  </p>
          </div>
          <div class="">
          	<a href="/"><i id="btn-banner" class="fab fa-facebook"></i></a>
          	<a href="/"><i id="btn-banner" class="fab fa-instagram"></i></a>
          </div>


    </div>
  </div>
</div>

<!-- banner instagram -->
<div class="no-gutters ">
  <div class="row no-gutters">
    <div class="col-lg-6 col-sm-12">
        <img id="img-banner" src="/images/home1.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12">
        <img id="img-banner" src="/images/home2.jpg" alt="">
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
  {
      "featureType": "all",
      "elementType": "geometry",
      "stylers": [
          {
              "color": "#9a939b"
          }
      ]
  },
  {
      "featureType": "all",
      "elementType": "labels.text.fill",
      "stylers": [
          {
              "gamma": 0.01
          },
          {
              "lightness": 20
          }
      ]
  },
  {
      "featureType": "all",
      "elementType": "labels.text.stroke",
      "stylers": [
          {
              "saturation": -31
          },
          {
              "lightness": -33
          },
          {
              "weight": 2
          },
          {
              "gamma": 0.8
          }
      ]
  },
  {
      "featureType": "all",
      "elementType": "labels.icon",
      "stylers": [
          {
              "visibility": "off"
          }
      ]
  },
  {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [
          {
              "lightness": 30
          },
          {
              "saturation": 30
          }
      ]
  },
  {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
          {
              "saturation": 20
          }
      ]
  },
  {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
          {
              "lightness": 20
          },
          {
              "saturation": -20
          }
      ]
  },
  {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
          {
              "lightness": 10
          },
          {
              "saturation": -30
          }
      ]
  },
  {
      "featureType": "road",
      "elementType": "geometry.stroke",
      "stylers": [
          {
              "saturation": 25
          },
          {
              "lightness": 25
          }
      ]
  },
  {
      "featureType": "water",
      "elementType": "all",
      "stylers": [
          {
              "lightness": -20
          }
      ]
  }
],
        {name: 'Styled Map'});

    // Create a map object, and include the MapTypeId to add
    // to the map type control.

    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.6277525, lng: -58.4798047},
      zoom: 15,
      mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                'styled_map']
      },

    });

    var image = '/images/marker-brakeup.png';

       var storeMarker = new google.maps.Marker({
         position: {lat: -34.627371, lng: -58.474321},
         map: map,

       });

       var storeMarker = new google.maps.Marker({
         position: {lat: -34.627742, lng:  -58.477668},
         map: map,

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
<div id="form" class="base-form container-fluid no-gutters">
  <div class="base-textos row no-gutters">
    <div class="col-12">
        <h2 class="titulo-contacto">CONTACTO</h2>
        <p class="texto-contacto">Querés conocer nuestra catálogo mayorista? Dejános un mensaje y te estaremos respondiendo a la brevedad. Recordá que podes escribirnos a través de nuestras redes o haciendo clic en el boton de Whatsapp que se encuentra en el margen derecho de nuestra página...</p>
    </div>
  </div>
  <br>
  <div id="formulario" class="base-inputs row no-gutters">
    <div class="col-lg-12">
      <form class="contact" action="{{ url('/') }}" method="post">

        {{ csrf_field() }}

        <div class="contact-form-control">
          <input id="input-sm" type="text" name="name" value="NOMBRE" onclick="if (this.value=='NOMBRE') this.value='';">
          <br>
          <br>
          <input id="input-sm" type="text" name="tel" value="TELEFONO" onclick="if (this.value=='TELEFONO') this.value='';">
          <br>
          <br>
          <input id="input-sm" type="email" name="email" value="EMAIL" onclick="if (this.value=='EMAIL') this.value='';">
          <br>

        </div>
        <br>
        <input id="input-md" type="text" name="msg" value="MENSAJE" onclick="if (this.value=='MENSAJE') this.value='';">

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
<script src="/js/placeholder.js"></script>



@endsection
