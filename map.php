<script>

gdMap = {
  init: function(){
    gdMap.initMap();
  },

  initMap: function(){

    gdMap.map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
	scrollwheel: false,
    center: {lat: 55.76, lng: 37.64}
    });


  },

};

</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1QFnZAC1l-koq08KZi8tQilnvf_FbLGo&signed_in=true&callback=gdMap.init"></script>







<center>
  <div id="map"></div>
  <div class="baloon">
                <div class="baloon__title">
                    <span class="baloon__num">100</span> из <span class="baloon__num">4100</span> помощников уже&nbsp;нашлись
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
            <div class="baloon baloon--home">
                <button class="button button--blue" type="button">Добавить информацию про дом</button>
                <button class="button button--blue" type="button">Про жильцов</button>
            </div>
</center>