<div class="content">
    <div class="container form--event">
        <div class="text-bigger">Создать событие</div>
        <form>
            <div class="form">
				<input id="" name="lat" class="form__input form__input--long ajax_arg" type="hidden">
				<input id="" name="lng" class="form__input form__input--long ajax_arg" type="hidden">
				<input id="" name="event_id" class="form__input form__input--long ajax_arg" type="hidden">
                <div class="form__row">
                    <label for="event-name" class="form__label">Название</label>
                    <input id="event-name" name="event_name" class="form__input form__input--long ajax_arg" type="text">
                </div>
                <div class="form__row">
                    <label for="event-organizer" class="form__label">Формат</label>
					<select class="ajax_arg" name="event_type">
						<option select_value="Пикет">Пикет</option>
						<option select_value="Митинг">Митинг</option>
					</select>
                </div>	

                <div class="form__row">
                    <label for="datepicker2" class="form__label">Дата начала</label>
                    <input id="datepicker2" name="date_start" class="form__input form__input--short ajax_arg" type="text">
                    <div class="datepicker2 datepicker"></div>
                </div>
                <div class="form__row">
                    <label for="datepicker1" class="form__label">Дата конца</label>
                    <input id="datepicker1" name="date_end" class="form__input form__input--short ajax_arg" type="text">
                    <div class="datepicker1 datepicker"></div>
                </div>

                <div class="form__row">
                    <label for="event-time" class="form__label">Время</label>
                    <input id="event-time" name="time_start" class="form__input form__input--short ajax_arg" type="text">
                    <textarea id="event-time-comment" name="brief_time" class="form__textarea event-time-comment ajax_arg"></textarea>
                </div>
                <div class="form__row flexbox flexbox--start">
                    <label for="" class="form__label">Место сбора</label>
                    <div class="flexbox radio-circles">
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="mitino" name="headquarter" value="mitino" onClick="$('#address_full').val('Штаб в Митино');" class="form__input form__input--hidden mitino" type="radio">
                                <label for="mitino" class="form__radio-circle">
                                    <span>Штаб в Митино</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="shukino" name="headquarter" value="shukino" onClick="$('#address_full').val('Штаб в Щукино');" class="form__input form__input--hidden shukino" type="radio">
                                <label for="shukino" class="form__radio-circle">
                                    <span>Штаб в Щукино</span>
                                </label>
                            </div>
                        </div>
                        <div class="flexbox__item">
                            <div class="form__row">
                                <input id="mnevniki" name="headquarter" value="mnevniki" onClick="$('#address_full').val('Штаб в Мнёвниках');" class="form__input form__input--hidden mnevniki" type="radio">
                                <label for="mnevniki" class="form__radio-circle">
                                    <span>Штаб в Мневниках</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="other" name="headquarter" value="other" onClick="$('#address_full').val('');" class="form__input form__input--hidden other" type="radio">
                                <label for="other" class="form__radio-circle">
                                    <span>Другой адрес</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form__row">
                    <label for="" class="form__label"></label>
                    <input id="address_full" name="address_full" class="form__input form__input--long ajax_arg" type="text">
                </div>
                <div class="form__row">
                    <label for="event-organizer" class="form__label">Район</label>
					<select class="ajax_arg" name="region_name">
						<option select_value="Щукино">Щукино</option>
						<option select_value="Мнёвники">Мнёвники</option>
						<option select_value="Строгино">Строгино</option>
						<option select_value="Митино">Митино</option>
						<option select_value="Покровское-Стрешнево">Покровское-Стрешнево</option>
					</select>
                </div>		
                <div class="form__row">
                    <label for="event-description" class="form__label">Описание</label>
                    <textarea id="event-description" name="brief_main" class="form__textarea form__input--long event-description ajax_arg"></textarea>
                </div>
                <div class="form__row radio-circles people_display">
                    <label for="event-participants" class="form__label">Количество необходимых участников</label>
                    <input id="event-participants" name="people_needed" class="form__input form__input--short ajax_arg" type="text">
                    <div class="form__row">
                        <label for="" class="form__label"></label>
                        <input id="need" name="need-roll" value="all" class="form__input form__input--hidden need" type="radio">
                        <label for="need" class="form__radio-circle">
                            <span>Показывать сколько нужно и сколько записано</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <label for="" class="form__label"></label>
                        <input id="roll" name="need-roll" value="joined" class="form__input form__input--hidden roll" type="radio">
                        <label for="roll" class="form__radio-circle">
                            <span>Показывать только сколько записано</span>
                        </label>
                    </div>
                    <div class="form__row">
                        <label for="" class="form__label"></label>
                        <input id="nothing" name="need-roll" value="none" class="form__input form__input--hidden nothing" type="radio">
                        <label for="nothing" class="form__radio-circle">
                            <span>Ничего не показывать</span>
                        </label>
                    </div>
                </div>
                <div class="form__row">
                    <label for="event-organizer" class="form__label">Организатор</label>
					<select class="ajax_arg" name="owner_id">
						<option select_value="shukino" disabled>Организатор</option>
					</select>
                </div>		
                <div class="form__row">
                    <label for="event-organizer-comment" class="form__label">Комментарий организатора</label>
                    <textarea id="event-organizer-comment" name="brief_owner" class="form__textarea form__input--long event-organizer-comment ajax_arg"></textarea>
                </div>
                <div class="form__row form__row--button form__row--lined">
                    <label class="form__label"></label>
                    <button class="button button--blue" type="button" onClick="gdMapAdmin.createNewEvent(); return false;">Отправить</button>
                    <div class="form__error text-small">
                        <div></div>
                        <div id="error-message"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>