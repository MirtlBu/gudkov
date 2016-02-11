<?php
        if(basename($_SERVER['REQUEST_URI']) !== '') {

            echo "<div class='footer'>";
        }
        else {
            echo "<div class='footer footer--fixed'>";
        }
?>


    <div class="container">
        <div class="footer__social">
            <div class="footer__text">Расскажи друзьям о кампании</div>
            <div class="social-likes">
                <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
                <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
                <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
            </div>
        </div>
        <div class="footer__links flexbox">
            <div class="flexbox__item">
                <a href="#" class="text-link text-small">Я буду голосовать сам</a>
                <a href="#" class="text-link text-small">Я привёл человека</a>
            </div>
            <div class="flexbox__item">
                <a href="#" class="text-link text-small">Хочу помогать на кампании</a>
                <a href="#" class="text-link text-small">Карта сторонников</a>
            </div>
            <div class="flexbox__item">
                <a href="#" class="text-link text-small">Поддержать кампанию</a>
            </div>
            <div class="flexbox__item">
                <span class="text-small">Предвыборная кампания в Мосгордуму 2016</span>
            </div>

        </div>
    </div>
</div>