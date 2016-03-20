<div class="content pomoshnik">
    <div class="dashboard">
        <div class="container flexbox">
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <div class="dashboard__user">
                        <div class="dashboard__img">
                            <img class="dashboard__img" src="static/images/userpic.jpg">
                        </div>
                        <div class="dashboard__title">Валерия</div>
                    </div>

                    <div class="dashboard__tablo">
                        <div class="">Валерия, как прошёл день?</div>
                        <div class="dashboard__rate">
                            <button class="button button--small button--red">Плохо</button>
                            <button class="button button--small button--blue">Всё по плану</button>
                            <button class="button button--small button--green">Отлично</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <button class="button button--blue button--dashboard" type="button">+1 голос к победе</button>
                    <div class="text-link text-bold">Добавить информацию о доме</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="" class="breadcrumbs-content text-link">Все задания</a>
        <div class="main-title">
            <div class="text-bigger">Расскажи про свой подъезд</div>
        </div>
        <div class="flexbox">
            <div class="flexbox__item">
                <form class="form form--steps forma_about_porch">
                    <div class="steps__header">
                        <div class="flexbox">
                            <div class="flexbox__item steps__coordinator">
                                <div class="text-small text-small--light">Сделать предложил:</div>
                                <div class="steps-coordinator__img">
                                    <img src="static/images/userpic.jpg">
                                </div>
                                <div class="steps-coordinator__info">
                                    <div class="steps-coordinator__name text-big">Алексей Шпановский</div>
                                    <div class="steps-coordinator__socials">
                                        <div>
                                            <a class="text-small text-link">Вконтакте</a>
                                        </div>
                                        <div>
                                            <a class="text-small text-link">Фейсбук</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flexbox__item steps__dates">
                                <div class="">
                                    <div class="text-small text-small--light">Поставлено</div>
                                    <span class="text-small created_at">26 февраля</span>
                                </div>
                                <div class="">
                                    <div class="text-small text-small--light">Дедлайн</div>
                                    <span class="text-small deadline_at">12 марта</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <label for="address" class="form__label form__label--separated">Адрес</label>
                        <input id="address" name="address" class="form__input form__input--long" type="text" required>
                    </div>
                    <div class="form__row flexbox flexbox--multiply">
                        <div class="flexbox__item">
                            <label for="" class="form__label form__label--separated">№ подъезда,</label>
                            <input id="" name="" class="form__input form__input--short porch_num" type="text" pattern="[0-9]+" required>
                        </div>
                        <div class="flexbox__item">
                            <label for="" class="form__label form__label--separated">сколько этажей,</label>
                            <input id="" name="" class="form__input form__input--short amount_floor" type="text" pattern="[0-9]+" required>
                        </div>
                        <div class="flexbox__item">
                            <label for="" class="form__label form__label--separated">квартир,</label>
                            <input id="" name="" class="form__input form__input--short amount_entrance" type="text" pattern="[0-9]+" required>
                        </div>
                        <div class="flexbox__item">
                            <label for="" class="form__label form__label--separated">код домофона</label>
                            <input id="" name="" class="form__input form__input--short porch_pass" type="text" pattern="[0-9]+" required>
                        </div>
                    </div>
                    <div class="form__row">
                        <input id="inhabital_true" name="inhabital" value="inhabital_true" class="form__input form__input--hidden" type="radio" checked="">
                        <label for="inhabital_true" class="form__radio-circle">
                            <span>Частично жилой</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <input id="inhabital_false" name="inhabital" value="inhabital_false" class="form__input form__input--hidden" type="radio" checked="">
                        <label for="inhabital_false" class="form__radio-circle">
                            <span>Первый этаж не жилой</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <input id="inhabital_amount_entrance" name="inhabital_amount_entrance" class="form__input form__input--short" type="text" required>
                        <div class="text-small">Сколько квартир</div>
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
                        <button class="button button--blue" type="button">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>