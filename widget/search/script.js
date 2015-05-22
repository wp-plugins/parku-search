(function() {

  /**
   * Add search autocomplete to all searchboxes that have this enabled.
   */
  var initParkuSearch = function () {
    var elements = document.querySelectorAll('.parku-location-input.autocomplete');

    for(var i=0;i<elements.length;i++) {
      new google.maps.places.Autocomplete(elements[i]);
    }
  };


  /**
   * Call initParkuSearch directly if the Google Places was already loaded or
   * load Google Places async with initParkuSearch as a callback.
   */
  if ("object" == typeof google && "object" == typeof google.maps.places) {
    initParkuSearch();
  }
  else {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "https://maps.google.com/maps/api/js?libraries=places&callback=initParkuSearch";
    document.body.appendChild(script);
  }
})();

