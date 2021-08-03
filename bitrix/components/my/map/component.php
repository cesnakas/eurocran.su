<?$APPLICATION->AddHeadString('<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>');?><div id="map" style="width:458px;height:186px;"></div>

<script type="text/javascript">
var map;
function initialize() {
	var myLatlng = new google.maps.LatLng(55.572233, 37.564015);
	var mapOptions = {
		zoom: 15,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var contentString = '<h1>Офис ООО «Еврокран»</h1><p>ул. Куликовская, д.12, г. Москва, Россия, 117628, м. Бульвар Дмитрия Донского</p>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Офис ООО «Еврокран»'
	});
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	}); 
}

$(document).ready(function() {
	initialize();
});
</script>