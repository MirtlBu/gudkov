<div class="content">
    <div class="dashboard">
        <div class="container flexbox">
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <div class="dashboard__title">Админская</div>
                    <div class="dashboard__tablo">
                        <div class="dashboard__tasks">
                            <a href="" class="text-link">Список заданий</a>
                        </div>
                        <div class="dashboard__errors">
                            <a href="" class="text-link">Ошибки пользователей</a>
                            <span>+34</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <button class="button button--blue" type="button">Добавить агитатора</button>
                    <button class="button button--blue" type="button">Добавить координатора</button>
                    <button class="button button--blue" type="button">Добавить помощника</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="" class="breadcrumbs-content text-link">Все задания</a>
        <div class="coordinator">
            <a href="" class="">
                <span class="text-link text-bigger">Разнести газеты по подъездам</span>
                <span class="text-small--light">(Все координаторы)</span>
            </a>
            <div class="flexbox">
                <div class="flexbox__item">
                    <form class="form form--steps">
                        <div class="dates">
                            <div class="text-small text-small--light">Поставлено <span class="created_at">26 февраля</span></div>
                            <div class="text-small text-small--light">Дедлайн <span class="deadline_at">12 марта</span></div>
                        </div>
                        <div class="text-big steps__title">Шаги</div>
                        <div class="steps__item">
                            <div class="flexbox">
                                <div class="flexbox__item">
                                    <div class="text-big steps__num">1</div>
                                    <div class="steps__point">Забрать газеты в штабе. Ул. Тверская, д 9. С 10 до 23 часов. Спросить Иру</div>
                                </div>
                                <div class="flexbox__item">
                                    <input id="step1" name="step1" value="step1" class="form__input form__input--hidden" type="checkbox" checked>
                                    <label for="step1" class="form__checkbox">
                                        <span>Готово!</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form__accept">

                            </div>
                        </div>
                        <div class="steps__item steps__item--error">
                            <div class="flexbox">
                                <div class="flexbox__item">
                                    <div class="text-big steps__num">2</div>
                                    <div class="steps__point">Разнести по подъездам в районе Митино в своём доме.</div>
                                </div>
                                <div class="flexbox__item">
                                    <input id="step2" name="step2" value="step2" class="form__input form__input--hidden" type="checkbox">
                                    <label for="step2" class="form__checkbox">
                                        <span>Готово!</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="steps__item">
                            <div class="flexbox">
                                <div class="flexbox__item">
                                    <div class="text-big steps__num">3</div>
                                    <div class="steps__point">На следующий день проверить, как там дела</div>
                                </div>
                                <div class="flexbox__item">
                                    <input id="step3" name="step3" value="step3" class="form__input form__input--hidden" type="checkbox">
                                    <label for="step3" class="form__checkbox">
                                        <span>Готово!</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="steps__item">
                            <div class="flexbox">
                                <div class="flexbox__item">
                                    <div class="text-big steps__num">4</div>
                                    <div class="steps__point">
                                        <div>Загрузить аватарку</div>
                                        <div class="imageload">
                                            <div class="imageload__prev">
                                                <img src="/static/images/userpic.jpg" id="imgprev">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flexbox__item">
                                    <input id="step4" name="step4" value="step4" class="form__input form__input--hidden" type="checkbox">
                                    <label for="step4" class="form__checkbox">
                                        <span>Готово!</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="steps__item">
                            <div class="flexbox form--disabled">
                                <div class="flexbox__item">
                                    <div class="text-big steps__num">5</div>
                                    <div class="steps__point">
                                        <div>Пару слов о ходе выполнении задания</div>
                                        <textarea name="other" class="form__textarea form__input--long"></textarea>
                                    </div>

                                </div>
                                <div class="flexbox__item">
                                    <input id="step5" name="step5" value="step5" class="form__input form__input--hidden" type="checkbox">
                                    <label for="step5" class="form__checkbox">
                                        <span>Готово!</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="steps__item">
                            <button class="button button--blue" type="submit">Завершить</button>
                            <div class="steps__note text-small">Все изменения сохранены</div>
                        </div>
                    </form>
                </div>
                <div class="flexbox__item">

                </div>
            </div>
        </div>
    </div>
</div>