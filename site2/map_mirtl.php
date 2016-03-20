
<style>
	.hide {
	  display: none;
	}

	#map {

	}
</style>


<center>
  <div id="map"></div>
  <div class="baloon">
                <div class="baloon__title">
                    <span class="baloon__num">100</span> из <span class="baloon__num">4100</span> сторонников уже с&nbsp;нами
                </div>
                <a href="" class="button button--blue">Хочу помогать</a>
                <ul class="baloon__list">
                    <li class="list__item">
                        <div class="list__count"><span class="list__num">349</span></div>
                        <div class="list__text">Дом полон сторонников</div>
                    </li>
                    <li class="list__item list__item--few">
                        <div class="list__count"><span class="list__num">30</span></div>
                        <div class="list__text">В этом доме нужны ещё люди</div>
                    </li>
                    <li class="list__item list__item--no">
                        <div class="list__count"><span class="list__num"></span></div>
                        <div class="list__text">Ещё нет сторонников</div>
                    </li>
                </ul>
            </div>
	<div class="baloon baloon--home" style="display: none;">
		<button class="button button--blue" type="button" onClick="mapForm.openAboutHouseForm();">Добавить информацию про дом</button>
		<button class="button button--blue" type="button" onClick="mapForm.openAboutPeopleForm();">Про жильцов</button>
	</div>

</center>

<div class="balloon-add-homeinfo_tmp hide">

</div>

<script>


gdMapAdmin = {

	init: function(){
		google.maps.event.addListener(gdMap.map, 'click', gdMapAdmin.onMapClicked);
		google.maps.event.addListener(gdMap.map, 'click touchstart', gdMapAdmin.onMapClicked);
	},

	onMapClicked: function(event){
		gdMap.click = event ;

		var position = {lat: gdMap.click.latLng.lat(), lng: gdMap.click.latLng.lng()};


		return ;
		var template = $('.balloon-add-homeinfo_tmp');

		var newBuildingWindow = new google.maps.InfoWindow({
			position: position,
			content: template.html(),
		});

		newBuildingWindow.open(gdMap.map);

		return ;
		smartAjax('/ajax/ajax_map.php', {
			context: 'getStreetNameByCoords',
			position: position,
		}, function(msg){




			template.find('.address').attr('value', msg.streets_list[0]);
			template.find('.lat').attr('value', msg.position.lat);
			template.find('.lng').attr('value', msg.position.lng);
			template.find('.newBuildingWindow').attr('id', 'd' + msg.position.lat + msg.position.lng);

				var newBuildingWindow = new google.maps.InfoWindow({
					position: msg.position,
					content: template.html(),
				});

			template.find('.newBuildingWindow').attr('id', 'd');

				newBuildingWindow.open(gdMap.map);

		});



	},

	addNewBuildingFromWindow: function(_this){

		var container = $(_this).closest('.newBuildingWindow');

		smartAjax('/ajax/ajax_map.php', {
			context: 'addNewBuildingFromWindow',
			address: container.find('.address').val(),
			uik_id: container.find('.uik_id').val(),
			lat: container.find('.lat').val(),
			lng: container.find('.lng').val(),
			region_id: container.find('.region_id').val(),
			building_type: container.find('.building_type').val(),
		}, function(msg){

			alert('OK');



		});

	},
};




gdMap = {
	buildings: <?=json_encode($buildings);?>,
	regions: <?=json_encode($map_regions);?>,
	markersList: [],
	clustererObject: "undefined",

	init: function(){
		gdMap.initMap();
	},

	initMap: function(){

		gdMap.map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: {lat: 55.80758869866716, lng: 37.46141795117189},
		scrollwheel : false,
		navigationControl: false,
		scaleControl: false,
		mapTypeControl: false,
		});

		gdMapAdmin.init();



		// load markers by ajax
		//google.maps.event.addListener(gdMap.map, 'idle', gdMap.showMarkers);

		gdMap.drawMarkersOnMap(gdMap.buildings);

		gdMap.drawRegions();
	},



	drawRegions: function(){
		//console.log(gdMap.regions);

		// Define the LatLng coordinates for the polygon's path.

		$.each(gdMap.regions, function(key, region){
			var coords = [];

			$.each(region.geometry.geometries[0]['coordinates'][0], function(key, value1){
				coords.push({'lat': value1[1], 'lng': value1[0]});
			});

			// Construct the polygon.
			var regionPolygon = new google.maps.Polygon({
			paths: coords,
			strokeColor: region.stroke_color,
			strokeOpacity: 0.7,
			strokeWeight: 2,
			fillColor: region.fill_color,
			fillOpacity: 0.25
			});

			google.maps.event.addListener(regionPolygon, 'click', gdMapAdmin.onMapClicked);

			regionPolygon.setMap(gdMap.map);



		});


	},

	findInArrayById: function(key, value, list){

		for (var i = 0; i < list.length; i++){
			if (list[i][key] == value) return list[i] ;
		}

		return false ;

	},


	drawMarkersOnMap: function(buildings_viewport){


		if (gdMap.clustererObject != "undefined"){
			//gdMap.clustererObject.clearMarkers();

			//if (gdMap.map.getZoom() <= 15)
				//gdMap.markersList = [];
		}


		/*
			Возможные состояния:
			1. Меткая новая, её нет в данный момент на карте, но есть во вьюпорте (рисовать)
			2. Метка старая, она есть на карте и в новом вьюпорте (ничего не делать)
			3. Метка старая, она есть на карте, но нет во вьюпорте (удалить)
		*/

		var tmpMarkersList = gdMap.markersList ;
		gdMap.markersList = [];

		// Метка есть на карте, но её нет во вьюпорте
		$.each(tmpMarkersList, function(key, value){

			if (gdMap.findInArrayById('building_id', value.building_id, buildings_viewport) == false){
				//delete tmpMarkersList[key] ;
				gdMap.log('Remove ' + value.building_id);
				value.marker.setMap(null);
			}
			else {
				gdMap.markersList.push(value);
			}

		});



		$.each(buildings_viewport, function(key, value){

			//if (gdMap.map.getZoom() > 15) return ;

			// Метка новая
			if (gdMap.findInArrayById('building_id', value.building_id, gdMap.markersList) == false){
				var image = '../../static/images/icon_map_' + value.building_type + '.png';

				//var text = '(УИК №' + value.uik_id + ') ' + value.address + '<br /> <div style="text-align: left;"><a target="_blank" href="/map_editor/delete/' + value.building_id + '" >Удалить</a> <br /> <a href="/map_editor/edit/' + value.building_id + '" target="_blank">Редактировать</a> <br /><a href="/map_editor/edit/new" target="_blank">Добавить новое</a> <br /></div>';

				var marker = new google.maps.Marker({
					position: {lat: parseFloat(value.lat), lng: parseFloat(value.lng)},
					map: gdMap.map,
					icon: image,
					title: value.supporters + ' ',
					building_id: value.building_id,
					supporters: value.supporters,
					house_number: value.house_number,
					street_name: value.street_name,
				});

				marker.addListener('click', gdMap.onMarkerClicked);

				gdMap.markersList.push({marker: marker, building_id: value.building_id });
			}
			// Метка есть на карте и во вьюпорте
			else {
				gdMap.log('Do not redraw ' + value.building_id);
			}

		});

		var markersForCluesterer = [] ;

		$.each(gdMap.markersList, function(key, value){
			markersForCluesterer.push(value.marker);
		});

		/*
		if (gdMap.map.getZoom() < 14){
			gdMap.clustererObject = new MarkerClusterer(gdMap.map, markersForCluesterer, {
				'gridSize': 100,
				'maxZoom': 14,
				'calculator': gdMap.customCalculator,
			});

			gdMap.clustererObject.setCalculator(gdMap.customCalculator);
		}
		*/
	},

	 fromLatLngToPoint: function(latLng, map) {
		var topRight = map.getProjection().fromLatLngToPoint(map.getBounds().getNorthEast());
		var bottomLeft = map.getProjection().fromLatLngToPoint(map.getBounds().getSouthWest());
		var scale = Math.pow(2, map.getZoom());
		var worldPoint = map.getProjection().fromLatLngToPoint(latLng);
		return new google.maps.Point((worldPoint.x - bottomLeft.x) * scale, (worldPoint.y - topRight.y) * scale);
	},

	onMarkerClicked: function(event){

		var point = gdMap.fromLatLngToPoint(this.getPosition(), gdMap.map)

		var baloon = $('.baloon.baloon--home');

		baloon.css({
			'left': parseInt(point.x) - 1,
			'top': parseInt(point.y) + (this.anchorPoint.y / 2) - 2,
		});

		baloon.show();

		$('input.mapForm_address').attr('building_id', this.building_id).val(this.street_name + ' ' + this.house_number);

	},

	customCalculator: function(markers) {

			var total_supporters = 0;

			$.each(markers, function(key, value){
				total_supporters += value.supporters ;
			});

			return {
			  text: total_supporters,
			  index: 1
			};
		},

	showMarkers: function() {
		var bounds = gdMap.map.getBounds();

		var southWest = bounds.getSouthWest();
		var northEast = bounds.getNorthEast();


		smartAjax('/ajax/ajax_map.php', {
			context: 'getMarkersByViewport',
			data: {
				'fromlat': southWest.lat(),
				'tolat': northEast.lat(),
				'fromlng': southWest.lng(),
				'tolng': northEast.lng(),
			}
		}, function(msg){

				gdMap.drawMarkersOnMap(msg.buildings);


		});
	},

	log: function(text){
		//console.log(text);
	},

};


mapForm = {

	people_form: {},
	houseinfo_form: {},

	max_tenants: 5,

	init: function(){
		mapForm.people_form = $('.form.form_about_people');
		mapForm.houseinfo_form = $('.form.form_about_house');
	},

	openAboutHouseForm: function(){

		mapForm.houseinfo_form.fadeIn(500);

		mapForm.people_form.fadeOut();
	},

	openAboutPeopleForm: function(){
		mapForm.people_form.fadeIn(500);

		mapForm.houseinfo_form.fadeOut();

		mapForm.resetFormAboutPeople();

		mapForm.addNewFlat();
		mapForm.addNewTenant(mapForm.people_form.find('.form__row.addNewTenant'));

	},

	resetFormAboutPeople: function(){
		mapForm.people_form.find('.template_flat').html('');
	},

	addNewTenant: function(_this){

		mapForm.prev = _this ;

		var tenants_container = $(_this).prev() ;

		var tenant_number = tenants_container.find('.tenant').length + 1 ; // Считаем число добавленных жильцов и задаём новый номер новому жильцу

		if (tenant_number > mapForm.max_tenants){
			alert('Слишком много жильцов для одной квартиры');
			return ;
		}

		var tenant_template = $('.formtenant_tmp');

		tenant_template.find('.tenant_number').text(tenant_number);

		tenants_container.append(tenant_template.html());

		// animate opacity to 1
		tenants_container.find('div.withOpacity').animate({opacity: 1}, 500);
	},

	addNewFlat: function(){
		mapForm.people_form.find('.template_flat').append($('.formflat_tmp').html());
	},

	sendFormAboutPeople: function(){

		var mapForm = [] ;

		console.log('sendFormAboutPeople');

	},
};

$(document).ready(function(){
	mapForm.init();
});

</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1QFnZAC1l-koq08KZi8tQilnvf_FbLGo&signed_in=true&callback=gdMap.init"></script>



