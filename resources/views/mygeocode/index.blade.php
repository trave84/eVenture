{{-- @extends('layouts.app')
@section('content')     --}}
    <!-- Geolocation CDN -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>    
    <title>My Geocode App</title>
    
    <div class="container">
      <div id="formatted-address"></div> 
      <div id="address-components"></div>
    </div>

    <script> 
      // CALL
      geocode();

      function geocode(){
        let location = '42 Rehorova Prague Czech Republic';
        axios.get('https://maps.googleapis.com/maps/api/geocode/json', {
          params:{
            address: location,
            key: 'AIzaSyANY_V__GrQYHbZlUat-AMO7Knvxd3Stvs'
          }
        })
        .then(function(response){
          // Log full response
          console.log(response);

          // Formated address
          let formated_address = response.data.results[0].formatted_address;

          let formatted_address_output = `
           <ul class="list-group">
              <li class="list-group-item">${formated_address}</li>
           </ul>  
          `;

          //Address Components
          let address_components = response.data.results[0].address_components;

          let address_comps_output = '<ul class="list-group">';
          for(let i=0; i<address_components.length; i++){
            address_comps_output += `
              <li class="list-group-item"><strong>${address_components[i].types[0]}</strong>:${address_components[i].long_name}</li>
            `;
          }
          address_comps_output += '</ul>';
          
          //Output to the app
          document.getElementById('formatted-address').innerHTML = formatted_address_output;
          
          document.getElementById('address-components').innerHTML = address_comps_output;


        })
        .catch(function(error){
          console.log(error);
        })
      }
    </script>

{{-- @endsection --}}