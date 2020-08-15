mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iaW5nZWFnZWEiLCJhIjoiY2tkbmZ5NnN6MWhnMDJzcm9sOW15NmZlbSJ9.yjhyjQzprYOcVmB4UMri5A';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/robingeagea/ckdlc70gv1z5z1imwitqyd11s',
  center: [35.5103746,33.8950144],
  zoom: 16
  });


  var markersList = {
           "async": true,
           "url": "./map/properties.geojson",
           "type": "json",
           "method": "GET"
         }

         $.ajax(markersList).done(function (response) {

           var geojson = JSON.parse(response);

           var geojsonText = JSON.stringify(geojson);

           console.log(geojsonText);
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
                 .setHTML(

                   "<span class='badge badge-primary btn-outline-dark buildingLabel'>#" + marker.properties.id + "</span><div class='mapPropertyMask'></div><h3 class='markerPropertyName'>Name</h3><div class='progressContainer'> <div class='text-center progressProperty'><div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width:" + marker.properties.percentageCompleted + "%'><span class='progress-value'>" + marker.properties.percentageCompleted + "%</span></div></div><a href='./property.php?id=" + marker.properties.id  + "' class='btn btn-primary'>View Site</a></div>"

                 ))


                 .addTo(map);
             });



         });
