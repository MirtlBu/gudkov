<div class="modal-wrap modal-wrap--active thankForNewHelper" style="display: none;">
    <div class="modal modal1">
        <div class="modal__title">
            <div class="text-bigger">Спасибо!</div>
            <div class="text-big">Не забудьте прийти на выборы</div>
        </div>
        <div class="flexbox">
            <div class="modal__text">А также мы обязательно с вами свяжемся.</div>
        </div>
        <div class="icon-close"></div>
    </div>
</div>

<div class="content pomogat">
    <div class="container">
        <div class="flexbox">
            <div class="info">
                <h2 class="info__title">Для желающих помогать <br>на&nbsp;предвыборной кампании</h2>
                <div class="info__text">
                    <p>Работать на выборах несложно, этому можно уделять всего пару часов в неделю. Вы сможете гордиться собой и вести кандидата к победе. </p>
                     <p>Можно агитировать на улице, а можно звонить, общаться с соседями, проверять доставку газет, агитировать в интернете, помогать в штабе.</p>
                </div>
            </div>
            <div class="note">
                <div class="note__text">Голосовать могут только жители&nbsp;районов:</div>
                <div class="note__bold">Митино, Строгино, <br> Покровское-Стрешнево, <br> Хорошево-Мневники,<br> Щукино, Южное Тушино</div>
            </div>
        </div>
        <form class="form">
            <div class="form__row align-centered">
                <input id="indistrict" name="district" value="in" type="radio" class="form__input--hidden" checked>
                <label for="indistrict" class="form__radio-button switcher" onClick="advice.indistrict = 1;">Проживаю в округе</label>
                <input id="outdistrict" name="district" value="out" class="form__input--hidden" type="radio">
                <label for="outdistrict" class="form__radio-button switcher" onClick="advice.indistrict = 0;">За пределами округа</label>
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
                    <span class="form__kostili"></span>
                    <div class="form__note text-small">Через Телеграм у вас будет возможность быстро и просто связываться с координатором,
                        задавать ему любые вопросы и узнавать самые последние новости о кампании.</div>
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
                    <div class="form__note text-small">Так мы сможем отметить всех наших сторонников на карте</div>
                    <div class="form__help text-small">Улица и дом</div>
                </div>
                <div class="form__row">
                    <label for="" class="form__label form__label--block">Прописка в округе</label>
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
                    <label for="otherhelp1" class="form__label">Чем ещё вы можете помочь</label>
                    <textarea id="otherhelp1" name="otherhelp1" class="form__textarea form__input--long otherhelp"></textarea>
                </div>
            </div>

            <div class="form__block form__block-outdistrict form__block--hidden">
                <div class="form__row">
                    <div class="form__title text-big">Будем рады, если поддержите нас деньгами</div>
                </div>
                <div class="form__row">
                    <a href="#" class="button button--red">Поддержать кампанию</a>
                </div>
                <div class="form__row form__row--lined">
                    <div class="form__title text-big">Если вы готовы потратить свое время, то заполните анкету</div>
                </div>
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
                    <span class="form__kostili"></span>
                    <div class="form__note text-small">Через Телеграм у вас будет возможность быстро и просто связываться с координатором,
                        задавать ему любые вопросы и узнавать самые последние новости о кампании.</div>
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
                <button class="button button--blue" type="button" onClick="advice.addNewHelper();">Отправить</button>
                <div class="form__error text-small">
                    <div></div>
                    <div id="error-message"></div>
                </div>
            </div>
        </form>
    </div>
</div>



<script>


selectFinder = {

	input_object: {},
	collection_packed: <?=$agregated_streets;?>,
	collection: [],

	init: function(){
		selectFinder.bindings();

		$('#fancyselect').fancySelect();

		selectFinder.unpackSearchCollection();
		delete selectFinder.collection_packed ;
	},

	unpackSearchCollection: function(){

		var length = selectFinder.collection_packed.length;
		for (var i = 0; i < length; i++){
			var item = selectFinder.collection_packed[i] ;

			var houses_list = item.houses_list.split(',');

			for (var n = 0; n < houses_list.length; n++){
				selectFinder.collection.push({street_name: item.street_name + ' ' + houses_list[n]});
			}


		}

	},

	bindings: function(){


		selectFinder.fancy_object.on('change.fs', function() {
			selectFinder.onOptionClicked();
			//selectFinder.hideSelect();
		});

	},

	setSearchingResults: function(html){
		selectFinder.list_object.html(html);
	},

	onOptionClicked: function(){
		var selected = selectFinder.fancy_object.find('li.selected');

		if (selected.text() == 0) return ;

		console.log(selected.text());

		selectFinder.input_object.val(selected.text());
	},

	hideSelect: function(){
		$('.trigger').trigger('close.fs');
	},

	showSelect: function(){
		if (!$('.trigger').hasClass('open')) $('.trigger').trigger('click.fs');

	},


	onKeyUp: function(){

		var input_string = $(this).val();
		input_string = input_string.toLowerCase();

		var input_parts = input_string.split(' ');

		if (input_string == ''){
			selectFinder.setSearchingResults('');
			return ;
		}

		selectFinder.showSelect();

		console.log(input_parts);

		var found_ids = [] ;
		var length = selectFinder.collection.length;
		for (var i = 0; i < length; i++){
			var item = selectFinder.collection[i] ;
			var street_name = item.street_name.toLowerCase() ;

			var is_found = false ;
			for (var n = 0; n < input_parts.length; n++){

				if (street_name.search(input_parts[n]) == -1){

					is_found = false ;
					break ;
				}

				is_found = true ;
			}

			if (!is_found) continue ;

			found_ids.push(i);

		}


		var searchResults = '' ;

		for (var i = 0; i < found_ids.length; i++){
			if (i > 5) break ;
			var item = selectFinder.collection[found_ids[i]] ;

			searchResults += '<li data-raw-value="' + i  + '" class="">' + item.street_name + '</li>';
		}

		if (searchResults == '') searchResults = '<li data-raw-value="-1" class="">Не найдено</li>';

		//site.shop.loadedItemsNames
		selectFinder.fancy_object.find('.options').html(searchResults);
	},

};


advice = {

	indistrict: 1,

	init: function(){

		selectFinder.fancy_object = $('.streets_list').parent();
		selectFinder.list_object = $('.streets_list');
		selectFinder.input_object = $('#street');

		$('#street').keyup(selectFinder.onKeyUp);

		selectFinder.init();

	},

	showError: function(text){
		$('#error-message').html(text);
		$('#error-message').css('opacity', 0.3).animate({opacity: 1}, 1000);
	},

	addNewHelper: function(){

		var container = $('.form__block-indistrict');
		if (advice.indistrict == 0){
			var container = $('.form__block-outdistrict');
		}

		var surname = container.find('.surname').val();
		var name = container.find('.name').val();
		var middlename = container.find('.middlename').val();
		var address = $('#street').val();
		var email = container.find('.email').val();
		var phone = container.find('.phone').val();

		var have_visa = $('.indistrict_visa:checked').val();

		var social_vk = container.find('.vk').val();
		var social_fb = container.find('.facebook').val();
		var social_tw = container.find('.twitter').val();
		var social_ok = container.find('.ok').val();
		var social_other = container.find('.othersocial').val();

		var advice_frequnecy = $('input[name="periodicity"]:checked').val();

		var additional_advice = container.find('.otherhelp').val();
		var advice_description = $('.advice_description').val();

		advice_types = [] ;

		$('.advice_types input[type="checkbox"]:checked').each(function(){
			advice_types.push($(this).attr('value'));
		});

		smartAjax('/ajax/ajax_user.php', {
			context: 'addNewHelper',
			surname: surname,
			name: name,
			middlename: middlename,
			address: address,
			email: email,
			have_visa: have_visa,
			phone: phone,
			social_vk: social_vk,
			social_fb: social_fb,
			social_tw: social_tw,
			social_ok: social_ok,
			social_other: social_other,
			advice_frequnecy: advice_frequnecy,
			additional_advice: additional_advice,
			advice_description: advice_description,
			advice_types: advice_types,
			indistrict: advice.indistrict,
		}, function(msg){

			advice.showError('');

			$('.thankForNewHelper').fadeIn(500);

		}, function(msg){
			advice.showError(msg.error_text);
		});

	},




};



$(document).ready(function(){

	advice.init();

	$.fn.formatPnoneNumber = function(){
		return this.each(function(){
			$(this).bind('keyup', function(){
				var num = this.value.replace( '+' , '' ).replace( /\D/g, '' ).split( /(?=.)/ ), i = num.length;
				if ( 0 <= i ) num.unshift( '+' );
				if ( 2 <= i ) num.splice( 2, 0, ' ' );
				if ( 5 <= i ) num.splice( 6, 0, ' ' );
				if ( 8 <= i ) num.splice( 10, 0, '-' );
				if ( 11 <= i ) num.splice( 13, 0, '-' );
				//if ( 12 <= i ) num.splice( 14, 0, '-' );
				//if ( 9 <= i ) num.splice( 12, 0, '-' );
				if ( 14 <= i ) num.splice( 17, num.length - 17 );
				this.value = num.join( '' );
			});
		});
	};

});

</script>

