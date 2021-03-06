
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
                            <span class="counter__num">200 000</span>
                            <span class="counter__text">₽</span>
                            <span class="counter__text">собрано <br>за 3 неделю</span>
                        </div>
                    </div>
                    <div class="progressbar">
                        <div class="progressbar__outer">
                            <div class="progressbar__inner" style="width: 50%;"></div>
                        </div>
                        <div class="pregressbar__text">700 000 ₽ необходимо</div>
                    </div>
                </div>
            </div>
            <div class="flexbox__item flexbox__item--hidden">
                <a href="" class="button button--blue button--create">Создать событие</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flexbox events__nav">
            <div class="flexbox__item">
                <div class="eventswitcher">
                    <div class="eventswitcher">События</div>
                    <div class="eventswitcher__button" data-view="map" onclick="switchEvents(this)">на карте</div>
                    <div class="eventswitcher">или</div>
                    <div class="eventswitcher__button eventswitcher__button--clickable" onclick="switchEvents(this)" data-view="list">списком</div>
                </div>
                <script type="text/javascript">
                // just for test
                    function switchEvents(elem) {
                        if($(elem).hasClass('eventswitcher__button--clickable')) {
                            $('.view').removeClass('onmap--active').removeClass('onlist--active');
                            $('.eventswitcher__button').addClass('eventswitcher__button--clickable');
                            $(elem).removeClass('eventswitcher__button--clickable');
                            view = $(elem).attr('data-view');
                            $('.on' + view).addClass('on' + view + '--active');
                        }
                    }
                </script>
            </div>
            <div class="flexbox__item events__help">
                <a href="" class="button button--blue">Помочь из дома</a>
                <div class="help__text">
                    <div>Звонки, </div>
                    <div>агитация ВКонтакте</div>
                </div>
            </div>
        </div>
    </div>
    <div class="view onmap onmap--active">
        <div class="hr"></div>
        <div class="container">
            <div class="calendar">
                <div class="calendar__items flexbox flexbox--start">
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">5 марта</div>
                        <div class="calendar__day">Вторник</div>
                    </div>
                    <div class="calendar__item calendar__item--active">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">6 марта</div>
                        <div class="calendar__day">Среда</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">7 марта</div>
                        <div class="calendar__day">Четверг</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">8 марта</div>
                        <div class="calendar__day">Пятница</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">9 марта</div>
                        <div class="calendar__day">Суббота</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">10 марта</div>
                        <div class="calendar__day">Воскресенье</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">11 марта</div>
                        <div class="calendar__day">Понедельник</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">12 марта</div>
                        <div class="calendar__day">Вторник</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">13 марта</div>
                        <div class="calendar__day">Среда</div>
                    </div>
                    <div class="calendar__item">
                        <div class="calendar__today">Сегодня</div>
                        <div class="calendar__num">14 марта</div>
                        <div class="calendar__day">Четверг</div>
                    </div>
                </div>
                <div class="calendar__control"></div>
            </div>
        </div>
        <div class="map">
            <div class="map-container">
                <div id="map"></div>
            </div>
            <div class="container onmapContainer">
                <div class="slider fotorama" data-width="280"
                                             data-height="550"
                                             data-nav="false"
                                             data-arrows="always"
                                             data-click="true"
                                             data-swipe="true">
                    <div class="event">
                        <div class="event__container">
                            <div class="event__title">Пикет в Щукино</div>
                            <div class="event__task">
                                <span class="event__bold">Задачи:</span> раздавать материалы, общаться с избирателями, собирать контакты
                            </div>
                        </div>
                        <div class="event__container event__rolled">
                            <div>
                                <span class="text-small text-link">25 уже записались</span>
                             </div>
                            <div class="text-small">400 нужно</div>
                        </div>
                        <a href="" class="event__button button button--blue">Записаться</a>
                        <div class="event__container">
                            <div class="event__date">
                                <span class="event__bold">Время:</span> с 16 до 20:00/ Можно прийти на час или больше
                            </div>
                            <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.</p>
                            <div class="event__organizer">
                                <div class="event__bold">Организатор:</div>
                                <div class="organizer">
                                    <div class="organizer__img">
                                        <img src="../../static/images/userpic.jpg">
                                    </div>
                                    <div class="organizer__name">Александра Серова</div>
                                </div>
                            </div>
                            <div class="quote">«Отличная погода, приходите со мной агитировать за Гудкова»</div>
                        </div>
                        <div class="event__more">Ещё активности</div>
                    </div>
                    <div class="event">
                        <div class="event__container">
                            <div class="event__title">Пикет в Бутово</div>
                            <div class="event__task">
                                <span class="event__bold">Задачи:</span> собирать контакты
                            </div>
                        </div>
                        <div class="event__container event__rolled">
                            <div>
                                <span class="text-small text-link">25 уже записались</span>
                             </div>
                            <div class="text-small">400 нужно</div>
                        </div>
                        <a href="" class="event__button button button--blue">Записаться</a>
                        <div class="event__container">
                            <div class="event__date">
                                <span class="event__bold">Время:</span> с 16 до 20:00
                            </div>
                            <p>На каждом пикете есть опытный агитатор.</p>
                            <div class="event__organizer">
                                <div class="event__bold">Организатор:</div>
                                <div class="organizer">
                                    <div class="organizer__img">
                                        <img src="../../static/images/userpic.jpg">
                                    </div>
                                    <div class="organizer__name">Александра Серова</div>
                                </div>
                            </div>
                            <div class="quote">«Отличная погода!»</div>
                        </div>
                        <div class="event__more">Ещё активности</div>
                    </div>
                    <div class="event">
                        <div class="event__container">
                            <div class="event__title">Пикет в Щукино</div>
                            <div class="event__task">
                                <span class="event__bold">Задачи:</span> раздавать материалы, общаться с избирателями, собирать контакты, раздавать материалы, общаться с избирателями, собирать контакты
                            </div>
                        </div>
                        <div class="event__container event__rolled">
                            <div>
                                <span class="text-small text-link">25 уже записались</span>
                             </div>
                            <div class="text-small">400 нужно</div>
                        </div>
                        <a href="" class="event__button button button--blue">Записаться</a>
                        <div class="event__container">
                            <div class="event__date">
                                <span class="event__bold">Время:</span> с 16 до 20:00/ Можно прийти на час или больше
                            </div>
                            <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.</p>
                            <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.</p>
                            <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.</p>
                            <div class="event__organizer">
                                <div class="event__bold">Организатор:</div>
                                <div class="organizer">
                                    <div class="organizer__img">
                                        <img src="../../static/images/userpic.jpg">
                                    </div>
                                    <div class="organizer__name">Александра Серова</div>
                                </div>
                            </div>
                            <div class="quote">«Отличная погода, приходите со мной агитировать за Гудкова, Отличная погода, приходите со мной агитировать за Гудкова»</div>
                            <div class="event__more">Ещё активности</div>
                        </div>
                    </div>
                </div>
                <div class="map__eventinfo">
                    <div class="eventinfo__counter">
                        <div class="counter">
                            <div class="counter__item">
                                <div class="counter__num">10</div>
                                <div class="counter__text">придут сегодня</div>
                            </div>
                            <div class="counter__item">
                                <div class="counter__num">/</div>
                            </div>
                            <div class="counter__item">
                                <div class="counter__num">400</div>
                                <div class="counter__text">нужно</div>
                            </div>
                        </div>
                    </div>
                    <div class="eventinfo__text">
                        Ежедневно нужно звонить избирателям, агитировать на пикетах, организовывать работу в штабе и ходить по&nbsp;квартирам.
                    </div>
                </div>
            </div>
            <div class="map__baloon">Пикет в Митино</div>
        </div>
    </div>


    <div class="view onlist">
        <div class="container">
            <div class="onlist__filters">
                <div class="text-small filter filter--type">
                    <div class="filter__title">Сортировать по типу</div>
                    <select class="filter__dropdown">
                        <option class="filter__option">Пикеты</option>
                        <option class="filter__option">Конфеты</option>
                        <option class="filter__option">Куклы-пистолеты</option>
                    </select>
                </div>
                <div class="text-small filter filter--district">
                    <div class="filter__title">По району</div>
                    <select class="filter__dropdown">
                        <option class="filter__option">Митино</option>
                        <option class="filter__option">Строгино</option>
                        <option class="filter__option">Щукино</option>
                        <option class="filter__option">Покровское-Стрешнево</option>
                        <option class="filter__option">Хорошево-Мневники</option>
                        <option class="filter__option">Южное Тушино</option>
                    </select>
                </div>
            </div>

            <div class="onlist__events">
                <div class="event">
                    <div class="flexbox">
                        <div class="flexbox__item onlist__col">
                            <div class="event__dates">
                                <div class="calendar__item">
                                    <div class="calendar__num">5 марта</div>
                                    <div class="calendar__day">Вторник</div>
                                </div>
                            </div>
                        </div>
                        <div class="flexbox__item onlist__col">
                            <div class="event__title">Пикет в Бутово</div>
                            <div class="event__container event__rolled">
                                <div>
                                    <span class="text-small text-link">25 уже записались</span>
                                 </div>
                                <div class="text-small">400 нужно</div>
                            </div>
                            <a href="" class="event__button button button--blue button--small">Записаться</a>
                            <div class="event__task">
                                <span class="event__bold">Задачи:</span> раздавать материалы, общаться с избирателями, собирать контакты
                            </div>
                            <div class="event__date">
                                <span class="event__bold">Время:</span> с 16 до 20:00
                            </div>
                            <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.</p>
                        </div>
                        <div class="flexbox__item onlist__col">
                            <div class="event__organizer">
                                <div class="event__bold">Организатор:</div>
                                <div class="organizer">
                                    <div class="organizer__img">
                                        <img src="../../static/images/userpic.jpg">
                                    </div>
                                    <div class="organizer__name">Александра Серова</div>
                                </div>
                            </div>
                            <div class="quote">«Отличная погода! На каждом пикете есть опытный агитатор.»</div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="flexbox">
                        <div class="flexbox__item onlist__col">
                            <div class="event__dates">
                                <div class="calendar__item">
                                    <div class="calendar__num">5 марта</div>
                                    <div class="calendar__day">Вторник</div>
                                </div>
                            </div>
                        </div>
                        <div class="flexbox__item onlist__col">
                            <div class="event__title">Пикет в Бутово</div>
                            <div class="event__container event__rolled">
                                <div>
                                    <span class="text-small text-link">25 уже записались</span>
                                 </div>
                                <div class="text-small">400 нужно</div>
                            </div>
                            <a href="" class="event__button button button--blue button--small">Записаться</a>
                            <div class="event__task">
                                <span class="event__bold">Задачи:</span> раздавать материалы, общаться с избирателями, собирать контакты
                            </div>
                            <div class="event__date">
                                <span class="event__bold">Время:</span> с 16 до 20:00
                            </div>
                            <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.
                                На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.
                            </p>
                            <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.</p>
                        </div>
                        <div class="flexbox__item onlist__col">
                            <div class="event__organizer">
                                <div class="event__bold">Организатор:</div>
                                <div class="organizer">
                                    <div class="organizer__img">
                                        <img src="../../static/images/userpic.jpg">
                                    </div>
                                    <div class="organizer__name">Александра Серова</div>
                                </div>
                            </div>
                            <div class="quote">«Отличная погода! На каждом пикете есть опытный агитатор. Отличная погода!»</div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="flexbox">
                        <div class="flexbox__item onlist__col">
                            <div class="event__dates">
                                <div class="calendar__item">
                                    <div class="calendar__num">5 марта</div>
                                    <div class="calendar__day">Вторник</div>
                                </div>
                            </div>
                        </div>
                        <div class="flexbox__item onlist__col">
                            <div class="event__title">Пикет в Бутово</div>
                            <div class="event__container event__rolled">
                                <div>
                                    <span class="text-small text-link">25 уже записались</span>
                                 </div>
                                <div class="text-small">400 нужно</div>
                            </div>
                            <a href="" class="event__button button button--blue button--small">Записаться</a>
                            <div class="event__task">
                                <span class="event__bold">Задачи:</span> раздавать материалы, общаться с избирателями, собирать контакты
                            </div>
                            <div class="event__date">
                                <span class="event__bold">Время:</span> с 16 до 20:00 На каждом пикете есть опытный агитатор.
                            </div>
                        </div>
                        <div class="flexbox__item onlist__col">
                            <div class="event__organizer">
                                <div class="event__bold">Организатор:</div>
                                <div class="organizer">
                                    <div class="organizer__img">
                                        <img src="../../static/images/userpic.jpg">
                                    </div>
                                    <div class="organizer__name">Константин Константинопольский</div>
                                </div>
                            </div>
                            <div class="quote">«Отличная погода! На каждом пикете есть опытный агитатор.»</div>
                        </div>
                    </div>
                </div>
                <div class="event__more">Показать ещё</div>
            </div>
        </div>
        <div class="hr"></div>
    </div>
    <div class="container">
        <div class="needhelp">
            <p>Нужны люди, готовые помогать в своих подъездах и живущие в районах:</p>
            <p class="text-bold">Митино, Строгино, Покровское-Стрешнево, Хорошево-Мневники, Щукино, Южное Тушино</p>
            <a htef="" class="needhelp__button button button--blue">Живу в округе и хочу помогать</a>
            <div class="needhelp__counter">
                <div class="counter">
                    <div class="counter__item">
                        <span class="counter__num">245</span>
                        <div class="counter__text">
                            <div>уже</div>
                            <div>с нами</div>
                        </div>
                    </div>
                    <div class="counter__item">
                        <div class="counter__num">/</div>
                    </div>
                    <div class="counter__item">
                        <span class="counter__num">400</span>
                        <div class="counter__text">
                            <div>нужно</div>
                            <div>для победы</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

