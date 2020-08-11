mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iaW5nZWFnZWEiLCJhIjoiY2tkbmZ5NnN6MWhnMDJzcm9sOW15NmZlbSJ9.yjhyjQzprYOcVmB4UMri5A';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/robingeagea/ckdlc70gv1z5z1imwitqyd11s',
  center: [35.5113866,33.8950144],
  zoom: 17
  });


  var markersList = {
           "async": true,
           "url": "./map/properties.geojson",
           "type": "json",
           "method": "GET"
         }

         $.ajax(markersList).done(function (response) {

           var geojson = JSON.parse(response);

           console.log(geojson);


             geojson.features.forEach(function(marker) {

               // create a HTML element for each feature
               var el = document.createElement('div');
               el.className = 'marker';

               // make a marker for each feature and add to the map
               new mapboxgl.Marker(el)
                 .setLngLat(marker.geometry.coordinates)

                 new mapboxgl.Marker(el)
                 .setLngLat(marker.geometry.coordinates)
                 .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                 .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))


                 .addTo(map);
             });



         });
