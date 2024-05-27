define(['jquery', 'googleMaps'], function($) {
  $(document).ready(function() {
      console.log('Google Maps JavaScript file loaded successfully.');

      var input = $('#shipping-new-address-form input[name="street[0]"]')[0];
      if (!input) {
          console.error('Address input field not found');
          return;
      }

      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.setFields(['address_component']);

      autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          var addressComponents = place.address_components;
          var address = {
              street: '',
              city: '',
              state: '',
              zip: ''
          };

          addressComponents.forEach(function(component) {
              var types = component.types;

              if (types.includes('street_number')) {
                  address.street = component.long_name + ' ' + address.street;
              }

              if (types.includes('route')) {
                  address.street += component.long_name;
              }

              if (types.includes('locality')) {
                  address.city = component.long_name;
              }

              if (types.includes('administrative_area_level_1')) {
                  address.state = component.short_name;
              }

              if (types.includes('postal_code')) {
                  address.zip = component.long_name;
              }
          });

          $('input[name="street[0]"]').val(address.street);
          $('input[name="city"]').val(address.city);
          $('input[name="region"]').val(address.state);
          $('input[name="postcode"]').val(address.zip);
      });
  });
});
