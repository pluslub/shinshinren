<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinshinren
 */

get_header();
?>
<main>
    <section class="fv_news">
        <div class="fv__text">
            <div class="fv__inner">
                <span>CONTACT US</span>
                <h2>お問い合わせ</h2>
                <p>どんなことでもお気軽にご相談ください</p>
            </div>
        </div>
    </section>
    <section class="contact-information">
        <ul class="contact-information__list">
            <li class="contact-information__list--item">
                <h2>ご来所の際は</h2>
                <p>ご来所の際は、事前にお電話でご予約いただくとスムーズです。お待たせすることなくご相談いただけます。</p>
            </li>
            <li class="contact-information__list--item">
                <h2>受付時間</h2>
                <h3><img src="./assets/images/i-clock.svg" alt="">電話・来所</h3>
                <p>月曜日～土曜日　8:30～17:15</p>
                <p>
                    ※土日祝日・年末年始を除く<br>
                    ※電話での受付は（8:45～17:15）
                </p>
            </li>
        </ul>
    </section>

    <section class="contact-form">
        <div class="contact-form__inner">
            <h2 class="contact-form__title">
                <img class="contact-form__icon" src="./assets/images/i-form.svg" alt="">お問い合わせフォーム
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="dd3f737" title="お問合せフォーム"]'); ?>
        </div>
    </section>
</main>

<?php
get_footer();
