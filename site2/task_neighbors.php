<div class="content pomoshnik">
    <div class="dashboard">
        <div class="container flexbox">
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <div class="dashboard__user">
                        <div class="dashboard__img">
                            <img class="dashboard__img" src="../../static/images/userpic.jpg">
                        </div>
                        <div class="dashboard__title">Валерия</div>
                    </div>

                    <!-- <div class="dashboard__tablo">
                        <div class="">Валерия, как прошёл день?</div>
                        <div class="dashboard__rate">
                            <button class="button button--small button--red">Плохо</button>
                            <button class="button button--small button--blue">Всё по плану</button>
                            <button class="button button--small button--green">Отлично</button>
                        </div>
                    </div> -->
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
            <div class="text-bigger">Расскажи с кем живёшь</div>
        </div>
        <div class="singletask__taskbuttons">
            <div class="button button--blue singletask__taskbutton singletask__taskbutton--start">Начать</div>
            <div class="singletask__taskbutton singletask__taskbutton--reject">Отказаться</div>
        </div>
        <form class="form form--tenant">
            <div class="steps__header">
                <div class="flexbox">
                    <div class="flexbox__item steps__coordinator">
                        <div class="text-small text-small--light">Сделать предложил:</div>
                        <div class="steps-coordinator__img">
                            <img src="../../static/images/userpic.jpg">
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
                        <p>Здравствуйте, это Аня Кузнецова. Чтобы настроить систему агитации, мы хотели бы понять, сколько в округе есть людей, которые будут за нас голосовать.
                            Отметьте, пожалуйста, в таблице ниже, за кого планируют голосовать те, кто живёт с вами дома.</p>
                        <p>Не забудьте им рассказать про Дмитрия, если возникнут проблемы с убеждением — напишите, мы поможем ответить на вопросы.</p>
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
            <div class="form__row form__row--moremargin">
                <input id="live_alone" name="live_alone" value="live_alone" class="form__input form__input--hidden" type="checkbox" onChange="$();">
                <label for="live_alone" class="form__checkbox text-small">
                    <span>Живу один</span>
                </label>
            </div>
            <div class="form__row form__row--lined">
                <div class="form__title text-big">Сосед <span class="tenant_number"></span></div>
            </div>
            <div class="form__row form__row--cluster">
                <label for="name1" class="form__label">Имя,</label>
                <input id="name1" name="name1" class="form__input form__input--top" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
            </div>
            <div class="form__row">
                <label for="surname1" class="form__label">фамилия</label>
                <input id="surname1" name="surname1" class="form__input form__input--bottom" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
            </div>
            <div class="form__row">
                <label for="phone_indistrict" class="form__label">Телефон</label>
                <input id="phone_indistrict" name="phone_indistrict" class="form__input phone" placeholder="+7 912 456-68-61" type="text" required>
            </div>
            <div class="form__row">
                <label for="party1" class="form__label">За кого</label>
                <div class="form__radios form__radios--less-margin">
                    <div class="flexbox">
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="gudkov" name="party" value="gudkov" class="form__input form__input--hidden" type="radio" checked>
                                <label for="gudkov" class="form__radio-circle">
                                    <span class="party-icon party-icon--1"></span>
                                    <span>За Гудкова</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="kprf" name="party" value="kprf" class="form__input form__input--hidden" type="radio" checked>
                                <label for="kprf" class="form__radio-circle">
                                    <span class="party-icon party-icon--2"></span>
                                    <span>КПРФ</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="edro" name="party" value="edro" class="form__input form__input--hidden" type="radio" checked>
                                <label for="edro" class="form__radio-circle">
                                    <span class="party-icon party-icon--3"></span>
                                    <span>За Единую Россию</span>
                                </label>
                            </div>
                        </div>
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="other" name="party" value="other" class="form__input form__input--hidden" type="radio" checked>
                                <label for="other" class="form__radio-circle">
                                    <span class="party-icon party-icon--4"></span>
                                    <span>Другое</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="novoite" name="party" value="novoite" class="form__input form__input--hidden" type="radio" checked>
                                <label for="novoite" class="form__radio-circle">
                                    <span class="party-icon party-icon--5"></span>
                                    <span>Не ходит на выборы</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="nodata" name="party" value="nodata" class="form__input form__input--hidden" type="radio" checked>
                                <label for="nodata" class="form__radio-circle">
                                    <span class="party-icon party-icon--6"></span>
                                    <span>Неизвестно</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__row form__row--lined">
                <div class="form__title text-big">Сосед 2<span class="tenant_number"></span></div>
                <div class="form__edit form__edit--remove text-link">Удалить</div>
            </div>
            <div class="form__row form__row--cluster">
                <label for="name1" class="form__label">Имя,</label>
                <input id="name1" name="name1" class="form__input form__input--top" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
            </div>
            <div class="form__row">
                <label for="surname1" class="form__label">фамилия</label>
                <input id="surname1" name="surname1" class="form__input form__input--bottom" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
            </div>
            <div class="form__row">
                <label for="phone_indistrict" class="form__label">Телефон</label>
                <input id="phone_indistrict" name="phone_indistrict" class="form__input phone" placeholder="+7 912 456-68-61" type="text" required>
            </div>
            <div class="form__row">
                <label for="party1" class="form__label">За кого</label>
                <div class="form__radios form__radios--less-margin">
                    <div class="flexbox">
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="gudkov" name="party" value="gudkov" class="form__input form__input--hidden" type="radio" checked>
                                <label for="gudkov" class="form__radio-circle">
                                    <span class="party-icon party-icon--1"></span>
                                    <span>За Гудкова</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="kprf" name="party" value="kprf" class="form__input form__input--hidden" type="radio" checked>
                                <label for="kprf" class="form__radio-circle">
                                    <span class="party-icon party-icon--2"></span>
                                    <span>КПРФ</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="edro" name="party" value="edro" class="form__input form__input--hidden" type="radio" checked>
                                <label for="edro" class="form__radio-circle">
                                    <span class="party-icon party-icon--3"></span>
                                    <span>За Единую Россию</span>
                                </label>
                            </div>
                        </div>
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="other" name="party" value="other" class="form__input form__input--hidden" type="radio" checked>
                                <label for="other" class="form__radio-circle">
                                    <span class="party-icon party-icon--4"></span>
                                    <span>Другое</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="novoite" name="party" value="novoite" class="form__input form__input--hidden" type="radio" checked>
                                <label for="novoite" class="form__radio-circle">
                                    <span class="party-icon party-icon--5"></span>
                                    <span>Не ходит на выборы</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="nodata" name="party" value="nodata" class="form__input form__input--hidden" type="radio" checked>
                                <label for="nodata" class="form__radio-circle">
                                    <span class="party-icon party-icon--6"></span>
                                    <span>Неизвестно</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__row">
                <label for="relation" class="form__label">Связь с первым</label>
                <input id="relation" name="relation" class="form__input" type="text" required>
            </div>
            <div class="form__row">
                <label for="" class="form__label"></label>
                <div class="add">
                    <div class="add__button form__radio-button">
                        <div class="add__image"></div>
                    </div>
                    <div class="text-small add__text">Добавить жильца</div>
                </div>
            </div>
            <div class="form__row form__row--lined">
                <label for="other1" class="form__label">Комментарий</label>
                <textarea id="other1" name="other1" class="form__textarea form__input--long"></textarea>
            </div>
            <div class="form__row form__row--lined">
                <label class="form__label"></label>
                <button class="button button--blue" type="button">Отправить</button>
            </div>
        </form>

    </div>
</div>