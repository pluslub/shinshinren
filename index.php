<?php
define('WP_USE_THEMES', false);
require_once('./news/wp-load.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-65YJM31BMV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-65YJM31BMV');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>心身連｜NPO法人草津市心身障害児者連絡協議会</title>
    <meta name="description" content="草津市心身障害児者連絡協議会は、障害のある方とそのご家族が安心して暮らせる地域づくりを目指す団体です。活動内容、イベント情報、相談窓口のご案内など、草津市での福祉支援に関する情報を発信しています。">
</head>
<body>
<div id="cursor-badge" class="hover-badge">
    see<br>more
</div>
<header class="pc-header">
    <h1>
        <div class="header-logo">
            <a href="#"><img src="./assets/images/logo.svg" alt="心身連"></a>
        </div>
    </h1>
    <nav class="pc-header__nav">
        <button class="primary-button"><a href="/contact">お問い合わせ</a></button>
        <ul>
            <li><a href="#">トップ</a></li>
            <li><a href="./about.html">法人について</a></li>
            <li><a href="./service.html">事業内容</a></li>
            <li><a href="./recruit.html">採用情報</a></li>
            <li><a href="./news/">お知らせ</a></li>
        </ul>
    </nav>
</header>
    
<header class="sp-header">
    <h1>
        <div class="sp-header__logo">
            <img src="./assets/images/logo.svg" alt="心身連">
        </div>
    </h1>
    <button class="hamburger-grid" aria-label="メニュー" aria-controls="grid-menu" aria-expanded="false">
        <div class="hamburger-grid__dots">
            <span class="hamburger-grid__dot"></span>
            <span class="hamburger-grid__dot"></span>
            <span class="hamburger-grid__dot"></span>
            <span class="hamburger-grid__dot"></span>
        </div>
    </button>

    <nav id="grid-menu" class="nav-grid" aria-hidden="true">
        <div class="nav-grid__content">
            <div class="nav-grid__sections">
                <section class="nav-grid__section">
                    <h2 class="nav-grid__title">サイトマップ</h2>
                    <ul class="nav-grid__list">
                        <li><a href="#" class="nav-grid__link">トップ</a></li>
                        <li><a href="./about.html" class="nav-grid__link">法人について</a></li>
                        <li><a href="./service.html" class="nav-grid__link">事業内容</a></li>
                        <li><a href="./recruit.html" class="nav-grid__link">採用情報</a></li>
                        <li><a href="./news/" class="nav-grid__link">お知らせ</a></li>
                    </ul>
                </section>
                <button class="primary-button"><a href="/contact">お問い合わせ</a></button>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="fv">
        <div class="fv-images__title">
            <div class="fv-images__title--top">
                <img class="fv-title" src="./assets/images/make-it-local.png" alt="make it local">
                <img class="fv-title__image" src="./assets/images/hand-shake.png" alt="手を差し伸べる">
            </div>
            <img class="fv-title" src="./assets/images/maike-it-happy.png" alt="make it happy">
        </div>

        <div class="bg-blue">
            <div class="fv-text">
                <div class="rotate">
                    <img src="./assets/images/arrow.png" alt="下へ">
                </div>
                <div class="text-group">
                    <p>ともに探します。</p>
                    <p>あなたの「自分らしい暮らし」を</p>
                    <p>心から思える場所を。</p>
                    <p>一人じゃないと</p>
                </div>
            </div>
    
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <!-- 960pxまで表示 -->
                            <source srcset="./assets/images/pc-fv-1.jpg" media="(min-width: 960px)" type="image/jpg">
                            <img src="./assets/images/sp-fv-1.jpg" alt=”相談を受ける女性”>
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <!-- 960pxまで表示 -->
                            <source srcset="./assets/images/pc-fv-2.jpg" media="(min-width: 960px)" type="image/jpg">
                            <img src="./assets/images/sp-fv-2.jpg" alt=”シャボン玉で遊ぶ児童”>
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <!-- 960pxまで表示 -->
                            <source srcset="./assets/images/pc-fv-3.jpg" media="(min-width: 960px)" type="image/jpg">
                            <img src="./assets/images/sp-fv-3.jpg" alt=”手を繋ぐ家族”>
                        </picture>
                    </div>
                    
                    
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <img class="fv-title__image--sp" src="./assets/images/hand-shake.png" alt="手を差し伸べる">
        </div>
    </section>

    <div class="bg-blue">
        <section class="hero">
            <div class="hero-container">
                <div class="hero-intro">
                    <div class="split-trigger">
                        <span class="split">OUR MISSION</span>
                    </div>
                    <div class="split-trigger">
                        <h2 class="split">私たちの使命</h2>
                    </div>
                    <div class="split-trigger">
                        <p class="split">
                            心身に障害のある方々とそのご家族が、<br>
                            地域の中で安心して自分らしく暮らせる社会の実現を目指しています。
                        </p>
                    </div>
                </div>

                <div class="hero-values">
                    <p class="fade-item">不安を<span>安</span><span>心</span>へ</p>
                    <p class="fade-item">孤独を<span>繋</span><span>が</span><span>り</span>へ</p>
                    <p class="fade-item">迷いを<span>道</span><span>し</span><span>る</span><span>べ</span>へ</p>
                </div>

                <div class="hero-message">
                    <p class="text">
                        私たちの願いは、<br>
                        「すべての人が自分らしく生きられる社会」です。<br>
                        草津市を拠点に障害児者やその家族を支える福祉団体が、手を取り合い障害のある方々の「自主と自立」を大切にしながら一層の「自立と社会参加」を進めていきます。
                    </p>
                </div>
            </div>
        </section>

        
        <div class="slides-wrapper">
            <div class="slides-header">
                <div class="split-trigger"><span class="split">OUR SERVICE</span></div>
                <div class="split-trigger"><h2 class="split">事業内容</h2></div>
            </div>
            <section class="section section-1">
                <div class="section-content">
                    <div class="section-inner">
                        <img class="image" src="./assets/images/service-image-1.jpg" alt="男性職員" />
                        <div class="text-content">
                            <div class="text-header">
                                <img src="./assets/images/i-core-consultation.svg" alt="アイコン">
                                <div class="text-header__inner">
                                    <span>Core Consultation</span>
                                    <h2>基幹相談支援センター</h2>
                                </div>
                            </div>
                            <div class="text-body">
                                草津市における相談支援の中核として、障がいのある方への総合的かつ専門的な相談支援を行います。また、「草津市障害児（者）自立支援協議会」の運営などを通じて、地域の相談支援体制の強化と関係機関との連携に取り組んでいます。
                            </div>
                        </div>
                    </div>
                </div>
                <a class="card-links" href="./support/kikan.html"></a>
            </section>

            <section class="section section-2">
                <div class="section-content">
                    <div class="section-inner pink-bg">
                        <img class="image" src="./assets/images/service-image-2.jpg" alt="相談室イメージ" />
                        <div class="text-content">
                            <div class="text-header">
                                <img src="./assets/images/i-planning-consultation.svg" alt="アイコン">
                                <div class="text-header__inner">
                                    <span>Planning consultation</span>
                                    <h2>ほっとココ</h2>
                                </div>
                            </div>
                            <div class="text-body">
                                ほっとココは「これからの生活や仕事を、いっしょに考えるところ」です。「どんなサービスが合っているか」「どんな支援があれば安心して生活できるか」「困っていること」をお聞かせください。暮らしのこれからを、ココから一緒に考えましょう。
                            </div>
                        </div>
                    </div>
                </div>
                <a class="card-links" href="./support/hotcoco.html"></a>
            </section>

            <section class="section section-3">
                <div class="section-content">
                    <div class="section-inner blue-bg">
                        <img class="image" src="./assets/images/service-image-3.jpg" alt="談笑する人たち" />
                        <div class="text-content">
                            <div class="text-header">
                                <img src="./assets/images/i-employment-support.svg" alt="アイコン">
                                <div class="text-header__inner">
                                    <span>Employment support</span>
                                    <h2>ロコロコ</h2>
                                </div>
                            </div>
                            <div class="text-body">
                                ロコロコは地域の力になれる存在をめざす障がい福祉サービス事業所です。ハワイの言葉で「島の人々」を意味する”ロコ”に思いを重ねて名づけました。誰もがほっとできる空間。利用者さんの暮らしに寄り添い、ご家族の安心も支えるサービスをお届けします。
                            </div>
                        </div>
                    </div>
                </div>
                <a class="card-links" href="https://locolocoshiga.jp/"></a>
            </section>

            <section class="section section-4">
                <div class="section-content">
                    <div class="section-inner red-bg">
                        <img class="image" src="./assets/images/service-image-4.jpg" alt="運動会" />
                        <div class="text-content">
                            <div class="text-header">
                                <img src="./assets/images/isolation-prevention.svg" alt="アイコン">
                                <div class="text-header__inner">
                                    <span>Sports day / isolation prevention</span>
                                    <h2>
                                        草津市いきいきふれあい大運動会<br>
                                        草津市障害者孤立化防止事業
                                    </h2>
                                </div>
                            </div>
                            <div class="text-body">
                                草津市内の障害児者がスポーツをとおして交流ができる事を主とした運動会や障害者とその家族が地域で孤立することなく生活を送っていくため、孤立を防止する活動の孤立化防止事業など草津市の委託をうけて実施しております。
                            </div>
                        </div>
                    </div>
                </div>
                <a class="card-links" href="./support/community-support.html"></a>
            </section>

            <section class="section section-5">
                <div class="section-content">
                    <div class="section-inner orange-bg">
                        <img class="image" src="./assets/images/service-image-5.jpg" alt="草津市立障害者福祉センター" />
                        <div class="text-content">
                            <div class="text-header">
                                <img src="./assets/images/i-building.svg" alt="アイコン">
                                <div class="text-header__inner">
                                    <span>KUSATSU CITY WELFARE CENTER</span>
                                    <h2>草津市立障害者福祉センター</h2>
                                </div>
                            </div>
                            <div class="text-body">
                                草津市から指定管理者として渋川福複センター内2Fで草津市立障害者福祉センターを運営しております。
                            </div>
                        </div>
                    </div>
                </div>
                <a class="card-links" href="https://shinshinren.or.jp/"></a>
            </section>
        </div>
    </div>

    <section class="about">
        <div class="about-text">
            <div class="about-text__header">
                <div class="about-text__title">
                    <span>ABOUT US</span>
                    <h2>法人について</h2>
                </div>
                <button class="sp-button"><a href="./about.html"><img src="./assets/images/arrow.png" alt=""></a></button>
            </div>
            <div class="about-text__body">
                NPO法人草津市心身障害児者連絡協議会は、草津市における心身障害児者とそのご家族の皆様が、安心して暮らせる地域づくりを目指して活動しています。草津市や関係機関と連携しながら、相談支援、地域活動支援、自立支援など、多様なサービスを提供しています。
            </div>
        </div>
        <img class="about-visual" src="./assets/images/building.jpg" alt="建物外観写真">
        <a class="card-links" href="./about.html"></a>
    </section>

    <section class="news">
        <div class="news-header">
            <div class="news-header__title">
                <span>LATEST NEWS</span>
                <h2>お知らせ</h2>
            </div>
            <button class="primary-button">
                <a class="pc-news__btn" href="./news">お知らせ一覧</a>
                <a class="sp-news__btn" href="./news"><img src="./assets/images/arrow.png" alt=""></a>
            </button>
        </div>
<?php
  $args = array(
  'post_type' => 'post',
  'posts_per_page' => 3
  );
  $query = new WP_Query( $args );
?>
        <article class="news-articles">
            <ul class="news-list">
            <?php if( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <?php
                    $categories = get_the_category();
                    ?>
                <li class="highlight">
                    <div class="highlight-container">
                        <span class="time"><?php the_time('Y.m.d'); ?></span>
                        <h3 class="tag <?php echo $categories[0]->slug; ?>"><?php echo $categories[0]->name; ?></h3>
                    </div>
                    <div class="news-title">
                        <h4><a class="news-links" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <img src="./assets/images/arrow-blue.svg" alt="">
                    </div>
                </li>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php else : ?>
                <p class="">記事が見つかりませんでした。</p>
                <?php endif; ?>
            </ul>
        </article>
    </section>

    <section class="recruit">
        <div class="recruit-bg"></div>
        <div class="recruit-header">
            <div class="recruit-header__inner">
                <div class="recruit-header__title">
                    <span>RECRUIT</span>
                    <h2>採用情報</h2>
                </div>
                <button class="primary-button">
                    <a href="./recruit.html">詳細</a>
                </button>
            </div>
            <div class="recruit-text">
                NPO法人草津市心身障害児者連絡協議会は、草津市における心身障害児者とそのご家族の皆様が、安心して暮らせる地域づくりを目指して活動しています。
            </div>
        </div>

        <img class="recruit-image__1" src="./assets/images/recruit-image-1.jpg" alt="">
        <img class="recruit-image__2" src="./assets/images/recruit-image-2.jpg" alt="">
        <img class="recruit-image__3" src="./assets/images/recruit-image-3.jpg" alt="">
    </section>

    <section class="cta">
        <div class="cta-content">
            <h2>お気軽にご相談ください</h2>
            <p>
                どんな小さなことでも構いません。<br>
                まずはお話を聞かせてください。<br>
                一緒に考え、最適な支援をご提案します。
            </p>
            <button class="primary-button"><a href="/contact">お問い合わせ</a></button>
        </div>
    </section>
</main>

<footer>
    <div class="footer-description">
        <div class="footer-description__about">
            NPO法人<br>草津市心身障害児者連絡協議会
            <p>草津市における心身障害児者とそのご家族の皆様が、安心して暮らせる地域づくりを目指しています。</p>
        </div>
        <div class="footer-description__contact">
            <ul>
                <li><img src="./assets/images/i-place.svg" alt="">〒525-0034<br>滋賀県草津市草津一丁目3-5（本部所在地）</li>
                <li><img src="./assets/images/i-phone.svg" alt="">077-569-0351</li>
                <li><img src="./assets/images/i-mail.svg" alt="">kusatsu-fukushi2@swan.ocn.ne.jp</li>
            </ul>
        </div>
    </div>

    <nav class="footer-nav">
        <div class="footer-nav__container">
            <div class="footer-nav__links">
                <h2>サイトマップ</h2>
                <ul>
                    <li><a href="#">トップ</a></li>
                    <li><a href="./about.html">法人について</a></li>
                    <li><a href="./service.html">事業内容</a></li>
                    <li><a href="./news/">お知らせ</a></li>
                    <li><a href="./recruit.html">採用情報</a></li>
                    <li><a href="/contact">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="footer-nav__links">
                <h2>事業内容</h2>
                <ul>
                    <li><a href="./support/kikan.html">基幹相談支援センター</a></li>
                    <li><a href="./support/hotcoco.html">ほっとココ（計画相談）</a></li>
                    <li><a href="https://locolocoshiga.jp/">ロコロコ</a></li>
                    <li><a href="./support/community-support.html">草津市いきいきふれあい大運動会<br>草津市障害者孤立化防止事業</a></li>
                    <li><a href="https://shinshinren.or.jp/">草津市立障害者福祉センター</a></li>
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
<script src="./js/common.js"></script>
<script src="./js/main.js"></script>
</body>
</html>