<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Keisuke Saito</title>
<meta name="description" content="Keisuke Saitoのポートフォリオサイト" />
<meta name="format-detection" content="telephone=no" />

<!-- favicon/webclipicon -->
<link rel="icon" href="#" type="image/png" />
<link rel="icon" href="#" type="image/svg+xml" />
<link rel="apple-touch-icon" href="#" />

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

<!-- css -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- font awesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet" />
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <!-- js -->
    <script src="js/main.js" defer></script>

    <?php wp_head(); ?>
</head>

<body class="js_body">
<!-- <div class="m_opening js_opening">
    <div class="m_opening_txt js_opening-txt">
    <p class="m_opening_heading">Welcome to my PORTFOLIO</p>
    </div>
</div> -->

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