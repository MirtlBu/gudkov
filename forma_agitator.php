<div class="content">
    <?php include "dashboard.php"; ?>
    <div class="container">
        <div class="forma_agitator">
            <div class="text-bigger">Добавить агитатора</div>
            <form class="form">
                <div class="form__row form__row--cluster">
                    <label for="name" class="form__label">Имя,</label>
                    <input id="name" name="name" class="form__input form__input--top name" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
                </div>
                <div class="form__row form__row--cluster">
                    <label for="middlename" class="form__label">отчество</label>
                    <input id="middlename" name="middlename" class="form__input form__input--middle middlename" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
                </div>
                <div class="form__row">
                    <label for="surname" class="form__label">фамилия</label>
                    <input id="surname" name="surname" class="form__input form__input--bottom surname" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
                </div>
                <div class="form__row">
                    <label for="phone_indistrict" class="form__label">Телефон</label>
                    <input id="phone_indistrict" name="phone_indistrict" class="form__input phone" placeholder="+7 912 456-68-61" type="text" required>
                    <div class="form__help text-small">В работе понадобится <a href="#" class="text-link">Телеграм</a></div>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Эл. почта</label>
                    <input id="email" name="email" class="form__input email" type="email" required>
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
                <div class="form__row form__row--button form__row--lined">
                    <label class="form__label"></label>
                    <button class="button button--blue button--keygen" type="button">Выдать пароль</button>
                    <input class="form__input form__input--keygen" type="text"></input>
                    <span class="text-link text-small">Копировать</span>
                </div>
                <div class="form__row">
                    <label class="form__label"></label>
                    <button class="button button--blue" type="button">Сохранить</button>
                </div>
            </form>

        </div>
    </div>
</div>