mapboxgl.accessToken = 'pk.eyJ1IjoidGl0YW5jb25jZXB0IiwiYSI6ImNrb2VrYXZ5MTA2NWkydXAya2w2MmZ6a3IifQ.FKYCVIor3ihyB0nyFRY-GA';
    var map = new mapboxgl.Map({
    container: 'contact-map',
    style: 'mapbox://styles/titanconcept/ckoekptw11uy817ol49vky7cp',
    center: [-96.78881347668334, 32.79041060859208],
    zoom: 14,
    scrollZoom: false,
});
    var marker = new mapboxgl.Marker()
    .setLngLat([-96.78881347668334, 32.79041060859208])
    .addTo(map);