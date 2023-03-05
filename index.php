<?php get_header(); ?>

<a class="m_page-top" href="#top">
    <img src="img/btn_up.svg" alt="" class="m_page-top_img" />
</a>
<!-- /.m_page-top -->

<div class="top_kv" id="top">
    <div class="top_kv-inner l_container-lg">
    <div class="top_kv_box">
        <p class="top_kv_copy js_copy">
        Keisuke Saito
        </p>
        <p class="top_kv_sub-copy js_sub-copy">
        あなたの挑戦、<br class="u_lg-dn" />私にも手伝わせてください
        </p>
    </div>
    <!-- /.top_kv_box -->
    <div class="top_kv-scroll">
        <p class="top_kv-scroll_txt">scroll</p>
        <p class="top_kv-scroll_arrow">↓</p>
    </div>
    <!-- /.top_kv-scroll -->
    </div>
    <!-- /.top_kv-inner -->
</div>
<!-- /.top_kv -->

<main class="l_main">
    <section id="service" class="section service">
    <div class="l_container">
        <h2 class="title">SERVICE</h2>
        <div class="service-contents">
            <ul class="service-list">
                <li class="service-item">
                        <div class="service-img-inner">
                            <img 
                            src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon ionic-ios-paper.png' ); ?>" 
                            width="96"
                            height="77"
                            class="service-img service-img1"
                            alt="企画・デザイン">
                        </div>
                        <div class="service-txt-wrapper">
                            <p class="service-item-ttl">企画・デザイン</p>
                            <p class="service-item-content">
                                <a href="https://forms.gle/48aoia2Fd2pan9YD6" class="hearing_sheet">ヒアリングシート</a>を基に、お客様の作りたいWEBサイトのデザインや機能などをお伺いします。
                            </p>
                        </div>
                </li>
                <li class="service-item">
                        <div class="service-img-inner">
                            <img 
                            src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon material-computer.png' ); ?>" 
                            width="96"
                            height="77"
                            class="service-img service-img2"
                            alt="コーディング">
                        </div>
                        <div class="service-txt-wrapper">
                            <p class="service-item-ttl">コーディング</p>
                            <p class="service-item-content">
                                デザイン案をもとに、HTML、CSS、JavaScript等でWEBサイトを構築していきます。
                            </p>
                        </div>
                </li>
                <li class="service-item">
                        <div class="service-img-inner">
                            <img 
                            src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon awesome-handshake.png' ); ?>" 
                            width="96"
                            height="77"
                            class="service-img service-img3"
                            alt="その他">
                        </div>
                        <div class="service-txt-wrapper">
                            <p class="service-item-ttl">その他</p>
                            <p class="service-item-content">
                                サイト公開後のアフターサポートもいたします。
                                お困りごとや修正点があればご対応いたします。
                            </p>
                        </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- /service -->

<section id="work" class="section work">
    <h2 class="title">WORKS</h2>

    <div class="m_slider">
        <div class="about_slider-item">
            <a href="https://keke-sito.com/river_recruit/">
            <img src="img/river_about_kv_square.jpg" alt="">
            </a>
        </div>
        <div class="about_slider-item">
            
        </div>
        <div class="about_slider-item">
            
        </div>
    </div>
</section>

<section id="about" class="section about">
    <h2 class="title">ABOUT</h2>
    <div class="about-wrapper">
        <div class="about_img_wrapper">
            <img
            width="611"
            height="441"
            class="about_img"
            src="<?php echo esc_url( get_template_directory_uri() . '/img/写真(齊藤慶亮).jpg' ); ?>">
        </div>
        <table class="about_table pc">
            <tr class="tr">
                <th class="th">名前：</th>
                <td class="td">齊藤 慶亮（サイトウ ケイスケ）</td>
            </tr>
            <tr class="tr">
                <th class="th">趣味：</th>
                <td class="td">アニメ鑑賞、麻雀</td>
            </tr>
            <tr class="tr">
                <th class="th">座右の銘：</th>
                <td class="td">刻石流水（受けた恩は石に刻み、かけた情けは水に流す）</td>
            </tr>
            <tr class="tr">
                <th class="th">コメント：</th>
                <td class="td">あなたの挑戦、私にも手伝わせてください</td>
            </tr>
        </table>

        <table class="tbl-r02 about_table sp">
            <tr>
            <th>名前</th>
            <td>齊藤慶亮（サイトウケイスケ）</td>
            </tr>
            <tr>
            <th>趣味</th>
            <td>アニメ鑑賞、麻雀、web制作</td>
            </tr>
            <tr>
            <th>座右の銘</th>
            <td>刻石流水</td>
            </tr>
            <tr class="last">
            <th>コメント</th>
            <td>あなたの挑戦、私にも手伝わせてください</td>
            </tr>
        </table>
    </div>
</section>

<div class="m_cta">
      <h2 class="m_cta_copy">お問い合わせはこちら</h2>
      <p class="m_cta_txt">
        スタートアップのデジタルマーケについて<br />
        お気軽にご相談ください
      </p>

      <div class="m_btn-wrapper m_btn-wrapper__center m_cta_btn-wrapper">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="m_btn m_btn__md m_btn__cta">
          無料で相談する
        </a>
      </div>
      <!-- /.m_btn-wrapper -->
    </div>
    <!-- /.m_cta -->
</main>

<?php get_footer(); ?>