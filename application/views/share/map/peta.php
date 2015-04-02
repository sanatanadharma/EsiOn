<!DOCTYPE html>
<html>
<head>
	<title>Simple Map</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">

	<style>
		#map-canvas {
			height: 500px;
			width: 800px;
			margin: 0px;
			padding: 0px
		}
	</style>
 
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

	<script>
		var map;
		function initialize() {
			var mapOptions = {
				zoom: 4,
				draggableCursor:'default',
				center: new google.maps.LatLng(-2.7248095,120.1985231),

				mapTypeControl: true,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
				},
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.SMALL
				}
			};

			map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
			google.maps.event.addListener(map,'click',function(event){
					var marker = new google.maps.Marker({
					position: event.latLng,
					map: map,
					title: 'Hello World!'
				});
				google.maps.event.addListener(marker, 'click', function(event){
					marker.setMap(null);
				});
			});
			google.maps.event.addListener(map, 'mousemove', function(event){
				var isi;
				isi = event.latLng.lat() + " | " + event.latLng.lng();
				$('#latLng').text(isi);
			});
		}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

</head>

<body>
	<div id="map-canvas"></div>
	<div id="latLng" style="float:right; margin-right:3%";></div>
</body>
</html>