<div class="content coordinatorskaya">
    <div class="dashboard">
        <div class="container flexbox flexbox--verticalmiddle">
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <div class="dashboard__title">Координаторская</div>
                    <div class="dashboard__tablo">
                        <div class="">Валера, как прошёл день?</div>
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
                    <button class="button button--blue" type="button">Добавить помощника</button>
                    <div class="dashboard__row dashboard__bold">УИКи:</div>
                    <div class="flexbox">
                        <div class="flexbox__item">
                            <div class="dashboard__row">23534667</div>
                            <div class="dashboard__row">23534667</div>
                        </div>
                        <div class="flexbox__item">
                            <div class="dashboard__row">23534667</div>
                            <div class="dashboard__row">23534667</div>
                        </div>
                        <div class="flexbox__item">
                            <div class="dashboard__row">23534667</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-bigger">Добавить помощника</div>
            <form class="form form--addhelper">
                <div class="form__row align-centered">
                    <input id="indistrict" name="district" value="in" type="radio" class="form__input--hidden" checked>
                    <label for="indistrict" class="form__radio-button switcher" onClick="">Проживаю в округе</label>
                    <input id="outdistrict" name="district" value="out" class="form__input--hidden" type="radio">
                    <label for="outdistrict" class="form__radio-button switcher" onClick="">За пределами округа</label>
                </div>
                <script type="text/javascript">
                    (function() {
                        var switchers  = document.querySelectorAll('label.switcher');
                        function hideBlock(arr) {
                            Array.prototype.forEach.call(arr, function(e, i) {
                                e.style.display='none';
                            });
                        }
                        Array.prototype.forEach.call(switchers, function(elem, index) {
                            elem.addEventListener('click', function() {
                                var blocks = document.querySelectorAll('.form__block');
                                hideBlock(blocks);
                                var name = elem.getAttribute('for');
                                var block = document.querySelector('.form__block-' + name);
                                block.style.display='block';
                            });
                        });
                    })();
                </script>

                <div class="form__block form__block-indistrict" data-name="indistrict">
                    <div class="form__row form__row--cluster">
                        <label for="name" class="form__label">Имя,</label>
                        <input id="name" name="name" class="form__input form__input--top name" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
                    </div>
                    <div class="form__row form__row--cluster">
                        <label for="middlename" class="form__label">отчество</label>
                        <input id="middlename" name="middlename" class="form__input form__input--middle middlename" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
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
                        <select id="fancyselect" class="form__input streets_list">

                        </select>
                        <div class="form__help text-small">Улица и дом</div>
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
                                        <input id="help1" name="help" value="check-supply" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help1" class="form__checkbox text-small">
                                            <span>Проверять качество доставки материалов</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help2" name="help" value="supply-porch" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help2" class="form__checkbox text-small">
                                            <span>Распространять агитматериалы по почтовым ящикам</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help4" name="help" value="agit-points" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help4" class="form__checkbox text-small">
                                            <span>Распространять агитматериалы на улице (укажите дни и время, когда удобно)</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help4-1" name="help" class="form__input advice_description" type="text">
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
                                        <input id="help7" name="help" value="agit-neighbors" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help7" class="form__checkbox text-small">
                                            <span>Агитировать соседей лично</span>
                                        </label>
                                    </div>
                                    <div class="form__row">
                                        <input id="help8" name="help" value="help-host" class="form__input form__input--hidden" type="checkbox">
                                        <label for="help8" class="form__checkbox text-small">
                                            <span>Предоставить комнату для проживания агитатора</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form__row flexbox flexbox--start">
                        <label for="" class="form__label">Как часто обращаться</label>
                        <div class="form__radios">
                            <div class="form__row">
                                <input id="periodicity1" name="periodicity" value="onceinmonth" class="form__input form__input--hidden" type="radio" checked>
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
                                <input id="periodicity4" name="periodicity" value="asneed" class="form__input form__input--hidden" type="radio">
                                <label for="periodicity4" class="form__radio-circle text-small">
                                    <span>Столько, сколько нужно</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <label for="otherhelp1" class="form__label">Чем ещё может помочь</label>
                        <textarea id="otherhelp1" name="otherhelp1" class="form__textarea form__input--long otherhelp"></textarea>
                    </div>
                </div>

                <div class="form__block form__block-outdistrict form__block--hidden">
                    <div class="form__row form__row--cluster">
                        <label for="name" class="form__label">Имя,</label>
                        <input id="name" name="name" class="form__input form__input--top name" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
                    </div>
                    <div class="form__row form__row--cluster">
                        <label for="middlename" class="form__label">отчество</label>
                        <input id="middlename" name="middlename" class="form__input form__input--middle middlename" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
                    </div>
                    <div class="form__row">
                        <label for="surname" class="form__label">фамилия</label>
                        <input id="surname" name="surname" class="form__input form__input--bottom surname" type="text" pattern="[a-zA-Zа-яёА-ЯЁ \-]*">
                    </div>
                    <div class="form__row">
                        <label for="phone_outdistrict" class="form__label">Телефон</label>
                        <input id="phone_outdistrict" name="phone_outdistrict" class="form__input phone" type="text" onFocus="$('#phone_outdistrict').formatPnoneNumber(); if (this.value == '') this.value = '+';" placeholder="+7 912 456-68-61" required>
                        <div class="form__help text-small">В работе понадобится <a href="#" class="text-link">Телеграм</a></div>
                    </div>
                    <div class="form__row">
                        <label for="email2" class="form__label">Эл. почта</label>
                        <input id="email2" name="email2" class="form__input email" type="email" required>
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
                    <div class="form__row form__row--lined for">
                        <label for="otherhelp" class="form__label">Чем ещё вы можете помочь</label>
                        <textarea id="otherhelp" name="otherhelp" class="form__textarea form__input--long otherhelp"></textarea>
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