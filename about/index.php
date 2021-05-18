<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Интернет-магазин WHOGRILL предлагает заказать современные газовые, угольные, керамические и электрические грили по самым привлекательным ценам в Москве и Санкт-Петербурге с доставкой на дом.");
$APPLICATION->SetTitle("Заказать гриль на дом в Москве и Санкт-Петербурге, купить грили и барбекю в интернет-магазине с доставкой &mdash; официальный сайт Weber (Вебер)");
?>
<section class="gr_section">
    <div class="container">
        <h1 class="gr_title">О компании</h1>
    </div>
</section>
<section class="gr_section gr_banner gr_banner_about">
    <div class="container">
        <div class="gr_slider">
            <div class="gr_slide"><img src="<?=SITE_TEMPLATE_PATH?>/img/banner2.jpg" alt=""></div>
        </div>
    </div>
</section>
<section class="gr_section">
    <div class="container">
        <div class="gr_imagetext col-md-6 gr_p0">С 2013 года мы помогаем нашим клиентам сделать свой отдых на природе комфортным и вкусным.</div>
    </div>
</section>
<?$APPLICATION->IncludeComponent(
    "koorochka:medialib.slider",
    ".default",
    array(
        "COMPONENT_TEMPLATE" => ".default",
        "COLLECTIONS" => "2",
        "THUMB_RESIZE" => "400"
    ),
    false
);?>
<section class="gr_section gr_step">
    <div class="container">
        <div class="gr_steps">
            <div class="gr_left_steps">
                <h2 class="gr_title_steps">Мы любим то, что мы делаем, поэтому делаем хорошо</h2>
            </div>
            <div class="gr_right_steps">
                <div class="gr_line_body">
                    <div class="gr_line"></div>
                </div>
                <ul class="gr_step_list">
                    <li>
                        <h4 class="gr_title_step">Консультация</h4>
                        <p class="gr_text_step">Поможем выбрать<br><span>гриль</span> и <span>аксессуары</span></p>
                    </li>
                    <li>
                        <h4 class="gr_title_step">Служба доставки</h4>
                        <p class="gr_text_step">Мы <span>Доставим</span> и соберем гриль,<br>а также расскажим о нюансах</p>
                    </li>
                    <li>
                        <h4 class="gr_title_step">Гарантия и обслуживание</h4>
                        <p class="gr_text_step">Поддержка и гарантия обслуживания,<br> расходники, аксессуары, ремонт,<br>чистка, профилактика</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="gr_section gr_team_title">
    <div class="container">
        <h2 class="gr_title">Наша команда</h2>
    </div>
</section>
<section class="gr_section gr_team_image">
    <div class="container">
        <figure class="gr_team_photo">
            <picture>
                <source srcset="<?=SITE_TEMPLATE_PATH?>/img/team-mini.jpg" media="(max-width: 575px)">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/team.jpg" alt="">
            </picture>
        </figure>
    </div>
</section>
<section class="gr_section gr_team">
    <div class="container">
        <div class="gr_text_team">
            <div class="gr_text">
                <p>Наша миссия —  вывести отдых на природе на новый уровень с помощью качественных грилей и аксессуаров. Даже если вы новичок в культуре гриллинга и не имеете никаких познаний в барбекю, их видах и возможностях, мы подберем вам идеальный гриль и научим с ним взаимодействовать.</p>
                <p>Мы живем идеей распространения гриль-культуры в массы, поэтому выбираем только качественные, надежные модели грилей от ведущих производителей, и проводим мастер-классы, чтобы вы в полном мере могли ощутить себя гриллером.</p>
            </div>
            <div class="gr_text">
                <p>Наша задача — собрать ваши пожелания и потребности, и реализовать их в лучшем виде — подобрать «ваш гриль». И у нас это уже получилось с 50-ю тысячами  клиентов.</p>
                <p>Любовь к барбекю начинается с аромата дымка и покупки первого гриля. Со временем приготовление на огне перерастает в хобби и гриль становится неотъемлемой частью вашего отдыха.</p>
                <p>Мы продаем не просто грили — мы меняем ваш образ жизни и представление об отдыхе.</p>
            </div>
        </div>
    </div>
</section>
<section class="gr_section gr_section_tags">
    <div class="container">
        <h2 class="gr_title">Мы поможем вам выбрать</h2>
        <h4 class="gr_subtitle">Выберите интересующую вас категорию</h4>
        <ul class="gr_tag_list">
            <li><a href="#">Гриль кухни</a></li>
            <li><a href="#">Аксессуары</a></li>
            <li><a href="#">Оборудования</a></li>
            <li><a href="#">Грили</a></li>
        </ul>
    </div>
</section>


<section class="secPartners gr_section">
    <div class="containerFrol">
        <div class="secPartners__wrap">
            <div class="secPartners__top">
                <div class="titleSecFrol secPartners__title">Whogrill является официальным партнером</div>
            </div>
            <div class="secPartners__content blockPartnersFrol wrapNavFrol">
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/1.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/2.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/3.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/4.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/5.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/1.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/2.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/3.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/4.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
                <div class="blockPartnersFrol__el">
                    <a href="#" class="partnersFrolEl">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/blockPartners/5.jpg" alt="" class="partnersFrolEl__img">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>