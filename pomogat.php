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
                <div class="form__help text-small">В работе понадобится <a href="#" class="text-link">Телеграм</a></div>
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