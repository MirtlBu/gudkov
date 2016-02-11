<div class="budu_golosovat">
    <div class="container">
        <div class="flexbox">
            <div class="info">
                <div class="info__title">Я буду голосовать сам</div>
                <div class="info__text">
                    <p>Нам нужна информация о вас, чтобы мы смогли пригласить вас на встречу с Дмитрием,
                     когда она пройдёт в вашем районе, прислать вам открытку и напомнить вам о голосовании.</p>
                     <p>Это правда важно — независимые кандидаты проигрывают выборы потому,
                        что наши избиратели не приходят на участок (а избиратель кандидата от власти будет приведён начальником).
                        Позвольте нам напомнить вам о выборах перед ними.</p>
                </div>
            </div>
            <div class="note">
                <div class="note__text">Голосовать могут только жители&nbsp;районов:</div>
                <div class="note__bold">Митино, Строгино, <br> Покровское-Стрешнево, <br> Хорошево-Мневники,<br> Щукино, Южное Тушино</div>
            </div>
        </div>
        <div class="counter">
            <div class="counter__item">
                <div class="counter__num">4584</div>
                <div class="counter__text">голосов у&nbsp;нас есть</div>
            </div>
            <div class="counter__item">
                <div class="counter__num">/</div>
            </div>
            <div class="counter__item">
                <div class="counter__num">125 000</div>
                <div class="counter__text">нужно для&nbsp;победы</div>
            </div>
        </div>
        <form class="form">
            <div class="form__row form__row--cluster">
                <label for="surname" class="form__label">Фамилия,</label>
                <input id="surname" class="form__input form__input--top" type="text" required>
            </div>
            <div class="form__row form__row--cluster">
                <label for="name" class="form__label">имя,</label>
                <input id="name" class="form__input form__input--middle" type="text" required>
            </div>
            <div class="form__row">
                <label for="middlename" class="form__label">отчество</label>
                <input id="middlename" class="form__input form__input--bottom" type="text" required>
            </div>
            <div class="form__row">
                <label for="street" class="form__label">Где прописан</label>
                <input id="street" class="form__input" type="text" required>
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
                <label for="appartment" class="form__label"></label>
                <input id="appartment" class="form__input" type="text" required>
                <div class="form__help text-small">Квартира</div>
            </div>
            <div class="form__row">
                <label for="birthdate" class="form__label">Год рождения</label>
                <input id="birthdate" class="form__input" type="text" required>
            </div>
            <div class="form__row">
                <label for="social" class="form__label">Ваши соцсети</label>
                <input id="social" class="form__input" type="text" required>
                <div class="form__help text-small">Ссылки на Фейсбук, ВКонтакте и др. (Необязательно)</div>
            </div>
            <div class="form__row">
                <label for="phone" class="form__label">Телефон</label>
                <input id="phone" class="form__input" type="tel" required>
                <span class="form__kostili"></span>
                <div class="form__note text-small">Так мы сможем вести учет голосов, оповещать вас о встречах с Дмитрие Гудковым в вашем районе,
                    а также напомним вам о выборах в день голосования.</div>

            </div>
            <div class="form__row form__row--button">
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