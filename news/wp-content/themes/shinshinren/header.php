<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shinshinren
 * Theme: shinshinren by m.yamamoto
 */

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://kusatsu-shinshinren.com/css/common.css">
    <link rel="stylesheet" href="https://kusatsu-shinshinren.com/css/style.css">
    <title>心身連｜NPO法人草津市心身障害児者連絡協議会</title>
    <meta name="description" content="草津市心身障害児者連絡協議会は、障害のある方とそのご家族が安心して暮らせる地域づくりを目指す団体です。活動内容、イベント情報、相談窓口のご案内など、草津市での福祉支援に関する情報を発信しています。">
		<?php wp_head(); ?>
</head>
<body>
<header class="pc-header">
    <h1>
        <div class="header-logo">
            <a href="https://kusatsu-shinshinren.com/"><img src="https://kusatsu-shinshinren.com/assets/images/logo.svg" alt="心身連"></a>
        </div>
    </h1>
    <nav class="pc-header__nav">
        <button class="primary-button"><a href="https://kusatsu-shinshinren.com/contact">お問い合わせ</a></button>
        <ul>
            <li><a href="https://kusatsu-shinshinren.com/">トップ</a></li>
            <li><a href="https://kusatsu-shinshinren.com/about.html">法人について</a></li>
            <li><a href="https://kusatsu-shinshinren.com/service.html">事業内容</a></li>
            <li><a href="https://kusatsu-shinshinren.com/recruit.html">採用情報</a></li>
            <li><a href="https://kusatsu-shinshinren.com/news">お知らせ</a></li>
        </ul>
    </nav>
</header>
    
<header class="sp-header">
    <h1>
        <div class="sp-header__logo">
            <img src="https://kusatsu-shinshinren.com/assets/images/logo.svg" alt="心身連">
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
                        <li><a href="https://kusatsu-shinshinren.com/" class="nav-grid__link">トップ</a></li>
                        <li><a href="https://kusatsu-shinshinren.com/about.html" class="nav-grid__link">法人について</a></li>
                        <li><a href="https://kusatsu-shinshinren.com/service.html" class="nav-grid__link">事業内容</a></li>
                        <li><a href="https://kusatsu-shinshinren.com/recruit.html" class="nav-grid__link">採用情報</a></li>
                        <li><a href="https://kusatsu-shinshinren.com/news" class="nav-grid__link">お知らせ</a></li>
                    </ul>
                </section>
                <button class="primary-button"><a href="https://kusatsu-shinshinren.com/contact">お問い合わせ</a></button>
            </div>
        </div>
    </nav>
</header>