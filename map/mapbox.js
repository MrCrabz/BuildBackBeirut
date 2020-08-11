mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iaW5nZWFnZWEiLCJhIjoiY2tkbmZ5NnN6MWhnMDJzcm9sOW15NmZlbSJ9.yjhyjQzprYOcVmB4UMri5A';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/robingeagea/ckdlc70gv1z5z1imwitqyd11s',
  center: [35.5113866,33.8950144],
  zoom: 17
  });


  map.on('styledata', function() {


    // Protests in Lebanon

    map.addSource('points', {
      type: 'geojson',
      data: '../points.geojson'
    });

    map.addLayer({
      id: 'Lebanon-protests',
      type: 'heatmap',
      source: 'Lebanon',
      maxzoom: 15,
      paint: {
        // increase weight as diameter breast height increases
        'heatmap-weight': {
          property: 'dbh',
          type: 'exponential',
          stops: [
            [1, 0],
            [62, 1]
          ]
        },
        // increase intensity as zoom level increases
        'heatmap-intensity': {
          stops: [
            [11, 1],
            [15, 3]
          ]
        },
        // assign color values be applied to points depending on their density
        'heatmap-color': [
          'interpolate',
          ['linear'],
          ['heatmap-density'],
          0, 'rgba(236,200,200,0)',
          0.2, 'rgb(236,150,150)',
          0.4, 'rgb(236,100,100)',
          0.6, 'rgb(236,50,50)',
          0.8, 'rgb(236,0,0)'
        ],
        // increase radius as zoom increases
        'heatmap-radius': {
          stops: [
            [11, 15],
            [15, 20]
          ]
        },
        // decrease opacity to transition into the circle layer
        'heatmap-opacity': {
          default: 1,
          stops: [
            [14, 1],
            [15, 0]
          ]
        },
      }
    }, 'waterway-label');



  });
