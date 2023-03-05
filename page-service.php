<!-- 
    Template Name: サービスページ
-->

<?php get_header(); ?>

<main class="l_main">
    <div class="l_contents">
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
                                        <a href="https://forms.gle/48aoia2Fd2pan9YD6" class="hearing_sheet">ヒアリングシート</a>を基に、お客様の作りたいWEBサイトのデザインや機能などをお伺いします。<br>使用するテキスト及び写真等のデータをご用意いただくことがございますので、予めご了承ください。
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
                                        デザイン案をもとに、HTML/CSS、JavaScript等でWEBサイトを構築していきます。
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
        <section class="price" id="price">
            <div class="l_container">
                <h2 class="title">PRICE</h2>
                <div class="price-contents">
                    <div class="price-coding">
                        <h2 class="price-title">HP・LPコーディング</h2>
                        <table class="price-table">
                            <tr class="price-tr">
                                <th class="price-th">トップページ 1P<br>トップページのデザインをもとに構築いたします。</th>
                                <td class="price-td">50000円~</td>
                            </tr>
                            <tr class="price-tr">
                                <th class="price-th">下層ページ 1P<br>下層ページのデザインをもとに構築いたします。</th>
                                
                                <td class="price-td">25000円~</td>
                            </tr>
                            <tr class="price-tr">
                                <th class="price-th">下層ページ(シンプル) 1P<br>テキストのみ等シンプルなページの場合の価格です。(プライバシーポリシー、利用規約など)</th>
                                
                                <td class="price-td">15000円~</td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-coding">
                        <h2 class="price-title">WordPress構築</h2>
                        <table class="price-table">
                            <tr class="price-tr">
                                <th class="price-th">Wordpress化(CMS化)<br>通常投稿、お問い合わせ機能、基本プラグイン導入、本番環境への移行作業など。</th>
                                
                                <td class="price-td">75000円~</td>
                            </tr>
                        </table>
                    </div>
                    <div class="price-coding">
                        <h2 class="price-title">追加オプション</h2>
                        <table class="price-table">
                            <tr class="price-tr">
                                <th class="price-th">検討中</th>
                                <td class="price-td">○○円~</td>
                            </tr>
                            <tr class="price-tr">
                                <th class="price-th">検討中</th>
                                <td class="price-td">△△円~</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

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