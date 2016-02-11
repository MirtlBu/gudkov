<div class="pomogat">
    <div class="container">
        <div class="flexbox">
            <div class="info">
                <div class="info__title">Для желающих помогать на&nbsp;предвыборной&nbsp;кампании</div>
                <div class="info__text">
                    <p>Нам очень важна помощь людей, живущих в округе (именно проживающих, тут не важна прописка).
                        Даже если вы проживаете за пределами округа, всё равно заполните анкету.</p>
                     <p>Если вы просто сможете сообщать нам пришла ли наша газета в ваш почтовый ящик — это будет прекрасно.</p>
                     <p>Если вы сможете помочь нам распространять информацию или поговорите с соседями — тогда мы точно победим.</p>
                </div>
            </div>
            <div class="note">
                <div class="note__text">Голосовать могут только жители&nbsp;районов:</div>
                <div class="note__bold">Митино, Строгино, <br> Покровское-Стрешнево, <br> Хорошево-Мневники,<br> Щукино, Южное Тушино</div>
            </div>
        </div>
        <form class="form">
            <div class="form__row">
                <input id="indistrict" name="district" value="in" type="radio" checked>
                <label for="indistrict" class="form__radio-button">Проживаю в округе</label>
                <input id="outdistrict" name="district" value="in" type="radio">
                <label for="outdistrict" class="form__radio-button">За пределами округа</label>
            </div>
            <div class="form__row form__row--cluster">
                <label for="surname" class="form__label">Фамилия,</label>
                <input id="surname" name="surname" class="form__input form__input--top" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
            </div>
            <div class="form__row form__row--cluster">
                <label for="name" class="form__label">имя,</label>
                <input id="name" name="name" class="form__input form__input--middle" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
            </div>
            <div class="form__row">
                <label for="middlename" class="form__label">отчество</label>
                <input id="middlename" name="middlename" class="form__input form__input--bottom" type="text" pattern="[a-zA-Z,а-яА-Я]+" required>
            </div>
            <div class="form__row">
                <label for="phone" class="form__label">Телефон</label>
                <input id="phone" name="phone" class="form__input" type="tel" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" required>
                <span class="form__kostili"></span>
                <div class="form__note text-small">Через Телеграм у вас будет возможность быстро и просто связываться с координатором,
                    задавать ему любые вопросы и узнавать самые последние новости о кампании.</div>
                <div class="form__help text-small">В работе понадобится <a href="#" class="text-link">Телеграм</a></div>
            </div>
            <div class="form__row">
                <label for="middlename" class="form__label">Эл. почта</label>
                <input id="middlename" name="middlename" class="form__input" type="email" required>
            </div>
            <div class="form__row">
                <label for="street" class="form__label">Адрес</label>
                <input id="street" name="street" class="form__input form__input--long" type="text" required>
                <span class="form__kostili"></span>
                <select id="fancyselect" class="form__input">
                    <option>Народного ополчения</option>
                    <option>Народных гуляний</option>
                    <option>Ленина</option>
                </select>
                <div class="form__note text-small">Так мы сможем отметить всех наших сторонников на карте</div>
                <div class="form__help text-small">Улица и дом</div>
            </div>
            <div class="form__row">
                <label for="" class="form__label">Прописка в округе</label>
                <input id="registered" name="registration" value="yes" type="radio" checked>
                <label for="registered" class="form__radio-button">Есть</label>
                <input id="unregistered" name="registration" value="no" type="radio">
                <label for="unregistered" class="form__radio-button">Нет</label>
            </div>
            <div class="form__row form__row--lined">
                <label for="" class="form__label">Социальные сети</label>
                <div class="flexbox form__socials">
                    <div class="flexbox__item">
                        <div class="form__row">
                            <label for="vk" class="form__label text-small">ВКонтакте</label>
                            <input id="vk" name="vk" class="form__input" type="text">
                        </div>
                        <div class="form__row">
                            <label for="facebook" class="form__label text-small">Фейсбук</label>
                            <input id="facebook" name="facebook" class="form__input" type="text">
                        </div>
                        <div class="form__row">
                            <label for="twitter" class="form__label text-small">Твиттер</label>
                            <input id="twitter" name="twitter" class="form__input" type="text">
                        </div>
                    </div>
                    <div class="flexbox__item">
                        <div class="form__row">
                            <label for="ok" class="form__label text-small">ОК</label>
                            <input id="ok" name="ok" class="form__input" type="text">
                        </div>
                        <div class="form__row">
                            <label for="othersocial" class="form__label text-small">Другое</label>
                            <input id="othersocial" name="othersocial" class="form__input" type="text">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form__row form__row--button form__row--lined">
                <label class="form__label"></label>
                <button class="button button--blue" type="submit">Отправить</button>
                <div class="form__error text-small">
                    <div>Нужно заполнить:</div>
                    <div id="error-message">год рождения</div>
                </div>
            </div>
        </form>
    </div>
</div>