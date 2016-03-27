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
                                        <img src="../../images/icon-question2.png" id="imgprev">
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
                        <div class="form__help text-small">В работе понадобится <a href="#" class="text-link">Телеграм</a></div>
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
                    <div class="form__row form__row--lined">
                        <div class="form__title text-big">Сменить пароль</div>
                    </div>
                    <div class="form__row">
                        <label for="current_pass" class="form__label">Текущий пароль</label>
                        <input id="current_pass" name="current_pass" class="form__input form__input--long" type="text" required>
                    </div>
                    <div class="form__row">
                        <label for="new_pass" class="form__label">Новый пароль</label>
                        <input id="new_pass" name="new_pass" class="form__input form__input--long" type="text" required>
                        <div class="form__help text-small">Обязательно придумайте пароль из шести символов и более, включающий строчные буквы, заглавные буквы и цифры.</div>
                    </div>
                    <div class="form__row">
                        <label for="new_pass_again" class="form__label">Ещё раз</label>
                        <input id="new_pass_again" name="new_pass_again" class="form__input form__input--long" type="text" required>
                    </div>
                    <div class="form__row form__row--button form__row--lined">
                        <label class="form__label"></label>
                        <button class="button button--blue" type="button" onClick="">Сохранить</button>
                        <div class="form__error text-small">
                            <div></div>
                            <div id="error-message"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>