<div class="content events">
    <div class="dashboard">
        <div class="container flexbox">
            <div class="flexbox__item">
                <div class="dashboard__logo"></div>
                <div class="dashboard__text">
                    Независимый депутат зависит только от своих избирателей. Он отчитывается перед ними,
                    а не перед чиновниками из администрации президента.
                    Его не&nbsp;купить и&nbsp;не&nbsp;запугать. Независимых депутатов почти нет в&nbsp;Думе, но&nbsp;сейчас мы можем это&nbsp;изменить.
                </div>
            </div>
            <div class="flexbox__item">
                <div class="donate">
                    <div class="donate__text">Кампания работает только на&nbsp;ваши пожертвования.
                        Без денег газеты не&nbsp;напечатаешь, грузчиков, не наймешь и&nbsp;штаб не&nbsp;арендуешь.
                    </div>
                    <button class="donate__button button button--red" type="button">Помочь деньгами</button>
                    <div class="counter">
                        <div class="counter__item">
                            <span class="counter__num">200</span>
                            <span class="counter__text">тыс. ₽ </span>
                            <div class="counter__text">пришло <br>за неделю</div>
                        </div>
                        <div class="counter__item">
                            <div class="counter__num">/</div>
                        </div>
                        <div class="counter__item">
                            <span class="counter__num">700</span>
                            <span class="counter__text">тыс. ₽ </span>
                            <div class="counter__text">необходимо</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="eventswitcher">
            <div class="eventswitcher__title">События</div>
            <div class="eventswitcher__button eventswitcher__button--active">на карте</div>
            <div class="eventswitcher__button">списком</div>
        </div>
    </div>
    <div class="hr-wrap">
        <div class="hr"></div>
    </div>
    <div class="container">
        <div class="onmap">
            <div class="calendar">
                <div class="calendar__items flexbox flexbox--start">
                    <div class="calendar__item calendar__item--active">
                        <div class="calendar__num">5 марта</div>
                        <div class="calendar__day">Вторник</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">6 марта</div>
                        <div class="calendar__day">Среда</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">7 марта</div>
                        <div class="calendar__day">Четверг</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">8 марта</div>
                        <div class="calendar__day">Пятница</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">9 марта</div>
                        <div class="calendar__day">Суббота</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">10 марта</div>
                        <div class="calendar__day">Воскресенье</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">11 марта</div>
                        <div class="calendar__day">Понедельник</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">12 марта</div>
                        <div class="calendar__day">Вторник</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">13 марта</div>
                        <div class="calendar__day">Среда</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__num">14 марта</div>
                        <div class="calendar__day">Четверг</div>
                    </div>
                </div>
                <div class="calendar__control"></div>
            </div>
        </div>
		
		<div id="map"></div>
		
    </div>
</div>

<script type="text/javascript">

gdMap = {

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

	},
	
};
	
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1QFnZAC1l-koq08KZi8tQilnvf_FbLGo&signed_in=true&callback=gdMap.init&v=3"></script>

