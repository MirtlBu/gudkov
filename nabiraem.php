
<div class="content nabiraem">
    <div class="slogan">
        <div class="container flexbox">
            <div class="flexbox__item slogan__left">
                <h1 class="slogan__title">Присоединяйтесь к&nbsp;команде&nbsp;Гудкова</h1>
                <div class="slogan__district">
                            Будем вместе звонить избирателям, агитировать на улице,  ходить по квартирам и работать в штабе.
                        </div>
            </div>
            <div class="flexbox__item slogan__right">
                <div class="slogan__info">
                    <p>Мы должны заинтересовать сотни тысяч людей в необходимости перемен. Эта страна принадлежит нам. Это то, чем мы занимаемся на кампании.</p>
                    <p>
                        Для победы нам нужны сторонники, такие как вы.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <?php include $_CFG['root'] . "modules/map_mirtl.php";?>
        <div class="container">
            <div class="map__info text-big">Кликни на дом и расскажи о нём</div>
        </div>
    </div>
    <div class="container">
        <div class="flexbox">
            <form class="form form_about_people" style="display: none;">
                <div class="form__row">
                    <label for="address" class="form__label">Адрес</label>
                    <input id="address" name="address" class="form__input form__input--long mapForm_address" type="text" required>
                </div>

				<div class="template_flat">

				</div>


				<div class="form__row form__row--lined">
					<div class="add" onClick="mapForm.addNewFlat();">
						<div class="add__button form__radio-button">
							<div class="add__image"></div>
						</div>
						<div class="text-small add__text">Добавить eщё квартиру в доме</div>
					</div>
				</div>

                <div class="form__row form__row--button form__row--lined">
                    <label class="form__label"></label>
                    <button class="button button--blue" type="button" onClick="mapForm.sendFormAboutPeople();">Отправить</button>
                    <div class="form__error text-small">
                        <div></div>
                        <div id="error-message"></div>
                    </div>
                </div>


            </form>
            <div class="mailme">
                Если у вас много другой нужной нам информации, отправьте её на почту  <a href="" class="text-link">shtab@gudkov.ru</a>
            </div>
        </div>

        <form class="form form_about_house" style="display: none;">
            <div class="form__row">
                <label for="address" class="form__label form__label--separated">Адрес</label>
                <input id="address" name="address" class="form__input form__input--long mapForm_address" type="text" required>
            </div>
            <div class="form__row flexbox flexbox--triple">
                <div class="flexbox__item">
                    <label for="" class="form__label form__label--separated">Сколько этажей,</label>
                    <input id="" name="" class="form__input form__input--short amount_floor" type="text" pattern="[0-9]+" required>
                </div>
                <div class="flexbox__item">
                    <label for="" class="form__label form__label--separated">подъездов,</label>
                    <input id="" name="" class="form__input form__input--short amount_entrance" type="text" pattern="[0-9]+" required>
                </div>
                <div class="flexbox__item">
                    <label for="" class="form__label form__label--separated">квартир</label>
                    <input id="" name="" class="form__input form__input--short amount_flat" type="text" pattern="[0-9]+" required>
                </div>
            </div>

			<div class="template_entrances">
				<div class="form__row">
					<label for="middlename" class="form__label form__label--separated">Коды от домофонов</label>
					<div class="flexbox flexbox--double">
						<div class="flexbox__item">
							<input id="middlename" name="middlename" class="form__input form__input--short entrance_number" type="text" required>
							<label for="middlename" class="form__label text-small ">№ подъезда</label>
						</div>
						<div class="flexbox__item">
							<input id="middlename" name="middlename" class="form__input form__input--short door_code" type="text" required>
							<label for="middlename" class="form__label text-small">код</label>
						</div>
					</div>
				</div>
			</div>


			<div class="form__row addNewEntrance"  onClick="mapForm.addNewEntrance(this);">
				<div class="add" id="">
					<div class="add__button form__radio-button">
						<div class="add__image"></div>
					</div>
					<div class="text-small add__text">Добавить ещё подъезд</div>
				</div>
			</div>

            <div class="form__row form__row--button form__row--lined">
                <label class="form__label"></label>
                <button class="button button--blue" type="submit">Отправить</button>
                <div class="form__error text-small">
                    <div></div>
                    <div id="error-message"></div>
                </div>
            </div>
        </form>
    </div>

</div>


<div class="formtenant_tmp hide">
	<div class="tenant withOpacity" id="" style="opacity: 0.1;">
		<div class="form__row">
			<div class="form__title text-big">Жилец <span class="tenant_number"></span></div>
		</div>
		<div class="form__row form__row--cluster">
			<label for="name1" class="form__label">Имя,</label>
			<input id="name1" name="name1" class="form__input form__input--top" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
		</div>
		<div class="form__row form__row--cluster">
			<label for="middlename1" class="form__label">отчество</label>
			<input id="middlename1" name="middlename1" class="form__input form__input--middle" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
		</div>
		<div class="form__row">
			<label for="surname1" class="form__label">фамилия</label>
			<input id="surname1" name="surname1" class="form__input form__input--bottom" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
		</div>
		<div class="form__row">
			<label for="party1" class="form__label">Какой партии симпатизирует</label>
			<input id="party1" name="party1" class="form__input form__input--long" type="text" required>
		</div>
		<div class="form__row">
			<label for="age1" class="form__label">Возраст</label>
			<input id="age1" name="age1" class="form__input form__input--short" type="text" pattern="[0-9]+" required>
		</div>
		<div class="form__row flexbox flexbox--start">
			<label for="" class="form__label">Собирается ли на выборы</label>
			<div class="form__radios">
				<div class="form__row">
					<input id="toelections-yes1" name="toelections1" value="yes" class="form__input form__input--hidden toelections_radio" type="radio" checked>
					<label for="toelections-yes1" class="form__radio-circle">
						<span>Да</span>
					</label>
				</div>
				<div class="form__row">
					<input id="toelections-no1" name="toelections1" value="no" class="form__input form__input--hidden toelections_radio" type="radio">
					<label for="toelections-no1" class="form__radio-circle">
						<span>Нет</span>
					</label>
				</div>
				<div class="form__row">
					<input id="toelections-unknown1" name="toelections1" value="unknown" class="form__input form__input--hidden toelections_radio" type="radio">
					<label for="toelections-unknown1" class="form__radio-circle">
						<span>Не удалось узнать</span>
					</label>
				</div>
			</div>
		</div>
		<div class="form__row">
			<label for="other1" class="form__label">Другое</label>
			<textarea id="other1" name="other1" class="form__textarea form__input--long"></textarea>
		</div>
	</div>


</div>

<div class="formflat_tmp hide">
	<div class="form__row form__row--lined">
		<label for="middlename" class="form__label">№ квартиры</label>
		<input id="middlename" name="middlename" class="form__input form__input--short flat_number" type="text" pattern="[0-9]+" required>
	</div>

	<div class="template_tenants"></div>

	<div class="form__row addNewTenant"  onClick="mapForm.addNewTenant(this);">
		<div class="add" id="">
			<div class="add__button form__radio-button">
				<div class="add__image"></div>
			</div>
			<div class="text-small add__text">Добавить жильца в квартиру</div>
		</div>
	</div>
</div>

<div class="entranceinfo_tmp hide">
	<div class="form__row entranceinfo withOpacity" style="opacity: 0.1;">
		<label for="middlename" class="form__label form__label--separated">Коды от домофонов</label>
		<div class="flexbox flexbox--double">
			<div class="flexbox__item">
				<input id="middlename" name="middlename" class="form__input form__input--short entrance_number" type="text" pattern="" required>
				<label for="middlename" class="form__label text-small">№ подъезда</label>
			</div>
			<div class="flexbox__item">
				<input id="middlename" name="middlename" class="form__input form__input--short door_code" type="text" pattern="" required>
				<label for="middlename" class="form__label text-small">код</label>
			</div>
		</div>
	</div>
</div>