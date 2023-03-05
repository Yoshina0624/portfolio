<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Keisuke Saito</title>
<meta name="description" content="Keisuke Saitoのポートフォリオサイト" />
<meta name="format-detection" content="telephone=no" />

<!-- favicon/webclipicon -->
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.jpg' ); ?>" type="image/jpg" />
<!-- <link rel="icon" href="#" type="image/svg+xml" /> -->
<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.jpg' ); ?>" />

<!-- ogp -->
<!-- <meta property="og:site_name" content="ZeroPlus Corporate" />
<meta property="og:url" content="https://zero-plus.io/lesson/ogp/hp_ogp.jpg" />
<meta property="og:type" content="website" />
<meta property="og:title" content="ZeroPlus Corporate" />
<meta property="og:description" content="スタートアップのためのデジタルマーケティングを支援" />
<meta property="og:image" content="https://zero-plus.io/lesson/ogp/hp_ogp.jpg" />
<meta property="og:locale" content="ja_JP" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="スタートアップのためのデジタルマーケティングを支援" />
<meta name="twitter:image:src" content="https://zero-plus.io/lesson/ogp/hp_ogp.jpg" /> -->
    <?php wp_head(); ?>
</head>

<body class="js_body">
<div class="m_opening js_opening">
    <div class="m_opening_txt js_opening-txt">
    <p class="m_opening_heading">Welcome to my PORTFOLIO</p>
    </div>
</div>

<header class="l_header">
    <h1 class="l_header-logo">
    <a href="<?php echo esc_url( home_url() ); ?>" class="">Keisuke Saito</a>
    </h1>
    <nav class="l_header-nav js_navigation">

    <ul class="l_header-nav_list">
        <li class="l_header-nav_item">
            <a href="<?php echo esc_url( home_url('/service') ); ?>" class="l_header-nav_link">SERVICE</a>
        </li>
        <li class="l_header-nav_item">
            <a href="<?php echo esc_url( home_url( '/skill' ) ); ?>" class="l_header-nav_link orange">SKILL</a>
        </li>
        <li class="l_header-nav_item">
            <a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="l_header-nav_link blue">WORKS</a>
        </li>
        <li class="l_header-nav_item">
            <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="l_header-nav_link green">FAQ</a>
        </li>
        <li class="l_header-nav_item">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="l_header-nav_link red">CONTACT</a>
        </li>
    </ul>

    </nav>
    <button class="m_hamburger js_hamburger">
    <span class="m_hamburger-bar"></span>
    <span class="m_hamburger-bar"></span>
    <span class="m_hamburger-bar"></span>
    </button>
</header>