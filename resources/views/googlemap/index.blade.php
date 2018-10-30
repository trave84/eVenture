@extends('layouts.app')
@section('content')


<div id="map"></div>
<style>
  #map{
    height:300px;
    width: 100%
  }
</style>

<script>
// Initialize and add the map
function initMap() {
  let options  = {
    zoom: 8,
    center:(lat:50.0755, lng:14.4378)
  }
   
// The location of Uluru
// var uluru = {lat: -25.344, lng: 131.036};

// The map, centered at Uluru
let map = new google.maps.Map(
  document.getElementById('map'), options);

let marker = new google.maps.Marker((
  position(), 
  map
  ))


}


<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANY_V__GrQYHbZlUat-AMO7Knvxd3Stvs&callback=initMap">
</script>

@endsection
