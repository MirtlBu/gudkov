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
        <div class="text-bigger main-title">Я привёл человека</div>
 
 
		<div class="text-bigger main-title">Я привёл человека</div>
		
        <div class="flexbox pomoshnik ">
            <div class="flexbox__item">
			<form class="form">
				<div class="form__row">
					<div class="form__title text-big">Данные человека, которого вы привели</div>
				</div>
				<div class="form__row form__row--cluster">
					<label for="name-other" class="form__label">Имя,</label>
					<input id="name-other" name="name-other" class="form__input form__input--top" type="text" pattern="[a-zA-Z,а-яА-Я]+" title="Только буквы" required>
				</div>
				<div class="form__row form__row--cluster" style="display: none;">
					<label for="middlename-other" class="form__label">отчество</label>
					<input id="middlename-other" name="middlename-other" class="form__input form__input--middle" type="text" pattern="[a-zA-Z,а-яА-Я]+" title="Только буквы" required>
				</div>
				<div class="form__row">
					<label for="surname-other" class="form__label">фамилия</label>
					<input id="surname-other" name="surname-other" class="form__input form__input--bottom" type="text" pattern="[a-zA-Z,а-яА-Я]+" title="Только буквы" required>
				</div>
				<div class="form__row">
					<label for="phone-other" class="form__label">Телефон</label>
					<input id="phone-other" name="phone-other" class="form__input" type="text" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" title="Цифры, символы" onFocus="$('#phone-other').formatPnoneNumber(); if (this.value == '') this.value = '+';" placeholder="+7 912 456-68-61" value="+7">
					<span class="form__kostili"></span>
					<div class="form__note text-small">Так мы сможем вести учет голосов, оповещать о встречах с Дмитрие Гудковым, а также напомним о выборах в день голосования.</div>
					<div class="form__help text-small">Необязательно</div>
				</div>
				<div class="form__row agregated_fancy">
					<label for="street-other" class="form__label">Где прописан</label>
					<input id="street-other" name="street-other" class="form__input form__input--long street_input" type="text" title="Буквы, цифры" required>
					<span class="form__kostili"></span>
					<select id="fancyselect1" class="form__input streets_list fancible_select">
						<option>Народного ополчения</option>
						<option>Народных гуляний</option>
						<option>Ленина</option>
					</select>
					<div class="form__note text-small">Так мы сможем отметить всех наших сторонников на карте.</div>
					<div class="form__help text-small">Улица и дом</div>
				</div>
				<div class="form__row">
					<label for="appartment-other" class="form__label"></label>
					<input id="appartment-other" name="appartment-other" class="form__input form__input--short" type="text" maxlength="5" pattern="[0-9]+" title="Только цифры" required>
					<div class="form__help text-small">Квартира</div>
				</div>
				<div class="form__row">
					<label for="year-other" class="form__label">Год рождения</label>
					<input id="year-other" name="year-other" class="form__input form__input--short" type="text" maxlength="4" pattern="[0-9]{4}" title="Только 4 цифры">
					<span class="form__kostili"></span>
					<div class="form__help text-small">Необязательно</div>
				</div>
				<div class="form__row">
					<label for="social-other" class="form__label">Cоц. сети</label>
					<input id="social-other" name="social-other" class="form__input form__input--long" type="text">
					<div class="form__help text-small">Ссылки на Фейсбук, ВКонтакте и др. (Необязательно)</div>
				</div>
				<div class="form__row">
					<label for="align" class="form__label">На сколько сторонник</label>

					<input id="loyalty1" name="loyalty" value="1" class="form__input--hidden" type="radio">
					<label for="loyalty1" class="form__radio-button">1</label>

					<input id="loyalty2" name="loyalty" value="2" class="form__input--hidden" type="radio">
					<label for="loyalty2" class="form__radio-button">2</label>

					<input id="loyalty3" name="loyalty" value="3" class="form__input--hidden" type="radio">
					<label for="loyalty3" class="form__radio-button">3</label>

					<input id="loyalty4" name="loyalty" value="4" class="form__input--hidden" type="radio">
					<label for="loyalty4" class="form__radio-button">4</label>

					<input id="loyalty5" name="loyalty" value="5" class="form__input--hidden" type="radio" checked>
					<label for="loyalty5" class="form__radio-button">5</label>

					<input id="loyalty6" name="loyalty" value="6" class="form__input--hidden" type="radio">
					<label for="loyalty6" class="form__radio-button">6</label>

					<input id="loyalty7" name="loyalty" value="7" class="form__input--hidden" type="radio">
					<label for="loyalty7" class="form__radio-button">7</label>

					<input id="loyalty8" name="loyalty" value="8" class="form__input--hidden" type="radio">
					<label for="loyalty8" class="form__radio-button">8</label>

					<input id="loyalty9" name="loyalty" value="9" class="form__input--hidden" type="radio">
					<label for="loyalty9" class="form__radio-button">9</label>

					<input id="loyalty10" name="loyalty" value="10" class="form__input--hidden" type="radio">
					<label for="loyalty10" class="form__radio-button">10</label>

					<div class="form__help text-small">1 — совсем не стронник, 10 — ярый сторонник</div>
				</div>
				<div class="form__row">
					<label for="relation" class="form__label">Кем приходится</label>
					<input id="relation" name="relation" class="form__input form__input--long" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
					<div class="form__help text-small">Например, сосед по лестничной клетке</div>
				</div>
				<div class="form__row">
					<label for="other" class="form__label">Другое</label>
					<textarea id="other" name="other" class="form__textarea form__input--long"></textarea>
					<span class="form__kostili"></span>
					<div class="form__note text-small">Можете поделиться с нами любой, на ваш взгляд, важной информацией.</div>
				</div>
				<div class="form__row form__row--button form__row--lined">
					<label class="form__label"></label>
					<button class="button button--blue" type="button" onClick="follower.addFollower();">Отправить</button>
					<div class="form__error text-small">
						<div></div>
						<div id="error-message"></div>
					</div>
				</div>
			</form>
            </div>
        </div> 
 
    </div>
</div>