<div class="content">
    <div class="dashboard">
        <div class="container flexbox flexbox--verticalbottom">
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <div class="dashboard__user">
                        <div class="dashboard__img">
                            <img class="dashboard__img" src="../../static/images/userpic.jpg">
                        </div>
                        <div class="dashboard__title">Константин</div>
                    </div>
                    <div class="dashboard__tablo">
                        <div class="dashboard__tasks">
                            <a href="" class="text-link">Список заданий</a>
                        </div>
                        <div class="dashboard__errors">
                            <a href="" class="text-link">Ошибки пользователей</a>
                            <span>+34</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flexbox__item">
                <div class="flexbox__container">
                    <a href="" class="button button--blue button--small">+1 голос к победе</a>
                    <a href="" class="button button--blue button--small">Добавить координатора</a>
                    <div>Добавить шефа</div>
                    <a href="" class="button button--blue button--small button--short">Из заявок</a>
                    <a href="" class="button button--blue button--small button--short">Нового</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="admin reqlist">
            <div class="text-bigger main-title">Список заявок в помощники</div>
            <div class="table">
                <div class="table__header flexbox">
                    <div class="text-small flexbox__item">
                        <div class="text-small flexbox__item filter">
                            <div class="filter__title">Все заявки</div>
                            <select class="filter__dropdown">
                                <option class="filter__option">Сначала новые заявки</option>
                                <option class="filter__option">Сначала старые заявки</option>
                                <option class="filter__option">Все заявки</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-small flexbox__item">Соцсети</div>
                    <div class="text-small flexbox__item">Адрес</div>
                    <div class="flexbox__item"></div>
                </div>
				<span class="reqlist_table">
				<div class="table__row flexbox listitem" user_id="721">
						<div class="flexbox__item">
							<div class="reqlist__date text-small text-light">31 марта</div>
							<div class="reqlist__person">
								<div class="reqlist__name">
									<a href="" class=" text-link text-big" onclick="newUser.loadHelperForm(721);return false;">Антонина </a>
								</div>
								<div class="reqlist__phone text-small"><a href="tel:+7902854380">+7902854380</a></div>
							</div>
						</div>
						<div class="flexbox__item reqlist__contacts"></div>
						<div class="flexbox__item reqlist__address">Маршала Бирюзова ул. 28</div>
						<div class="flexbox__item reqlist__comment" style="text-align: right;">
							<img class="tooltip commentBtn tooltipstered" src="/static/images/comment_icon.png" style="width: 32px;" onclick="newUser.showCommentPopup(this);" title2="Пожилая, готова помогать, но ограниченно
				БИТЫЙ ТЕЛЕФОН">
							<img class="declineBtn" onclick="newUser.declineUserPopup(this);" src="/static/images/reject_icon.png" style="width: 33px;    margin-right: 45px;margin-left: 5px;">
						</div>
				</div>
					
				<div class="table__row flexbox listitem" user_id="682">
					<div class="flexbox__item">
						<div class="reqlist__date text-small text-light">28 марта</div>
						<div class="reqlist__person">
							<div class="reqlist__name">
								<a href="" class=" text-link text-big" onclick="newUser.loadHelperForm(682);return false;">Галина Неизвестно</a>
							</div>
							<div class="reqlist__phone text-small"><a href="tel:+79687504560">+79687504560</a></div>
						</div>
					</div>
					<div class="flexbox__item reqlist__contacts"></div>
					<div class="flexbox__item reqlist__address">Маршала Рыбалко ул. 4КГ</div>
					<div class="flexbox__item reqlist__comment" style="text-align: right;">
						<img class="tooltip commentBtn tooltipstered" src="/static/images/comment_icon.png" style="width: 32px;" onclick="newUser.showCommentPopup(this);" title2="Приедет в мае">
						<img class="declineBtn" onclick="newUser.declineUserPopup(this);" src="/static/images/reject_icon.png" style="width: 33px;    margin-right: 45px;margin-left: 5px;">
					</div>
				</div>
				</span>
            </div>
        </div>
    </div>
</div>