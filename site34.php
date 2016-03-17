<div class="content">
    <div class="container form--event">
        <div class="text-bigger">Создать событие</div>
        <form>
            <div class="form">
                <div class="form__row">
                    <label for="event-name" class="form__label">Название</label>
                    <input id="event-name" name="event-name" class="form__input form__input--long" type="text">
                </div>
                <div class="form__row">
                    <label for="event-format" class="form__label">Формат</label>
                    <input id="event-format" name="event-format" class="form__input form__input--long" type="text">
                </div>
                <div class="form__row">
                    <label for="datepicker" class="form__label">Дата</label>
                    <input id="datepicker" name="event-date" class="form__input form__input--short" type="text">
                    <div class="datepicker"></div>
                </div>

                <div class="form__row">
                    <label for="event-time" class="form__label">Время</label>
                    <input id="event-time" name="event-time" class="form__input form__input--short" type="text">
                    <textarea id="event-time-comment" name="event-time-comment" class="form__textarea event-time-comment"></textarea>
                </div>
                <div class="form__row form__row--nomargin flexbox flexbox--start">
                    <label for="" class="form__label">Место сбора</label>
                    <div class="flexbox radio-circles">
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="mitino" name="headquarter" value="mitino" class="form__input form__input--hidden mitino" type="radio">
                                <label for="mitino" class="form__radio-circle">
                                    <span>Штаб в Митино</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="shukino" name="headquarter" value="shukino" class="form__input form__input--hidden shukino" type="radio">
                                <label for="shukino" class="form__radio-circle">
                                    <span>Штаб в Щукино</span>
                                </label>
                            </div>
                        </div>
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="mnevniki" name="headquarter" value="mnevniki" class="form__input form__input--hidden mnevniki" type="radio">
                                <label for="mnevniki" class="form__radio-circle">
                                    <span>Штаб в Мневниках</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="other" name="headquarter" value="other" class="form__input form__input--hidden other" type="radio">
                                <label for="other" class="form__radio-circle">
                                    <span>Другой адрес</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__row form__row--moremargin">
                    <label for="" class="form__label"></label>
                    <input id="headquarter-comment" name="headquarter-comment" class="form__input form__input--long" type="text">
                </div>
                <div class="form__row">
                    <label for="event-task" class="form__label">Задачи</label>
                    <textarea id="event-task" name="event-task" class="form__textarea form__input--long event-task"></textarea>
                </div>
                <div class="form__row">
                    <label for="event-description" class="form__label">Описание</label>
                    <textarea id="event-description" name="event-description" class="form__textarea form__input--long event-description"></textarea>
                </div>
                <div class="form__row radio-circles">
                    <label for="event-participants" class="form__label">Количество необходимых участников</label>
                    <input id="event-participants" name="event-participants" class="form__input form__input--short" type="text">
                    <div class="form__row">
                        <label for="" class="form__label"></label>
                        <input id="need" name="need-roll" value="need" class="form__input form__input--hidden need" type="radio">
                        <label for="need" class="form__radio-circle">
                            <span>Показывать сколько нужно и сколько записано</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <label for="" class="form__label"></label>
                        <input id="roll" name="need-roll" value="roll" class="form__input form__input--hidden roll" type="radio">
                        <label for="roll" class="form__radio-circle">
                            <span>Показывать только сколько записано</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <label for="" class="form__label"></label>
                        <input id="nothing" name="need-roll" value="nothing" class="form__input form__input--hidden nothing" type="radio">
                        <label for="nothing" class="form__radio-circle">
                            <span>Ничего не показывать</span>
                        </label>
                    </div>
                </div>
                <div class="form__row">
                    <label for="event-organizer" class="form__label">Организатор</label>
                    <input id="event-organizer" name="event-organizer" class="form__input form__input--long event-organizer" type="text">
                </div>
                <div class="form__row">
                    <label for="event-organizer-comment" class="form__label">Комментарий организатора</label>
                    <textarea id="event-organizer-comment" name="event-organizer-comment" class="form__textarea form__input--long event-organizer-comment"></textarea>
                </div>
                <div class="form__row form__row--button form__row--lined">
                    <label class="form__label"></label>
                    <button class="button button--blue" type="button" onClick="advice.addNewHelper();">Отправить</button>
                    <div class="form__error text-small">
                        <div></div>
                        <div id="error-message"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>