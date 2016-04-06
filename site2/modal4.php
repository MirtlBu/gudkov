<div class="modal-wrap modal-wrap--active authPopup" style="display: none;">
    <form class="modal signin" onSubmit="auth.usePopup(); return false;">
        <div class="form__row">
            <label for="phone" class="form__label">Телефон</label>
            <input id="phone" name="phone" class="form__input auth_phone" value="+7" type="text" required>
        </div>
        <div class="form__row">
            <label for="password" class="form__label">Пароль</label>
            <input id="password" name="password" class="form__input auth_password" type="password" required>
        </div>
        <div class="form__row form__row--button">
            <label class="form__label"></label>
            <button class="button button--blue" type="submit" onClick="">Войти</button>
			<a style="color: #0195ff;vertical-align: bottom;display: inline;cursor: pointer;font-size: 14px;margin-left: 10px;" onClick="$('.authPopup').fadeOut(); $('.restorePopup').fadeIn(500);">Забыли пароль?</a>
        </div>
        <div class="icon-close"></div>
    </form>
</div>