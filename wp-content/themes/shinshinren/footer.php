<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shinshinren
 * Theme: shinshinren by m.yamamoto
 */

?>
<footer>
    <div class="footer-description">
        <div class="footer-description__about">
            NPO法人<br>草津市心身障害児者連絡協議会
            <p>草津市における心身障害児者とそのご家族の皆様が、安心して暮らせる地域づくりを目指しています。</p>
        </div>
        <div class="footer-description__contact">
            <ul>
                <li><img src="<?php echo esc_url( home_url( ) ); ?>/assets/images/i-place.svg" alt="">〒525-0025<br>滋賀県草津市西渋川二丁目9番38号渋川福複センター2階</li>
                <li><img src="<?php echo esc_url( home_url( ) ); ?>/assets/images/i-phone.svg" alt="">077-565-2251</li>
                <li><img src="<?php echo esc_url( home_url( ) ); ?>/assets/images/i-mail.svg" alt="">info@kusatsu-renkyou.or.jp</li>
            </ul>
        </div>
    </div>

    <nav class="footer-nav">
        <div class="footer-nav__container">
            <div class="footer-nav__links">
                <h2>サイトマップ</h2>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( ) ); ?>">トップ</a></li>
                    <li><a href="<?php echo esc_url( home_url( ) ); ?>/about.html">法人について</a></li>
                    <li><a href="<?php echo esc_url( home_url( ) ); ?>/service.html">事業内容</a></li>
                    <li><a href="<?php echo esc_url( home_url( ) ); ?>/news">お知らせ</a></li>
                    <li><a href="<?php echo esc_url( home_url( ) ); ?>/recruit.html">採用情報</a></li>
                    <li><a href="<?php echo esc_url( home_url( ) ); ?>/contact">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="footer-nav__links">
                <h2>事業内容</h2>
                <ul>
                    <li><a href="./support/kikan.html">基幹相談支援センター</a></li>
                    <li><a href="./support/hotcoco.html">ほっとココ（計画相談）</a></li>
                    <li><a href="https://locolocoshiga.jp/">ロコロコ</a></li>
                    <li><a href="./support/community-support.html">草津市いきいきふれあい大運動会<br>草津市障害者孤立化防止事業</a></li>
                    <li><a href="">草津市障害福祉センター</a></li>
                </ul>
            </div>
            <div class="footer-nav__links">
                <h2>情報公開</h2>
                <ul>
                    <li><a href="">定款</a></li>
                    <li><a href="">収支決算書</a></li>
                    <li><a href="">事業報告書</a></li>
                    <li><a href="">理事会資料</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="footer-bottom">
        <small>©2025 NPO法人 草津市心身障害児者連絡協議会. All rights reserved.</small>
        <a href="./policy.html">プライバシーポリシー</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js"></script>
<script src="<?php echo esc_url( home_url( ) ); ?>/js/common.js"></script>
<script src="<?php echo esc_url( home_url( ) ); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>