<div class="content events">
    <div class="container addevent">
        <div class="dashboard">
            <div class="text-bigger">Записаться помощником</div>
                <div class="event onlist onlist--active">
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
                            <div class="event__task">
                                <span class="event__bold">Задачи:</span> раздавать материалы, общаться с избирателями, собирать контакты
                            </div>
                            <div class="event__date">
                                <span class="event__bold">Время:</span> с 16 до 20:00 Можно прийти на час или больше
                                <p>На каждом пикете есть опытный агитатор, он вам всё раскажет, если нужно проведёт краткое обучение.</p>
                            </div>
                            <div class="eventinfo__counter">
                                <div class="counter">
                                    <div class="counter__item">
                                        <span class="counter__num">25</span>
                                        <span class="counter__text">придут сегодня</span>
                                    </div>
                                    <div class="counter__item">
                                        <div class="counter__num">/</div>
                                    </div>
                                    <div class="counter__item">
                                        <span class="counter__num">400</span>
                                        <span class="counter__text">нужно</span>
                                    </div>
                                </div>
                            </div>
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
        </div>
        <form class="form">
            <div class="form__row form__row--cluster">
                <label for="name" class="form__label">Имя,</label>
                <input id="name" name="name" class="form__input form__input--top name" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
            </div>
            <div class="form__row">
                <label for="surname" class="form__label">фамилия</label>
                <input id="surname" name="surname" class="form__input form__input--bottom surname" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
            </div>
            <div class="form__row">
                <label for="phone_indistrict" class="form__label">Телефон</label>
                <input id="phone_indistrict" name="phone_indistrict" class="form__input phone" onFocus="$('#phone_indistrict').formatPnoneNumber(); if (this.value == '') this.value = '+';" placeholder="+7 912 456-68-61" type="text" required>
                </div>
            <div class="form__row">
                <label for="email" class="form__label">Эл. почта</label>
                <input id="email" name="email" class="form__input email" type="email" required>
            </div>
            <div class="form__row">
                <label for="social" class="form__label">Cоц. сети</label>
                <input id="social" name="social" class="form__input form__input--long" type="text">
                <div class="form__help text-small">Ссылки на Фейсбук, ВКонтакте и др.</div>
            </div>
            <div class="form__row">
                <label for="" class="form__label"></label>
                <input id="social-false" name="social-false" value="social-false" class="form__input form__input--hidden" type="checkbox">
                <label for="social-false" class="form__checkbox">
                    <span>Не веду соцсети</span>
                </label>
            </div>
            <div class="form__row">
                <label for="city" class="form__label">Город проживания</label>
                <input id="city" name="city" class="form__input form__input--long" type="text">
                <div class="form__help text-small">Место жительства, а не прописки (необязательно)</div>
            </div>
            <div class="form__row">
                <label for="age" class="form__label">Возраст</label>
                <input id="age" name="age" class="form__input form__input--short" type="text">
                <div class="form__help text-small">Необязательно</div>
            </div>
            <div class="form__row">
                <label for="about" class="form__label">Информация о себе</label>
                <textarea id="about" name="about" class="form__textarea form__input--long otherhelp"></textarea>
            </div>
            <div class="form__row flexbox flexbox--start">
                <label for="" class="form__label">Напомнить о мероприятии</label>
                <div class="flexbox">
                    <div class="flexbox__item">
                        <div class="form__row">
                            <input id="sms" name="sms" value="imessage" class="form__input form__input--hidden sms" type="checkbox">
                            <label for="sms" class="form__checkbox">
                                <span>По СМС</span>
                            </label>
                        </div>
                        <div class="form__row">
                            <input id="callme" name="callme" value="imessage" class="form__input form__input--hidden callme" type="checkbox">
                            <label for="callme" class="form__checkbox">
                                <span>Позвонить</span>
                            </label>
                        </div>
                        <div class="form__row">
                            <input id="mailme" name="mailme" value="imessage" class="form__input form__input--hidden mailme" type="checkbox">
                            <label for="mailme" class="form__checkbox">
                                <span>Эл. почтой</span>
                            </label>
                        </div>
                        <div class="form__row">
                            <input id="otherme" name="otherme" value="otherme" class="form__input form__input--hidden otherme" type="checkbox">
                            <label for="otherme" class="form__checkbox">
                                <span>Другой вариант</span>
                            </label>
                        </div>
                    </div>
                    <div class="flexbox__item">
                        <div class="form__row">
                            <input id="imessage" name="imessage" value="imessage" class="form__input form__input--hidden imessage" type="checkbox">
                            <label for="imessage" class="form__checkbox">
                                <span>iMessage</span>
                            </label>
                        </div>
                        <div class="form__row">
                            <input id="telegram" name="telegram" value="telegram" class="form__input form__input--hidden telegram" type="checkbox">
                            <label for="telegram" class="form__checkbox">
                                <span>Telegram</span>
                            </label>
                        </div>
                        <div class="form__row">
                            <input id="notremaind" name="notremaind" value="notremaind" class="form__input form__input--hidden notremaind" type="checkbox">
                            <label for="notremaind" class="form__checkbox">
                                <span>Не напоминать</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__row otherme-text">
                <label class="form__label"></label>
                <input id="otherme-text" name="otherme-text" class="form__input form__input--long" type="text">
            </div>
            <div class="form__row form__row--button form__row--lined">
                <label class="form__label"></label>
                <button class="button button--blue" type="button" onClick="advice.addNewHelper();">Отправить</button>
                <div class="form__error text-small">
                    <div></div>
                    <div id="error-message"></div>
                </div>
            </div>
        </form>
    </div>
</div>


