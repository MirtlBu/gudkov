<div class="content nabiraem">
    <div class="slogan">
        <div class="container flexbox">
            <div class="flexbox__item slogan__left">
                <h1 class="slogan__title">Набираем помощников&nbsp;в&nbsp;округе</h1>
                <div class="slogan__district">
                            <div>Районы: Митино, Строгино,</div>
                            <div>Покровское-Стрешнево,</div>
                            <div>Хорошево-Мневники,</div>
                            <div>Щукино, Южное Тушино</div>
                        </div>
            </div>
            <div class="flexbox__item slogan__right">
                <div class="slogan__info">
                    <p>Нам очень важна помощь людей, живущих в округе (именно проживающих, тут не важна прописка).</p>
                    <p>
                        Если вы сможете сообщать нам пришла ли наша газета в ваш почтовый ящик, или поможете распространять информацию или поговорите с соседями — тогда мы точно победим.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div id="map"></div>

        <script>
            gdMap = {
              init: function(){
                gdMap.initMap();
              },

              initMap: function(){

                gdMap.map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: 55.76, lng: 37.64}
                });

                gdMapAdmin.init();
                google.maps.event.addListener(gdMap.map, 'idle', gdMap.showMarkers);


                gdMap.drawRegions();
              },

            };
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1QFnZAC1l-koq08KZi8tQilnvf_FbLGo&signed_in=true&callback=gdMap.init"></script>
        <div class="container">
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
        </div>
    </div>
    <div class="container">
        <form class="form">
            <div class="form__row">
                <label for="address" class="form__label">Адрес</label>
                <input id="address" name="address" class="form__input form__input--long" type="text" required>
            </div>
            <div class="form__row form__row--lined">
                <label for="middlename" class="form__label">№ квартиры</label>
                <input id="middlename" name="middlename" class="form__input form__input--short" type="text" pattern="[0-9]+" required>
            </div>
            <div class="form__row">
                <div class="form__title text-big">Жилец 1</div>
            </div>
            <div class="form__row form__row--cluster">
                <label for="name" class="form__label">Имя,</label>
                <input id="name" name="name" class="form__input form__input--top" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
            </div>
            <div class="form__row form__row--cluster">
                <label for="middlename" class="form__label">отчество</label>
                <input id="middlename" name="middlename" class="form__input form__input--middle" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
            </div>
            <div class="form__row">
                <label for="surname" class="form__label">фамилия</label>
                <input id="surname" name="surname" class="form__input form__input--bottom" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
            </div>
            <div class="form__row">
                <label for="party" class="form__label">Какой партии симпатизирует</label>
                <input id="party" name="party" class="form__input form__input--long" type="text" required>
            </div>
            <div class="form__row">
                <label for="age" class="form__label">Возраст</label>
                <input id="age" name="age" class="form__input form__input--short" type="text" pattern="[0-9]+" required>
            </div>
            <div class="form__row flexbox flexbox--start">
                <label for="" class="form__label">Собирается ли на выборы</label>
                <div class="form__radios">
                    <div class="form__row">
                        <input id="toelections1" name="toelections" value="yes" class="form__input form__input--hidden" type="radio" checked>
                        <label for="toelections1" class="form__radio-circle">
                            <span>Да</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <input id="toelections2" name="toelections" value="no" class="form__input form__input--hidden" type="radio">
                        <label for="toelections2" class="form__radio-circle">
                            <span>Нет</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <input id="toelections3" name="toelections" value="unknown" class="form__input form__input--hidden" type="radio">
                        <label for="toelections3" class="form__radio-circle">
                            <span>Не удалось узнать</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form__row">
                <label for="other" class="form__label">Другое</label>
                <textarea id="other" name="other" class="form__textarea form__input--long"></textarea>
            </div>
            <div class="form__row">
                <div class="add">
                    <div class="add__button form__radio-button">
                        <div class="add__image"></div>
                    </div>
                    <div class="text-small add__text">Добавить жильца в квартиру</div>
                </div>
            </div>
            <div class="form__row form__row--lined">
                <div class="add">
                    <div class="add__button form__radio-button">
                        <div class="add__image"></div>
                    </div>
                    <div class="text-small add__text">Добавить eщё квартиру в доме</div>
                </div>
            </div>
            <div class="form__row form__row--button form__row--lined">
                <label class="form__label"></label>
                <button class="button button--blue" type="submit">Отправить</button>
                <div class="form__error text-small">
                    <div>Нужно заполнить:</div>
                    <div id="error-message">год рождения</div>
                </div>
            </div>
        </form>
        <form class="form">
            <div class="form__row">
                <label for="address" class="form__label form__label--separated">Адрес</label>
                <input id="address" name="address" class="form__input form__input--long" type="text" required>
            </div>
            <div class="form__row flexbox flexbox--triple">
                <div class="flexbox__item">
                    <label for="" class="form__label form__label--separated">Сколько этажей,</label>
                    <input id="" name="" class="form__input form__input--short" type="text" pattern="[0-9]+" required>
                </div>
                <div class="flexbox__item">
                    <label for="" class="form__label form__label--separated">подъездов,</label>
                    <input id="" name="" class="form__input form__input--short" type="text" pattern="[0-9]+" required>
                </div>
                <div class="flexbox__item">
                    <label for="" class="form__label form__label--separated">квартир</label>
                    <input id="" name="" class="form__input form__input--short" type="text" pattern="[0-9]+" required>
                </div>
            </div>
            <div class="form__row">
                <label for="middlename" class="form__label form__label--separated">Коды от домофонов</label>
                <div class="flexbox flexbox--double">
                    <div class="flexbox__item">
                        <input id="middlename" name="middlename" class="form__input form__input--short" type="text" pattern="" required>
                        <label for="middlename" class="form__label text-small">№ подъезда</label>
                    </div>
                    <div class="flexbox__item">
                        <input id="middlename" name="middlename" class="form__input form__input--short" type="text" pattern="" required>
                        <label for="middlename" class="form__label text-small">код</label>
                    </div>
                </div>
            </div>
            <div class="form__row">
                <div class="add">
                    <div class="add__button form__radio-button">
                        <div class="add__image"></div>
                    </div>
                    <div class="text-small add__text">Добавить жильца в квартиру</div>
                </div>
            </div>
            <div class="form__row form__row--button form__row--lined">
                <label class="form__label"></label>
                <button class="button button--blue" type="submit">Отправить</button>
                <div class="form__error text-small">
                    <div>Нужно заполнить:</div>
                    <div id="error-message">год рождения</div>
                </div>
            </div>
        </form>
    </div>

</div>