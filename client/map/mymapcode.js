var mapboxClient = new MapboxClient('pk.eyJ1IjoidmVla3RlciIsImEiOiJjaW05MTZ0Z2EwMDBid2RtODlobmczemJnIn0.c26HEBLY_WO9kgocfSQ6kg');
mapboxClient.getDirections([
  { latitude: 33.6, longitude: -95.4431 },
  { latitude: 33.2, longitude: -95.4431 }],
  function(err, res) {
  // res is a document with directions
});