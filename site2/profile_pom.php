<div class="content profile">
    <div class="container">
        <div class="text-bigger main-title">Редактировать профиль</div>
        <div class="form form--wide">
            <form>
                <div class="">
                    <div class="change_avatar">
                        <div class="form__row">
                            <div class="form__title text-big">Сменить аватарку</div>
                                <div class="imageload">
                                    <div class="imageload__prev">
                                        <img src="../images/userpic.jpg" id="imgprev">
                                    </div>
                                    <input id="imginp" type='file' class="form__load form__input--hidden" onchange="avatarUpload(event.target)">
                                    <label for="imginp" class="form__radio-button">
                                        <span class="text-link">Выбрать файл</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__title text-big">Личные данные</div>
                    </div>
<<<<<<< HEAD
					<span class="ajaxedForm" ajaxedMethod="profile.saveInfo(this);">
						<div class="form__row form__row--cluster">
							<label for="name" class="form__label">Имя,</label>
							<input id="name" name="name" class="form__input form__input--top name" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
						</div>
						<div class="form__row">
							<label for="surname" class="form__label">фамилия</label>
							<input id="surname" name="surname" class="form__input form__input--bottom surname" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
						</div>
						<div class="form__row form__row--lined">
							<label for="" class="form__label label-social">Социальные сети</label>
							<div class="flexbox form__socials">
								<div class="flexbox__item">
									<div class="form__row">
										<label for="vk" class="form__label text-small">ВКонтакте</label>
										<input id="vk" name="vk" class="form__input vk" type="text">
									</div>
									<div class="form__row">
										<label for="facebook" class="form__label text-small">Фейсбук</label>
										<input id="facebook" name="facebook" class="form__input facebook" type="text">
									</div>
									<div class="form__row">
										<label for="twitter" class="form__label text-small">Твиттер</label>
										<input id="twitter" name="twitter" class="form__input twitter" type="text">
									</div>
								</div>
								<div class="flexbox__item">
									<div class="form__row">
										<label for="ok" class="form__label text-small">ОК</label>
										<input id="ok" name="ok" class="form__input ok" type="text">
									</div>
									<div class="form__row">
										<label for="othersocial" class="form__label text-small">Другое</label>
										<input id="othersocial" name="othersocial" class="form__input othersocial" type="text">
									</div>
								</div>
							</div>
						</div>
					</span>
=======
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
                        <div class="form__help text-small">В работе понадобится <a href="https://telegram.org/" target="_blank" class="text-link">Телеграм</a></div>
                    </div>
                    <div class="form__row">
                        <label for="email1" class="form__label">Эл. почта</label>
                        <input id="email1" name="email1" class="form__input email" type="email" required>
                    </div>
                    <div class="form__row">
                        <label for="street" class="form__label">Адрес</label>
                        <input id="street" name="street" class="form__input form__input--long" type="text" required>
                        <span class="form__kostili"></span>
                        <select id="fancyselect" class="form__input streets_list">

                        </select>
                    </div>
                    <div class="form__row">
                        <label for="" class="form__label">Прописка в округе</label>
                        <input id="registered" name="registration" value="yes" class="form__input--hidden indistrict_visa" type="radio" checked>
                        <label for="registered" class="form__radio-button">Есть</label>
                        <input id="unregistered" name="registration" value="no" class="form__input--hidden indistrict_visa" type="radio">
                        <label for="unregistered" class="form__radio-button">Нет</label>
                    </div>
                    <div class="form__row form__row--lined">
                        <label for="" class="form__label label-social">Социальные сети</label>
                        <div class="flexbox form__socials">
                            <div class="flexbox__item">
                                <div class="form__row">
                                    <label for="vk" class="form__label text-small">ВКонтакте</label>
                                    <input id="vk" name="vk" class="form__input vk" type="text">
                                </div>
                                <div class="form__row">
                                    <label for="facebook" class="form__label text-small">Фейсбук</label>
                                    <input id="facebook" name="facebook" class="form__input facebook" type="text">
                                </div>
                                <div class="form__row">
                                    <label for="twitter" class="form__label text-small">Твиттер</label>
                                    <input id="twitter" name="twitter" class="form__input twitter" type="text">
                                </div>
                            </div>
                            <div class="flexbox__item">
                                <div class="form__row">
                                    <label for="ok" class="form__label text-small">ОК</label>
                                    <input id="ok" name="ok" class="form__input ok" type="text">
                                </div>
                                <div class="form__row">
                                    <label for="othersocial" class="form__label text-small">Другое</label>
                                    <input id="othersocial" name="othersocial" class="form__input othersocial" type="text">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form__row form__row--lined flexbox">
                        <label for="" class="form__label">Как готов помогать</label>
                        <div class="form__checkboxes advice_types">
                            <div class="flexbox">
                                <div class="flexbox__item">
                                    <div class="form__row">
                                        <input id="help1" name="help" value="check-supply" checked="checked" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help1" class="form__checkbox text-small">
                                            <span>Проверять качество доставки материалов</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help2" name="help" value="supply-porch" checked="checked" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help2" class="form__checkbox text-small">
                                            <span>Распространять агитматериалы по почтовым ящикам</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help4" name="help" value="agit-points" checked="checked" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help4" class="form__checkbox text-small">
                                            <span>Распространять агитматериалы на улице (укажите дни и время, когда удобно)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flexbox__item">
                                    <div class="form__row">
                                        <input id="help5" name="help" value="help-headquarters" checked="checked" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help5" class="form__checkbox text-small">
                                            <span>Грузоперевозки на личном автомобиле</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help6" name="help" value="help-storage" checked="checked" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help6" class="form__checkbox text-small">
                                            <span>Предоставить помещение для склада (гараж или комнату)</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help7" name="help" value="agit-neighbors" checked="checked" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help7" class="form__checkbox text-small">
                                            <span>Агитировать соседей лично</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help8" name="help" value="help-host" checked="checked" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help8" class="form__checkbox text-small">
                                            <span>Предоставить комнату для проживания агитатора</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form__row form__row--lined flexbox flexbox--start">
                        <label for="" class="form__label">Как часто обращаться</label>
                        <div class="form__radios">
                            <div class="form__row">
                                <input id="periodicity1" name="periodicity" value="onceinmonth" class="form__input form__input--hidden" type="radio">
                                <label for="periodicity1" class="form__radio-circle text-small">
                                    <span>Не чаще раза в месяц</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="periodicity2" name="periodicity" value="onceinweek" class="form__input form__input--hidden" type="radio">
                                <label for="periodicity2" class="form__radio-circle text-small">
                                    <span>Не чаще раза в неделю</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="periodicity3" name="periodicity" value="fewinweek" class="form__input form__input--hidden" type="radio">
                                <label for="periodicity3" class="form__radio-circle text-small">
                                    <span>Несколько раз в неделю</span>
                                </label>
                            </div>
                            <div class="form__row">
                                <input id="periodicity4" name="periodicity" value="asneed" class="form__input form__input--hidden" type="radio" checked>
                                <label for="periodicity4" class="form__radio-circle text-small">
                                    <span>Столько, сколько нужно</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <label for="otherhelp1" class="form__label">Чем могу помочь</label>
                        <textarea id="otherhelp1" name="otherhelp1" class="form__textarea form__input--long otherhelp"></textarea>
                    </div>
>>>>>>> origin/master
                    <div class="form__row form__row--lined">
                        <div class="form__title text-big">Сменить пароль</div>
                    </div>
					<span class="passwordChangeContainer">
						<div class="form__row">
							<label for="current_pass" class="form__label">Текущий пароль</label>
							<input id="current_pass" name="current_password" class="form__input form__input--long ajax_arg" type="password" required="">
						</div>
						<div class="form__row">
							<label for="new_pass" class="form__label">Новый пароль</label>
							<input id="new_pass" name="new_password1" class="form__input form__input--long ajax_arg" type="password" required="">
						</div>
						<div class="form__row">
							<label for="new_pass_again" class="form__label">Ещё раз</label>
							<input id="new_pass_again" name="new_password2" class="form__input form__input--long ajax_arg" type="password" required="">
						</div>
						<div class="form__row form__row--button form__row--lined">
							<label class="form__label"></label>
							<button class="button button--blue" type="button" onclick="auth.changePassword();">Сохранить</button>
							<div class="form__error text-small">
								<div></div>
								<div id="error-message"></div>
							</div>
						</div>
					</span>
                </div>
            </form>
        </div>
    </div>
</div>
