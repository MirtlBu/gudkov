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